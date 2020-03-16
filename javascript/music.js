var isPlaying = false;
var isSong = false;//should be false
var loop = true;
var isMuted = false;
var lastVolume = 0;
var isEditing= false;
var globalXAMMusic;
var formerSong = '';

function pauseAndStart(obj){
    if (isSong){
        var audio = document.getElementById('mockPlayer');
        if (isPlaying){
            isPlaying = false;
            obj.classList.remove('fa-pause');
            obj.classList.add('fa-play');
            audio.pause();
        }else{
            isPlaying = true;
            obj.classList.remove('fa-play');
            obj.classList.add('fa-pause');
            audio.play();
        }
    }
}

function editLoop(obj){
    if (isSong) {
        var audio = document.getElementById('mockPlayer');
        if (loop) {
            loop = false;
            obj.style.color = '#92999d';
            audio.removeAttribute('loop');
        } else {
            loop = true;
            obj.style.color = 'var(--mainGold)';
            audio.setAttribute('loop', "");
        }
    }
}

function editMuted(obj){
    if (isSong) {
        var audio = document.getElementById('mockPlayer');
        if (isMuted) {
            isMuted = false;
            obj.classList.remove('fa-volume-mute');
            obj.classList.add('fa-volume-up');
            audio.volume = lastVolume;
        } else {
            isMuted = true;
            obj.classList.remove('fa-volume-up');
            obj.classList.add('fa-volume-mute');
            lastVolume = audio.volume;
            audio.volume = 0;
        }
    }
}

function changeVolume(val){
    if (isSong) {
        var audio = document.getElementById('mockPlayer');
        audio.volume = val;
    }
}

function editAppear(){
    document.getElementById('playerstation').classList.toggle('disappear');
    document.getElementById('playerstation-progress').classList.toggle('disappearProgress');
}

function updateProgressBar(time, dur){
    if (!isEditing) {
        document.getElementById('playerstation-progress').max = dur;
        document.getElementById('playerstation-progress').value = time;
    }
}
function stopUpdate(){
    isEditing = true;
}
function editProgress(val){
    isEditing = true;
    var audio = document.getElementById('mockPlayer');
    audio.currentTime = val;
    //document.getElementById('playerstation-progress').value = val;
    setTimeout(() => {
        isEditing = false;        
    }, 1000);
}
function playSong(obj){
    let id = obj.id
    addPlay(id, "view").then((res)=>{
        //update view
        let veiwSpan = document.getElementById(id+"-data");
        let newPlayedSplit = veiwSpan.innerText.split("/")
        veiwSpan.innerText = "Played: " + res + " / " + newPlayedSplit[1]+"";

        //play the song
        if (id != formerSong) {
            var currentEle = globalXAMMusic.getElementById(id);
            var cover = currentEle.getElementsByTagName('cover')[0].firstChild.nodeValue;
            var title = currentEle.getElementsByTagName('title')[0].firstChild.nodeValue;
            var mp3 = currentEle.getElementsByTagName('mp3')[0].firstChild.nodeValue;
            var artist = '- ' + currentEle.getElementsByTagName('artist')[0].firstChild.nodeValue;

            document.getElementById('playerstation-img').src = cover;
            document.getElementById('playerstation-titlee').innerText = title;
            document.getElementById('mockPlayer').src = mp3;

            obj.classList.add('activeSong');

            document.getElementById('playerstation').classList.remove('disappear');
            document.getElementById('playerstation-progress').classList.remove('disappearProgress');
            document.getElementById('playerstation-pause').classList.remove('fa-play');
            document.getElementById('playerstation-pause').classList.add('fa-pause');
            isPlaying = true;

            try {
                document.getElementById(formerSong).classList.remove('activeSong');
            } catch{

            }
            formerSong = id;
            document.getElementById('mockPlayer').play();
            isSong = true;
        } else {
            var cover = "../images/logo.png";
            var title = "NO Music";
            var mp3 = "";
            var artist = '- Robin Gan';

            document.getElementById('playerstation-img').src = cover;
            document.getElementById('playerstation-titlee').innerText = title;
            document.getElementById('mockPlayer').src = mp3;

            obj.classList.add('activeSong');

            document.getElementById('playerstation').classList.add('disappear');
            document.getElementById('playerstation-progress').classList.add('disappearProgress');
            document.getElementById('playerstation-pause').classList.add('fa-play');
            document.getElementById('playerstation-pause').classList.remove('fa-pause');
            isPlaying = false;

            try {
                document.getElementById(formerSong).classList.remove('activeSong');
            } catch{

            }
            formerSong = '';
            document.getElementById('mockPlayer').pause();
            isSong = false;
        }
    });
    
}

