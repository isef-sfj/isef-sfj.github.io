let questions = null;
let rundenZaehler = 0;
const punkte = [0,0,0,0,0,0];
let frage = [];
let gegebeneAntwort = [];
let richtigeAntwort = [];
let idOfClickedBtn = null;
let punkteAusRunde = 0;
let gesamtpunkte = 0;

// Start des Quiz, wird nur einmal aufgerufen
function play() {
    document.getElementById("playContainer").style.display="block";
    document.getElementById("halftimeContainer").style.display="none";
    document.getElementById("resultContainer").style.display="none";
    getQuestionsWithAjax();
    fillResultBoxText();
    rundenZaehler = 0;
    askNextQuestion();
}

// Holt die Quizfragen aus der DB
function getQuestionsWithAjax() {
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

// Speichert die ausgewählte Antwort in der Variable
function storeSelectedAnswer(btn) {
    idOfClickedBtn = btn.id;
    gegebeneAntwort[rundenZaehler] = btn.innerText;
    richtigeAntwort[rundenZaehler] = document.getElementById('antwort1_richtig').innerText;
    document.getElementById(idOfClickedBtn).style.backgroundColor = "yellow";
    document.getElementById("sendAnswerBtn").disabled = false;
}

// Prüft ob die gegebene Antwort richtig ist und speichert entsprechend die Punkte
function checkAnswer() {
    // Wenn Antwort richtig 1 Punkt addieren
    if (idOfClickedBtn == "antwort1_richtig") {
        punkteAusRunde = 1;
        document.getElementById("answer"+(rundenZaehler+1)+"1").style.backgroundColor="green";
        // Wenn Antwort GEWUSST 2 zusätzliche Punkte addieren
        if (document.getElementById("known").checked) {
            punkteAusRunde += 2;
        }
    // Wenn Antwort falsch, Null Punkte addieren
    } else {
        rightAnswer = document.getElementById("antwort1_richtig");
        punkteAusRunde = 0;
        // Antworten in ResultBoxen entsprechend einfärben
        if (idOfClickedBtn == "antwort2") {
            document.getElementById("answer"+(rundenZaehler+1)+"2").style.backgroundColor="red";
        }
        if (idOfClickedBtn == "antwort3") {
            document.getElementById("answer"+(rundenZaehler+1)+"3").style.backgroundColor="red";
        }
        if (idOfClickedBtn == "antwort4") {
            document.getElementById("answer"+(rundenZaehler+1)+"4").style.backgroundColor="red";
        }
    }
    // Antworten sind nicht mehr anklickbar
    document.getElementById("antwort1_richtig").disabled = true;
    document.getElementById("antwort2").disabled = true;
    document.getElementById("antwort3").disabled = true;
    document.getElementById("antwort4").disabled = true;
    // Punkte aus Runde werden in Array gespeichert
    punkte[rundenZaehler] = punkteAusRunde;
    // Gesamtpunkte werden berechnet
    gesamtpunkte += punkteAusRunde;
    console.log("Punkte aus Runde: " + punkte[rundenZaehler]);
    console.log("Gesamtunkte: " + gesamtpunkte);

    rundenZaehler++;

     setTimeout(function(){
        askNextQuestion()
     }, 20);

}
// Zeigt die nächste Frage incl. Antworten an
function askNextQuestion() {
    // Wenn 3 Fragen beantwortet sind, blende HalftimeContainer ein, und Fragen aus
    if (rundenZaehler == 3) {
        document.getElementById("playContainer").style.display="none";
        document.getElementById("halftimeContainer").style.display="block";
        document.getElementById("resultContainer").style.display="none";
        setTimeout(function(){
            document.getElementById("playContainer").style.display="block";
            document.getElementById("halftimeContainer").style.display="none";
            document.getElementById("resultContainer").style.display="none";
         }, 5000);
    }
    // Wenn 6 Fragen beantwortet wurden, blende resultContainer ein
    if (rundenZaehler == 6) {
        document.getElementById("playContainer").style.display="none";
        document.getElementById("halftimeContainer").style.display="none";
        document.getElementById("resultContainer").style.display="block";
        
    }
    // Wenn noch Fragen übrig sind -> nächste Frage anzeigen
    if (rundenZaehler < questions.length) {
        // Alle Antworten werden anklickbar gemacht
        document.getElementById("antwort1_richtig").disabled = false;
        document.getElementById("antwort2").disabled = false;
        document.getElementById("antwort3").disabled = false;
        document.getElementById("antwort4").disabled = false;
        // Bei allen Antworten wird die Hintergrundfarbe enfernt
        document.getElementById("antwort1_richtig").style.backgroundColor = "";
        document.getElementById("antwort2").style.backgroundColor = "";
        document.getElementById("antwort3").style.backgroundColor = "";
        document.getElementById("antwort4").style.backgroundColor = "";
        // Text von Frage und Antworten wird in die HTML-Elemente geschrieben
        document.getElementById("frage").innerText = questions[rundenZaehler]['frage'];
        frage[rundenZaehler] = questions[rundenZaehler]['frage'];
        document.getElementById("antwort1_richtig").innerText = questions[rundenZaehler]['antwort1_richtig'];
        document.getElementById("antwort2").innerText = questions[rundenZaehler]['antwort2'];
        document.getElementById("antwort3").innerText = questions[rundenZaehler]['antwort3'];
        document.getElementById("antwort4").innerText = questions[rundenZaehler]['antwort4'];
        // Radiobutton gewusst/geraten wird auf Startzustand gesetzt
        document.getElementById("known").checked = false;
        document.getElementById("advised").checked = true;
        // Senden-Button wird deaktiviert
        document.getElementById("sendAnswerBtn").disabled = true;
    // Wenn alle Fragen gespielt, Ergebnis anzeigen
    } else {
        console.log("Fertig! Punktestand ist: " + gesamtpunkte);
        document.getElementById("playContainer").hidden = true;
        document.getElementById("resultContainer").hidden = false;
        document.getElementById("showPoints").innerText = gesamtpunkte;
    }

    console.log(punkte);
}

function fillResultBoxText() {
    for (let i = 0 ; i < questions.length ; i++) {
        document.getElementById("givenQuestion"+(i+1)).innerText = questions[i]['frage'];
        document.getElementById("answer"+(i+1)+"1").innerText = questions[i]['antwort1_richtig'];
        document.getElementById("answer"+(i+1)+"2").innerText = questions[i]['antwort2'];
        document.getElementById("answer"+(i+1)+"3").innerText = questions[i]['antwort3'];
        document.getElementById("answer"+(i+1)+"4").innerText = questions[i]['antwort4'];
    }
}