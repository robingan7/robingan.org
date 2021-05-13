
/**
 * this file also contains some general use functions
 */

//unloaded bar
document.addEventListener('readystatechange', () => {
    if(document.readyState == 'complete') {
        document.getElementById('progressBar').style.display = 'none';
    }
});

window.addEventListener('beforeunload', (event) => {
    document.getElementById('progressBar').style.display = 'inline';
});

//test if the suer ask the cookie question
var cookieasker = document.getElementById('cookie_asked');
if (Cookies.get('robingan.org_isAnswered') == undefined) {
    cookieasker.style.display = "block";
}

//if the user response the cookie question
function replyCookie(reply) {
    var cookieasker = document.getElementById('cookie_asked');

    if (reply) {
        Cookies.set("robingan.org_isAnswered", "true", { expires: 66 });
    } else {
        Cookies.set("robingan.org_isAnswered", "false", { expires: 66 });
    }

    cookieasker.classList.add('gone');

    setTimeout(() => {
        cookieasker.style.display = "none";
    }, 200);
}

function trySub(obj) {
    let id_ = obj.id;
    let email = document.getElementById(id_ + '_email').value;
    addSubscriber(email, id_);
}

function addSubscriber(subEmail, id_input) {
    $.ajax({
        url: "/php/addSubscriber.php",
        method:"POST",
        data:{
            subEmail: subEmail
        },
        success: (result) => {

            if (result != "short"){
                $("#" + id_input).addClass("active");
                $("#" + id_input).html(result);
                $("#" + id_input + '_email').addClass("active");
            }
        },
        error: (xhr, status, error)=>{
            $(id_input).html(error);
        }
    });
}

function addOneView(name, type) {
    return Promise.resolve($.ajax({
        url: "/php/addOneView.php",
        method: "POST",
        data: {
            name: name,
            type: type
        }
    }));
}

/** project and media functions */
function setScroll(isScroll) {
    if (typeof(Storage) !== "undefined") {
        let despage = document.getElementById('projectDesPage');
        if(location.hash.length > 0) {
            if(isScroll) {
                let scrollby = localStorage.getItem(location.hash + "_project");
                const int = setInterval(()=> {
                    despage.scrollTo(0, scrollby);
                },10)
    
                setTimeout(()=> {
                    clearInterval(int);
                }, 200);
            } else {
                despage.scrollTo(0, 0);
            }
        }
    } 
}

function onScroll(){
    let scrollVal = document.getElementById('projectDesPage').scrollTop;
    localStorage.setItem(location.hash+"_project", scrollVal);
    //console.log(location.hash+"_project", scrollVal);
    /*if (ele.scrollTop > 120){
        //document.getElementById('projectDesPage-title').classList.add('h1Fixed');
        //document.getElementById('projectDesPage-menu').classList.add('ulFixed');
    } else {
        //document.getElementById('projectDesPage-menu').classList.remove('ulFixed');
        //document.getElementById('projectDesPage-title').classList.remove('h1Fixed');
    }*/
}
/**------------------------------ */

function closeNews() {
    let btnn = document.getElementById('news_subscribe_button');
    btnn.classList.remove('active');
    btnn.innerText = "Subscribe";
    document.getElementById('news_subscribe_button_email').classList.remove('active');
    document.getElementById('modal_cover').style.display = "none";

    let move = document.getElementById('lastest_news');
    let top = parseInt(move.style.top);
    let height = parseInt(move.style.height);

    move.style.transform = "translateY(" + -1 * window.innerHeight + "px)";

    setTimeout(() => {
        document.getElementById('lastest_news').style.display = "none";
    }, 200);

    var date_ = document.getElementById('news_date').innerText;
    Cookies.set("robingan.org_isSeenNews", date_, { expires: 66 });
}

function loadLastestNews(){
    fetch('/data/mediaData.xml').then((res) => {
        res.text().then((xml) => {
            let parser = new DOMParser();
            let globalXAM = parser.parseFromString(xml, 'text/xml');
            let eleList = globalXAM.getElementsByTagName('table');

            let date = eleList[0].getElementsByTagName('date')[0].firstChild.nodeValue;
            let title = eleList[0].getElementsByTagName('title')[0].firstChild.nodeValue;
            let des = eleList[0].getElementsByTagName('des')[0].firstChild.wholeText;
            let link = eleList[0].id;

            document.getElementById('news_title-title').innerText = title;
            document.getElementById('news_date').innerText = date;
            document.getElementById('news_content_text-content').innerHTML = des;
            document.getElementById('lastestNewsLink').href = "/media/#" + link;
        });
    });
}

