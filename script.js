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

function sendPlayer() {
    var name = document.getElementById('playerName').value;
    var icon = document.getElementById('playerIconFace').src;
    window.location.href = "../classes/nameIconChoice-C.php?name=" + name + "&icon=" + icon + "&goal=setPlayer";
}