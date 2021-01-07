var globalXAM, globalSelectPage;

function loadMedia() {
    fetch('../data/mediaData.xml').then((res) => {
        res.text().then((xml) => {
            let parser = new DOMParser();
            globalXAM = parser.parseFromString(xml, 'text/xml');

            var eleList = globalXAM.getElementsByTagName('table');
            var output = '';
            for (let i = 0; i < eleList.length; i++) {
                var date = eleList[i].getElementsByTagName('date')[0].firstChild.nodeValue;
                var title = eleList[i].getElementsByTagName('title')[0].firstChild.nodeValue;
                var id = eleList[i].id;
    
                output += `
                    <div class="content-blog" media="`+ id+`">
                        <a>
                        <i class="fas fa-blog"></i>
                        <h2>`+ title +`</h2>
                        <p>`+ date +`</p>
                        </a>
                    </div>  
                `;
            }
            document.getElementById('content').innerHTML = output;
        });
    });
}

function resetTitleAndDescription() {
    document.title = 'Media|Robin Gan';
    document.querySelector('[name="description"]').content = "Robin Gan's media --甘翔羽 " + headerOG;
    document.getElementById('projectDesPage').innerHTML = `
    <a onclick="closeDes()" id="close_cross_new" class="btn">
        <span>&#10005;</span>
    </a>
    <h2 id="projectDesPage-title">Data Loading</h2>
    <div id="projectDesPage-content">
        <h3>Loading</h3>
        <div class="loading">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <p>Sorry for having you waiting..</p>
        <p>Go back to <a href="/">home page</a> if this page doesn't show up in 30 seconds. </p>
    </div>
    `;
}

const formatView = n => { 
    if (n < 1e3) return n; 
    if (n >= 1e3 && n < 1e6) return +(n / 1e3).toFixed(1) + "K"; 
    if (n >= 1e6 && n < 1e9) return +(n / 1e6).toFixed(1) + "M"; 
    if (n >= 1e9 && n < 1e12) return +(n / 1e9).toFixed(1) + "B"; 
    if (n >= 1e12) return +(n / 1e12).toFixed(1) + "T"; 
}; 

function loadProjectDes(id) {
    try {
        var table_ = globalXAM.querySelector('[id="' + id + '"]');
        var date_ = table_.getElementsByTagName('date')[0].firstChild.nodeValue;
        var title_ = table_.getElementsByTagName('title')[0].firstChild.nodeValue;
        var content_ = table_.getElementsByTagName('content')[0].firstChild.wholeText;
       // var current_ = "2";

        addOneView(id, "blog").then((currentView) => {
            var output = `
            <a onclick="closeDes()" id="close_cross_new" class="btn">
                <span>&#10005;</div>
            </a>

            <h2 id="projectDesPage-title" date="By Robin Gan &nbsp;&bull; &nbsp;`+ date_ +`&nbsp; &bull; &nbsp;` + formatView(currentView) + ` views">` + title_ + `</h2>
            
            <div id="projectDesPage-content">

                `+ content_ + thanksForReadingBlock +`
            </div>
            `;

            document.title = title_ + ' Media|Robin Gan';
            document.querySelector('[name="description"]').content = title_ + " - Robin Gan's media --甘翔羽 " + headerOG;
            document.getElementById('projectDesPage').innerHTML = output;
        });
    } catch{
        resetTitleAndDescription();
        console.log("error in loadProjectDes()");
    }
}

function getCardClassName(element, num) {
    if (num == 3 && !element.classList.contains('content-blog')) {
        globalSelectPage = "none";
        return;
    } else if (element.classList.contains('content-blog')) {
        globalSelectPage = element.attributes.media.nodeValue;
        return;
    }
    getCardClassName(element.parentElement, num + 1);
}

function closeDes() {
    resetTitleAndDescription();
    document.getElementById('content').classList.remove('contentDisappear');
    document.getElementById('projectDesPage').classList.add('projectPageAppear');
    history.pushState({}, globalSelectPage, `#${''}`);
}

//app to load project des
const app = {
    pages: [],
    show: new Event('show'),
    init: function () {
        var promise = new Promise((resolve, reject) => {
            loadMedia();
            resolve();
        });

        promise.then((val) => {
            var inter = setInterval(() => {
                app.pages = document.querySelectorAll('.content-blog');
                if (app.pages.length != 1) {

                    document.querySelectorAll('.content-blog').forEach((link) => {

                        link.addEventListener('click', app.nav);
                    })

                    let hash = location.hash;
                    if (hash.length != 0) {
                        let newhash = location.hash.replace('#', '');
                        if (globalXAM.querySelector('[id="' + newhash + '"]') == undefined) {
                            closeDes();
                        } else {
                            document.getElementById('content').classList.add('contentDisappear');
                            document.getElementById('projectDesPage').classList.remove('projectPageAppear');

                            document.title = newhash + 'Media|Robin Gan';
                            document.querySelector('[name="description"]').content = newhash + " - Robin Gan's media --甘翔羽 " + headerOG;
                            loadProjectDes(newhash);
                        }
                    }
                    clearInterval(inter);
                }
            }, 300);

            inter;
        });
        window.addEventListener('popstate', app.pop);
    },
    nav: function (ev) {
        ev.preventDefault();
        getCardClassName(ev.target, 0);

        try {
            if (globalSelectPage != "none") {
                let timeOut = 200;
                if (!isMobile()) {
                    timeOut = 0;
                }
                setTimeout(() => {
                    document.getElementById('content').classList.add('contentDisappear');
                    document.getElementById('projectDesPage').classList.remove('projectPageAppear');
                    loadProjectDes(globalSelectPage);
                    history.pushState({}, globalSelectPage, `#${globalSelectPage}`);
                }, timeOut);
            }
        } catch{
            closeDes();
        }
    },
    pop: function(ev){
        let newhash = location.hash.replace('#', '');

        if (globalXAM.querySelector('[id="' + newhash + '"]') == undefined || newhash == ""){
            closeDes();
        }else{
            let despage = document.getElementById('projectDesPage');
            globalSelectPage = newhash;
            loadProjectDes(globalSelectPage);
            document.getElementById('content').classList.add('contentDisappear');
            document.getElementById('projectDesPage').classList.remove('projectPageAppear');
            despage.scrollTo(0, 0);
            despage.dispatchEvent(app.show);
        }               
    }
}
document.addEventListener('DOMContentLoaded', app.init);

function scrollFun() {
    var ele = document.getElementById('projectDesPage');

    if (ele.scrollTop > 120) {
        //document.getElementById('projectDesPage-title').classList.add('h1Fixed');
        //document.getElementById('projectDesPage-menu').classList.add('ulFixed');
    } else {
        //document.getElementById('projectDesPage-menu').classList.remove('ulFixed');
        //document.getElementById('projectDesPage-title').classList.remove('h1Fixed');
    }
}
document.getElementById('projectDesPage').addEventListener('scroll', scrollFun, false);