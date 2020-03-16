//document.getElementById('content')
var globalXAM;
function loadProject() {
    fetch('/data/projectData.xml').then((res) => {
        res.text().then((xml) => {
            let parser = new DOMParser();
            globalXAM = parser.parseFromString(xml, 'text/xml');

            var eleList = globalXAM.getElementsByTagName('table');
            var output = '';
            for (let i = 0; i < eleList.length; i++) {
                if (i > 2) {
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
                        <a href="/project#`+ id + `">
                            <i class="fas fa-project-diagram"></i>
                            <h2 class="longTitle">`+ title + `</h2>
                            <p>`+ date + `</p>
                        </a>
                    </li>
            `;
            }
            document.getElementById('current-project').innerHTML = output;
        });
    });
}

function loadMedia() {
    fetch('/data/mediaData.xml').then((res) => {
        res.text().then((xml) => {
            let parser = new DOMParser();
            globalXAM = parser.parseFromString(xml, 'text/xml');

            var eleList = globalXAM.getElementsByTagName('table');
            var output = '';
            for (let i = 0; i < eleList.length; i++) {
                if (i > 2) {
                    break;
                }
                var date = eleList[i].getElementsByTagName('date')[0].firstChild.nodeValue;
                var title = eleList[i].getElementsByTagName('title')[0].firstChild.nodeValue;
                var id = eleList[i].id;

                output += `
                    <li>
                        <a href="/media#`+ id + `">
                        <i class="fas fa-blog" aria-hidden="true"></i>
                        <h2>`+ title + `</h2>
                        <p>`+ date + `</p>
                        </a>
                    </li>
                `;
            }
            document.getElementById('current-blog').innerHTML = output;
        });
    });
}

loadMedia();
loadProject();