function downloadSong(obj){
    let id = obj.id.split("-")[0];
    addPlay(id, "download").then((res) => {
        //update view
        let veiwSpan = document.getElementById(id + "-data");
        let newPlayedSplit = veiwSpan.innerText.split("/")
        veiwSpan.innerText = newPlayedSplit[0] + " / " + "Downloaded: " + res ;
    });
}
/** ajax function */
function getMusicData(){
    return Promise.resolve($.ajax({
        url: "/php/music/getMusicData.php",
        method: "POST"
    }));
}

function addMusic(id) {
    return Promise.resolve($.ajax({
        url: "/php/music/addMusic.php",
        method: "POST",
        data:{
            id: id
        }
    }));
}

function addPlay(name, type) {
    return Promise.resolve($.ajax({
        url: "/php/music/addPlay.php",
        method: "POST",
        data: {
            name: name,
            type: type
        }
    }));
}
/** ajax function---end mark */

function loadMusic() {
    fetch('../data/musicData.xml').then((res) => {
        res.text().then((xml) => {
            getMusicData().then((res)=>{
                let veiwsAndDownload = JSON.parse(res);

                let parser = new DOMParser();
                globalXAMMusic = parser.parseFromString(xml, 'text/xml');

                var eleList = globalXAMMusic.getElementsByTagName('table');
                var output = '';
                for (let i = 0; i < eleList.length; i++) {
                    var cover = eleList[i].getElementsByTagName('cover')[0].firstChild.nodeValue;
                    var title = eleList[i].getElementsByTagName('title')[0].firstChild.nodeValue;
                    var type = eleList[i].getElementsByTagName('type')[0].firstChild.nodeValue;
                    var isNew = eleList[i].getElementsByTagName('isNew')[0].firstChild.nodeValue;
                    var des = eleList[i].getElementsByTagName('des')[0].firstChild.nodeValue;
                    var youtube = eleList[i].getElementsByTagName('youtube')[0].firstChild.nodeValue;
                    var mp3 = eleList[i].getElementsByTagName('mp3')[0].firstChild.nodeValue;
                    var id_ = eleList[i].id;

                    var played_ = null;
                    var downloaded_ = null;

                    if (veiwsAndDownload[id_] == undefined){
                        addMusic(id_).then((res)=>{
                            played_ = res.played;
                            downloaded_ = res.downloaded;
                        });
                    }else{
                        played_ = veiwsAndDownload[id_].played;
                        downloaded_ = veiwsAndDownload[id_].downloaded;
                    }
                    
                    var new_ = '';
                    if (isNew == "true") {
                        new_ = '<span class="badge">New</span>';
                    }

                    output += `
                    <div class="music_card">
                        <div class="card-head">
                        <img src="`+ cover + `" alt="cover"/>
                        </div>
                        <div class="music_card-body">
                        <div class="music-desc">
                            <span class="music-title">
                                    <span class="titleConectnt">`+ title + `</span>
                                    `+ new_ + `
                            </span>

                            <span id="`+ id_ + `-data" class="music-data">Played: ` + played_ + ` / Downloaded: ` + downloaded_ +`</span>
                            <span class="music-type">
                                `+ type + `
                            </span>
                            <div class="music-des">
                            <p>
                                `+ des + `
                            </p>
                            </div>

                            <span class="music-rating">
                            <a onclick="downloadSong(this)" id="`+ id_ +`-download" class="musicLink" href="`+ mp3 + `" download><i class="fas fa-download"></i></a>
                            <a class="musicLink" href="`+ youtube + `"><i class="fab fa-youtube"></i></a>
                            </span>

                            <div onclick="playSong(this)" id="`+ id_ + `" class="btn playButton">
                            <i class="fas fa-play"></i>
                            </div>
                        </div>
                        </div>
                    </div>
            `;
                }
                output += `
                <!--place holder-->
                <div id="placeholder">
                
                </div>
                `;
                document.getElementById('content').innerHTML = output;
            })
            
        });
    });
}

loadMusic();