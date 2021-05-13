var currentYear = "2019";
//get xml data
function loadStory(){
fetch('/data/storyData.xml').then((res) => {
    res.text().then((xml) => {
        let parser = new DOMParser();
        let xmlDom = parser.parseFromString(xml, 'text/xml');

        var eleList = xmlDom.getElementsByTagName('table');

        var output = '';
        for (let i = 0; i < eleList.length; i++) {
            var year = eleList[i].querySelector('[name="year"]').firstChild.nodeValue;
            
            var content_ = eleList[i].getElementsByTagName('content')[0].firstChild.wholeText;
            output += `
            <a class="specialLink" href="#` + year + `" >
                <div class="timeline-item" id="` + year + `">
                    <span class="year_title">` + year + `</span>
                    <h2 class="item_title">` + eleList[i].querySelector('[name="title"]').firstChild.nodeValue + ` </h2>
                    <div class="innerContent">
                        `+ content_+`
                    </div>
                </div>
            </a>
            `;
        }
        document.getElementsByClassName('container')[0].innerHTML = output;
    });
});
}

//app obj for single page rounting
function getCurrentPage(ev){
    let result;
    let target = ev.target;
    let changeYear = '';
    if (ev.target.tagName == "H2" || ev.target.tagName == "P"
        || ev.target.tagName == "SPAN" || ev.target.tagName == "IMG") {
        result = ev.target.parentElement.children[0].innerHTML;
        if (ev.target.parentElement.className == "innerContent") {
            result = ev.target.parentElement.parentElement.children[0].innerHTML;
        }
        target = ev.target.parentElement;
    } else if (ev.target.classList.contains('timeline_icon_close')){
        result = "close"
        target = ev.target.parentElement;
    } else if (ev.target.classList.contains('fa-hand-point-down') 
            || ev.target.classList.contains('fa-hand-point-up')) {
        result = "change"
        target = ev.target.parentElement;
        changeYear = ev.target.attributes[1].nodeValue;
    }else{
        result = ev.target.children[0].innerHTML;
    }
    return [result, target, changeYear];
}
const app = {
    pages: [],
    show: new Event('show'),
    init: function () {
        var promise = new Promise((resolve, reject) => {
            loadStory();
            resolve();
        });

        promise.then((val) => {
            var inter = setInterval(() => {
                app.pages = document.querySelectorAll('.timeline-item');
                if(app.pages.length != 1){
                    /*
                    app.pages.forEach((pg) => {
                        pg.addEventListener('show', app.pageShown);
                    })*/

                    document.querySelectorAll('.timeline-item').forEach((link) => {
                        link.addEventListener('click', app.nav);
                    })

                    let hash = location.hash;
                    if(hash.length != 0) {
                        let newhash = location.hash.replace('#', '');
                        document.querySelector('.active').classList.remove('active');
                        document.getElementById(newhash).classList.add('active');
                        //window.scrollTo(0,parseInt(window.getComputedStyle(document.getElementById(newhash)).
                        //transformOrigin.split('px')[1]));
                    }       
                    clearInterval(inter);
                }           
            }, 300);
            
            inter;
        });
        
    },
    nav: function (ev) {
        ev.preventDefault();
        let resultList = getCurrentPage(ev);
        let currentPage = resultList[0];
        try{
            if (currentPage == "close") {
                currentPage = "mock"
                document.querySelector('.active').classList.remove('active');
                document.getElementById(currentPage).classList.add('active');
                history.pushState({}, currentPage, `#${''}`);
                document.getElementById(currentPage).dispatchEvent(app.show);
            } else if (currentPage == "change") {
                let changeYear = resultList[2];
                document.querySelector('.active').classList.remove('active');
                document.getElementById(changeYear).classList.add('active');
                history.pushState({}, changeYear, `#${changeYear}`);
                document.getElementById(changeYear).dispatchEvent(app.show);
            } else {
                document.querySelector('.active').classList.remove('active');
                document.getElementById(currentPage).classList.add('active');
                history.pushState({}, currentPage, `#${currentPage}`);
                document.getElementById(currentPage).dispatchEvent(app.show);
            }
        }catch{
            currentPage = "mock"
            document.getElementById(currentPage).classList.add('active');
            history.pushState({}, currentPage, `#${''}`);
            document.getElementById(currentPage).dispatchEvent(app.show);
        } 
    },
    pageShown: function (ev) {
        console.log('Page', ev.target.id, 'just shown');
        let h1 = ev.target.cl('h1');
        h1.classList.add('big')
        
    }
}

function xmlMove(){
    const scrollVal = window.scrollY;
    const xmlEle = document.getElementById('xml')
    const menuHeight = parseInt(window.getComputedStyle(
        document.getElementById('menu')).height);
    if (scrollVal > menuHeight) {
        xmlEle.style.position = "fixed";
        xmlEle.style.top = "25px";
        xmlEle.style.right = "15px";
    } else {
        xmlEle.style.position = "absolute";
        xmlEle.style.top = menuHeight + 15 + "px";
        xmlEle.style.right = "10px";
    }
}
xmlMove();
document.addEventListener('DOMContentLoaded', app.init);
document.addEventListener('scroll', xmlMove);
window.addEventListener('resize', xmlMove);