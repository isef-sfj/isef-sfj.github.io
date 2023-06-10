function sendid() {
    var element = document.getElementById('idSelect');
    var id = element.options[element.selectedIndex].value;
    window.location.href = "../classes/editQuestion-C.php?id=" + id;
}

function sendmodul() {
    var element = document.getElementById('modulSelect');
    var modul = element.options[element.selectedIndex].value;
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
    var nameEntered = document.getElementById('playerName').value;
    var playerName = document.getElementById('showPlayerName');
    playerName.innerHTML = nameEntered;
}

function setPlayer() {
    var name = document.getElementById('showPlayerName').innerHTML;
    var encodetName = encodeURI(name);
    var icon = document.getElementById('playerIconFace').src;
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
    var element = document.getElementById('lektion');
    element.classList.add("ausgesucht");
    window.location.href = "../classes/session-C.php?lesson=" + lektion;
}