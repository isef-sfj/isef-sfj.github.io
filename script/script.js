function sendid() {
    var element = document.getElementById('idSelect');
    var id = element.options[element.selectedIndex].value.trim();
    window.location.href = "../classes/editQuestion-C.php?id=" + id;
}

function sendmodul() {
    var element = document.getElementById('modulSelect');
    var modul = element.options[element.selectedIndex].value.trim();
    window.location.href = "../classes/editQuestionChoice-C.php?modul=" + modul + "&goal=id";
}

function setPlayerIconAffe() {
    var element = document.getElementById('playerIconFace');
    element.src = '/img/playerIcons/affe.svg';
}
function setPlayerIconEule() {
    var element = document.getElementById('playerIconFace');
    element.src = '/img/playerIcons/eule.svg';
}
function setPlayerIconFrosch() {
    var element = document.getElementById('playerIconFace');
    element.src = '/img/playerIcons/frosch.svg';
}
function setPlayerIconKuh() {
    var element = document.getElementById('playerIconFace');
    element.src = '/img/playerIcons/kuh.png';
}

function playerNameChanged() {
    var nameEntered = document.getElementById('playerName').value.trim();
    var playerName = document.getElementById('showPlayerName');
    
    String.prototype.stripTags = function() {
        let matchTag = /<(?:.|\s)*?>/g;
        return this.replace(matchTag, "");
    };
     
    playerName.innerHTML = nameEntered.stripTags();
}

function setPlayer() {
    var name = document.getElementById('showPlayerName').innerHTML.trim();
    var encodetName = encodeURI(name);
    var icon = document.getElementById('playerIconFace').src.trim();
    window.location.href = "../classes/nameIconChoice-C.php?name=" + encodetName + "&icon=" + icon + "&goal=setPlayer";
}

function setIdModule() {
    
    var id = document.getElementById('id').innerText.trim();
    var element = document.getElementById('modulSelect');
    var modul = element.options[element.selectedIndex].value.trim();
    var icon = document.getElementById('playerIconFace').src.trim();    
    var name = document.getElementById('playerName').innerHTML;
    var encodetName = encodeURI(name).trim();
    window.location.href = "../classes/nameIconChoice-C.php?id=" + id + "&modul=" + modul + "&icon=" + icon + "&name=" + encodetName + "&goal=lessonChoice";
}

function goWaitingroom() {
    window.location.href = "../classes/nameIconChoice-C.php?goal=waiting";
}

function saveLesson(lektion) {

    let ausgesuchtAlt = document.getElementsByClassName ("ausgesucht");
    let numItems = ausgesuchtAlt.length;

    for (let i=0; i<numItems; i++) {
        ausgesuchtAlt[i].classList.remove('ausgesucht');
    }
    setLessonChoice(lektion);
}

function setLessonChoice(lesson) {
        // AJAX nutzen mit IE7+, Chrome, Firefox, Safari, Opera
        xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function(lesson) {
                if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                    document.getElementById(xmlhttp.responseText).classList.add('ausgesucht');
                }
            }
        xmlhttp.open("GET","setLessonChoice.php?lesson="+lesson, true);
        xmlhttp.send();

      
}