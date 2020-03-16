$(document).ready(function () {
    $("h1").hover(function () {
        $("h1").addClass("indexFolded");
    },
    function(){
        $("h1").removeClass("indexFolded");
    });

    $("h1").removeClass("indexFolded");
    
    $("#menu_checkbox").prop("checked", false);
});

var globalXAM;

function shortenTitle(title_){
    if (title_.length > 10){
        return title_.substring(0, 9) + "..."
    }
    return title_;
}
function loadProject() {
    fetch('data/projectData.xml').then((res) => {
        res.text().then((xml) => {
            let parser = new DOMParser();
            globalXAM = parser.parseFromString(xml, 'text/xml');

            var eleList = globalXAM.getElementsByTagName('table');
            var output = '<span class="blog-title">Recent Projects</span>';
            for (let i = 0; i < eleList.length; i++) {
                if(i > 6) {
                    break;
                }
                var title = eleList[i].querySelector('[name="title"]').firstChild.nodeValue;
                var date = eleList[i].getElementsByTagName('date')[0].firstChild.nodeValue;

                var id;
                var listsp = title.split(' ');
                if (listsp.length > 1) {
                    id = listsp.join('_');
                } else {
                    id = title;
                }

                output += `
                    <li>
                        <a href="project#`+id+`">
                            <i class="fas fa-project-diagram"></i>
                            <h2 class="longTitle">`+ title+`</h2>
                            <p>`+ date+`</p>
                        </a>
                    </li>
            `;
            }
            document.getElementById('blog-project').innerHTML = output;
        });
    });
}

function loadMedia() {
    fetch('data/mediaData.xml').then((res) => {
        res.text().then((xml) => {
            let parser = new DOMParser();
            globalXAM = parser.parseFromString(xml, 'text/xml');

            var eleList = globalXAM.getElementsByTagName('table');
            var output = '<span class="blog-title">Recent Blogs</span>';
            for (let i = 0; i < eleList.length; i++) {
                if (i > 6) {
                    break;
                }
                var date = eleList[i].getElementsByTagName('date')[0].firstChild.nodeValue;
                var title = eleList[i].getElementsByTagName('title')[0].firstChild.nodeValue;
                var id = eleList[i].id;

                output += `
                    <li>
                        <a href="media#`+ id +`">
                        <i class="fas fa-blog" aria-hidden="true"></i>
                        <h2>`+ title +`</h2>
                        <p>`+ date +`</p>
                        </a>
                    </li>
                `;
            }
            document.getElementById('blog-blog').innerHTML = output;
        });
    });
}

loadMedia();
loadProject();