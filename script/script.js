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
