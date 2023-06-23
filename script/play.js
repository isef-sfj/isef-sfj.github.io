function getQuestions() {
    // AJAX nutzen mit IE7+, Chrome, Firefox, Safari, Opera
    xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                return xmlhttp.responseText;
            }
        }
    xmlhttp.open("GET","../classes/getQuestionsForQuiz.php", true);
    xmlhttp.send();
}

function play() {
    let questions = getQuestions();
    questions = JSON.parse(questions);

    console.log(questions);

    let ausgabe = document.getElementById("testAusgabe");
    ausgabe.value = questions;
}