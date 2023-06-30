let questions = null;
let rundenZaehler = 0;
let punkte = null;
let gegebeneAntwort = "";
let idOfClickedBtn = null;



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

        document.getElementById("known").checked = false;
        document.getElementById("advised").checked = true;
        document.getElementById("sendAnswerBtn").disabled = true;
        
    } else {
        console.log("Fertig! Punktestand ist: " + punkte);
        document.getElementById("playContainer").hidden = true;
        document.getElementById("resultContainer").hidden = false;
        document.getElementById("showPoints").innerText = punkte;
    }
}

function storeSelectedAnswer(btn) {
    if (idOfClickedBtn != null) {
        document.getElementById(idOfClickedBtn).style.backgroundColor = "";
    }
    idOfClickedBtn = btn.id;
    document.getElementById(idOfClickedBtn).style.backgroundColor = "yellow";
    document.getElementById("sendAnswerBtn").disabled = false;
}

function checkAnswer() {

    if (idOfClickedBtn == null) {
        rightAnswer = document.getElementById("antwort1_richtig");
        rightAnswer.style.backgroundColor = "green";
        rundenZaehler++;
        console.log("questions.length: " + questions.length + " - rundenZaehler: " + rundenZaehler);
        console.log("Runde " + rundenZaehler + " - Punktestand: " + punkte);

        document.getElementById("antwort1_richtig").disabled = true;
        document.getElementById("antwort2").disabled = true;
        document.getElementById("antwort3").disabled = true;
        document.getElementById("antwort4").disabled = true;
        
        setTimeout(function(){
            askNextQuestion()
        }, 2000);
    }

    if (idOfClickedBtn == "antwort1_richtig") {
        console.log("Rischtisch!");
        document.getElementById(idOfClickedBtn).style.backgroundColor = "green";
        punkte+=1;

        if (document.getElementById("known").checked) {
            punkte+=2;
        }

    } else {
        console.log("Falsch!");
        document.getElementById(idOfClickedBtn).style.backgroundColor = "red";
        rightAnswer = document.getElementById("antwort1_richtig");
        rightAnswer.style.backgroundColor = "green";
    }
    rundenZaehler++;

    console.log("questions.length: " + questions.length + " - rundenZaehler: " + rundenZaehler);
    console.log("Runde " + rundenZaehler + " - Punktestand: " + punkte);

    document.getElementById("antwort1_richtig").disabled = true;
    document.getElementById("antwort2").disabled = true;
    document.getElementById("antwort3").disabled = true;
    document.getElementById("antwort4").disabled = true;
    
     setTimeout(function(){
        askNextQuestion()
     }, 2000);

}

