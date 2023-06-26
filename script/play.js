let questions = null;
let rundenZaehler = 0;
let punkte = null;
let gegebeneAntwort = "";

function getQuestionsWithAjax() {
    // AJAX nutzen mit IE7+, Chrome, Firefox, Safari, Opera
    xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                questions = xmlhttp.responseText;
                questions = JSON.parse(questions)
            }
        }
    xmlhttp.open("GET","../classes/getQuestionsForQuiz.php", false);
    xmlhttp.send();
}

function play() {
    
    getQuestionsWithAjax();
    rundenZaehler = 0;
    punkte = 0;

    let frage = document.getElementById("qText");
    frage.id = "frage";
    let antwort1 = document.getElementById("a1");
    antwort1.id = "antwort1_richtig";
    let antwort2 = document.getElementById("a2");
    antwort2.id = "antwort2";
    let antwort3 = document.getElementById("a3");
    antwort3.id = "antwort3";
    let antwort4 = document.getElementById("a4");
    antwort4.id = "antwort4";

    askNextQuestion();
}

function askNextQuestion() {
    if (rundenZaehler < questions.length) {

        document.getElementById("antwort1_richtig").disabled = false;
        document.getElementById("antwort2").disabled = false;
        document.getElementById("antwort3").disabled = false;
        document.getElementById("antwort4").disabled = false;

        document.getElementById("antwort1_richtig").style.backgroundColor = "";
        document.getElementById("antwort2").style.backgroundColor = "";
        document.getElementById("antwort3").style.backgroundColor = "";
        document.getElementById("antwort4").style.backgroundColor = "";

        document.getElementById("frage").innerText = questions[rundenZaehler]['frage'];
        document.getElementById("antwort1_richtig").innerText = questions[rundenZaehler]['antwort1_richtig'];
        document.getElementById("antwort2").innerText = questions[rundenZaehler]['antwort2'];
        document.getElementById("antwort3").innerText = questions[rundenZaehler]['antwort3'];
        document.getElementById("antwort4").innerText = questions[rundenZaehler]['antwort4'];
    } else {
        console.log("Fertig! Punktestand ist: " + punkte);
        document.getElementById("playContainer").hidden = true;
    }
}

function checkAnswer(source) {

    if (source.id == "antwort1_richtig") {
        console.log("Rischtisch!");
        source.style.backgroundColor = "green";
        punkte+=1;
    } else {
        console.log("Falsch!");
        source.style.backgroundColor = "red";
        rightAnswer = document.getElementById("antwort1_richtig");
        rightAnswer.style.backgroundColor = "green";
    }
    rundenZaehler++;
    console.log("questions.length: " + questions.length + " - rundenZaehler: " + rundenZaehler);
    console.log("Runde " + rundenZaehler + "Punktestand: " + punkte);

    document.getElementById("antwort1_richtig").disabled = true;
    document.getElementById("antwort2").disabled = true;
    document.getElementById("antwort3").disabled = true;
    document.getElementById("antwort4").disabled = true;
    
    setTimeout(function(){
        askNextQuestion()
    }, 2000);

}