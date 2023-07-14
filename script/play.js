let questions = null;
let rundenZaehler = 0;
// 6 Variablen testen :)
let punkte = [];
punkte[0]=5;
punkte[1]=7;
let frage = [];
let gegebeneAntwort = [];
let richtigeAntwort = [];
let idOfClickedBtn = null;
let zaehlerM1 = 0;



function getQuestionsWithAjax() {
    // AJAX nutzen mit IE7+, Chrome, Firefox, Safari, Opera
    xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                questions = xmlhttp.responseText;
                questions = JSON.parse(questions)
                console.log(questions);
            }
        }
    xmlhttp.open("GET","../classes/getQuestionsForQuiz.php", false);
    xmlhttp.send();
}

function play() {
    
    getQuestionsWithAjax();
    rundenZaehler = 0;

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
        frage[rundenZaehler] = questions[rundenZaehler]['frage'];
        document.getElementById("antwort1_richtig").innerText = questions[rundenZaehler]['antwort1_richtig'];
        document.getElementById("antwort2").innerText = questions[rundenZaehler]['antwort2'];
        document.getElementById("antwort3").innerText = questions[rundenZaehler]['antwort3'];
        document.getElementById("antwort4").innerText = questions[rundenZaehler]['antwort4'];

        document.getElementById("known").checked = false;
        document.getElementById("advised").checked = true;
        document.getElementById("sendAnswerBtn").disabled = true;
        
    } else {
        console.log("Fertig! Punktestand ist: " + punkte[rundenZaehler]);
        document.getElementById("playContainer").hidden = true;
        document.getElementById("resultContainer").hidden = false;
        document.getElementById("showPoints").innerText = punkte[rundenZaehler];
    }
}

function storeSelectedAnswer(btn) {
    if (idOfClickedBtn != null) {
        document.getElementById(idOfClickedBtn).style.backgroundColor = "";
    }
    idOfClickedBtn = btn.id;
    gegebeneAntwort[rundenZaehler] = btn.innerText;
    richtigeAntwort[rundenZaehler] = document.getElementById('antwort1_richtig').innerText;
    document.getElementById(idOfClickedBtn).style.backgroundColor = "yellow";
    document.getElementById("sendAnswerBtn").disabled = false;
    console.log(gegebeneAntwort[rundenZaehler]);
    console.log(richtigeAntwort[rundenZaehler]);
}

function checkAnswer() {

    if (idOfClickedBtn == null) {
        rightAnswer = document.getElementById("antwort1_richtig");
        // rightAnswer.style.backgroundColor = "green";
        zaehlerM1 = rundenZaehler;
        rundenZaehler++;
        console.log("questions.length: " + questions.length + " - rundenZaehler: " + rundenZaehler);
        console.log("Runde " + rundenZaehler + " - Punktestand: " + punkte[rundenZaehler]);
        

        document.getElementById("antwort1_richtig").disabled = true;
        document.getElementById("antwort2").disabled = true;
        document.getElementById("antwort3").disabled = true;
        document.getElementById("antwort4").disabled = true;
        
        setTimeout(function(){
            askNextQuestion()
        }, 2000);
    }

    console.log("rundenZähler vor ++: " + rundenZaehler);
    console.log("zählerMinus1: vor ++: " + zaehlerM1);

    if (idOfClickedBtn == "antwort1_richtig") {
        console.log("Rischtisch!");
        
        // document.getElementById(idOfClickedBtn).style.backgroundColor = "green";
        punkte[zaehlerM1];

        if (document.getElementById("known").checked) {
            punkte[zaehlerM1]+=2;
        }

    } else {
        console.log("Falsch!");
        // document.getElementById(idOfClickedBtn).style.backgroundColor = "red";
        rightAnswer = document.getElementById("antwort1_richtig");
        // rightAnswer.style.backgroundColor = "green";
    }
    zaehlerM1 = rundenZaehler;
    rundenZaehler++;

    console.log("rundenZähler nach ++: " + rundenZaehler);
    console.log("zählerMinus1: nach ++: " + zaehlerM1);
    console.log("Punkte mit rundenZähler: " + punkte[rundenZaehler]);
    console.log("Punkte mit ZählerM1: " + punkte[zaehlerM1]);

    console.log("questions.length: " + questions.length + " - rundenZaehler: " + rundenZaehler);
    console.log("Runde " + rundenZaehler + " - Punktestand: " + punkte[zaehlerM1]);

    document.getElementById("antwort1_richtig").disabled = true;
    document.getElementById("antwort2").disabled = true;
    document.getElementById("antwort3").disabled = true;
    document.getElementById("antwort4").disabled = true;
    
     setTimeout(function(){
        askNextQuestion()
     }, 20);

}