function openNew() {
    removeDoesNotSupport();
    let move = document.getElementById('lastest_news');
    if (Cookies.get('robingan.org_isSeenNews') == undefined ||
        document.getElementById('news_date').innerText != Cookies.get('robingan.org_isSeenNews')) {
        move.classList.add('show');
        document.getElementById('modal_cover').style.display = "block";
    } else {
        move.style.display = "none";
    }
}

function filterLinks2(link) {
    if(link == 'localhost' || link == '') {
        return 'robingan.org';
    }

    if(link.split(':').includes('mailto')) {
        return 'email';
    }

    return link;
}

function filterLinks(llink) {
    if(llink.includes('https://')) {
        llink = llink.substring(8, llink.length);
        return filterLinks2(llink.split('/')[0]);
    } 
    
    if(llink.includes('http://')) {
        llink = llink.substring(7, llink.length);
        return filterLinks2(llink.split('/')[0]);
    }

    return filterLinks2(llink);
}

function links() {

    let links = document.getElementsByTagName('A');
    
    for(let i=0; i<links.length;i++) {
        links[i].addEventListener('mousemove', (e)=> {
            let back = hasLink(e.target);
            let mit = document.getElementById('mit');

            if(back[0]) {
                mit.style.top = e.clientY-mit.clientHeight-1 + 'px';
                mit.style.left = e.clientX+1 + 'px';
                mit.innerText = filterLinks(back[1]);
            }
        });
    }
    
    window.addEventListener('mouseover', (e)=> {
        let mit = document.getElementById('mit');
    
        if(hasLink(e.target)[0]) {
            mit.style.display = 'inline';
        } else {
            mit.style.display = 'none';
        }
    });
}

function hasLinkParent(ele) {
    if((ele.tagName == 'A') && ele.href != undefined && ele.href != '') {
        return [true, ele.href];
    }
    if(ele.parentNode == undefined) {
        return [false, undefined];
    }

    return hasLink(ele.parentNode);
}

function hasLinkChild(ele) {
    if((ele.tagName == 'A') && ele.href != undefined && ele.href != '') {
        return [true, ele.href];
    }
    if(ele.childNode == undefined || ele.childNode.length == 0 || ele.childNode.length > 1 ) {
        return [false, undefined];
    }

    return hasLink(ele.childNode[0]);
}

function hasLink(ele) {
    let child = hasLinkChild(ele);

    if(child[0]) {
        return child;
    } else {
        let parent = hasLinkParent(ele);

        if(parent[0]) {
            return parent;
        } else {
            return [false, undefined];
        }
    }
}


/**
 * check if the user is on mobile or ipad
 */
function isMobile() {
    if (/iPhone|iPad|iPodMobi|Android/i.test(navigator.userAgent)) {
        return true;
    }
    return false;
}

function checkBrower(){
    if (!isMobile()){
        var test = function (reg) { 
            return reg.test(window.navigator.userAgent); 
        }
        switch (true) {
            case test(/edge/i): return false;//misco edge
            case test(/Trident/i): return false;//ie
            default: return true;
        }
    }else{
        return true;
    }
}

function fliterOnlyLetter(s){
    let letters = /^[A-Za-z]+$/;

    let result = "";
    for (var i = 0; i < s.length; i++) {
        if(s.charAt(i).match(letters)){
            result += s.charAt(i);
        }
    }

    return result;
}

function removeDoesNotSupport(){
    document.getElementById('doesNotSupport').classList.remove('show');
    document.getElementById('doesNotSupport').style.display = "none";
}
function viewAnyWay(){
    removeDoesNotSupport();
    document.getElementById('modal_cover').style.display = "none";
    openNew();
}

function activeDoesNotSupport(){
    document.getElementById('modal_cover').style.display = "block";
    document.getElementById('doesNotSupport').classList.add('show');
}

function start(){
    if (checkBrower()){
        openNew();
        addOneView("mainview", "main");
    } else{
        activeDoesNotSupport();
    }
}
loadLastestNews();

setTimeout(()=>{
    start();
},2000);