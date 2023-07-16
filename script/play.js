let questions = null;
let rundenZaehler = 0;
const punkte = [0,0,0,0,0,0];
let frage = [];
let gegebeneAntwort = [];
let richtigeAntwort = [];
let idOfClickedBtn = "antwort5";
let punkteAusRunde = 0;
let gesamtpunkte = 0;
let timeToAct = 20;
let timeToAnswer = 10;
let qTimer = null;
let hTimer = null;
let eTimer = null;

// Start des Quiz, wird nur einmal aufgerufen
function play() {
    document.getElementById("playContainer").style.display="block";
    document.getElementById("halftimeContainer").style.display="none";
    document.getElementById("resultContainer").style.display="none";
    document.getElementById("finishContainer").style.display="none";
    getQuestionsWithAjax();
    fillResultBoxText();
    rundenZaehler = 0;
    timeToAnswer = 10;
    qTimer = setInterval(questionTimer, 1000);
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
    clearInterval(qTimer);

    // Wenn Antwort richtig 1 Punkt addieren
    if (idOfClickedBtn == "antwort1_richtig") {
        punkteAusRunde = 1;
        document.getElementById("answer"+(rundenZaehler+1)+"1").style.backgroundColor="green";
        document.getElementById("answer"+(rundenZaehler+1)+"1").disabled="true";
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

    timeToAnswer = 10;
    qTimer = setInterval(questionTimer, 1000);
    askNextQuestion();
    /*
    setTimeout(function(){
       askNextQuestion()
    }, 20);
    */

}
// Zeigt die nächste Frage incl. Antworten an
function askNextQuestion() {
    // Wenn 3 Fragen beantwortet sind, blende HalftimeContainer ein, und Fragen aus
    if (rundenZaehler == 3) {
        clearInterval(qTimer);
        document.getElementById("playContainer").style.display="none";
        document.getElementById("halftimeContainer").style.display="block";
        document.getElementById("resultContainer").style.display="none";
        document.getElementById("finishContainer").style.display="none";

        document.getElementById("seconds1").innerText = timeToAct;
        hTimer = setInterval(halftimeTimer, 1000);

        /*
        setTimeout(function(){
            document.getElementById("playContainer").style.display="block";
            document.getElementById("halftimeContainer").style.display="none";
            document.getElementById("resultContainer").style.display="none";
         }, 5000);
         */
    }
    // Wenn 6 Fragen beantwortet wurden, blende resultContainer ein
    if (rundenZaehler == 6) {
        clearInterval(qTimer);
        fillPoints();
        document.getElementById("playContainer").style.display="none";
        document.getElementById("halftimeContainer").style.display="none";
        document.getElementById("resultContainer").style.display="block";
        document.getElementById("finishContainer").style.display="none";

        document.getElementById("seconds2").innerText = timeToAct;
        eTimer = setInterval(endTimer, 1000);
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
        // Radiobutton gewusst/geraten wird auf Startzustand (= geraten) gesetzt
        document.getElementById("known").checked = false;
        document.getElementById("advised").checked = true;
        // Senden-Button wird deaktiviert
        document.getElementById("sendAnswerBtn").disabled = true;
    // Wenn alle Fragen gespielt sind, Ergebnis anzeigen
    } /* else {
        clearInterval(qTimer);
        console.log("Fertig! Punktestand ist: " + gesamtpunkte);
        document.getElementById("playContainer").hidden = true;
        document.getElementById("resultContainer").hidden = false;
        // document.getElementById("showPoints").innerText = gesamtpunkte;
    } */

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

function changeAnswerToRight(klickedButton, frage) {
    klickedButton.disabled="true";
    console.log("Punkte vor Änderung: " + punkte);
    console.log("Gesamtpunkte vor Änderung: " + gesamtpunkte);
    let questionToChnage = frage - 1;
    punkte[questionToChnage] = punkte[questionToChnage] + 1;
    console.log("Punkte nach Änderung: " + punkte);
    
    add = function(arr) {
        return arr.reduce((a, b) => a + b, 0);
    }; 
    gesamtpunkte = add(punkte);

    console.log("Gesamtpunkte nach Änderung: " + gesamtpunkte);
}

function changeAnswerToFalse(klickedButton, frage) {
    klickedButton.disabled="true";
    console.log("Punkte vor Änderung: " + punkte);
    console.log("Gesamtpunkte vor Änderung: " + gesamtpunkte);
    let questionToChnage = frage - 1;
    punkte[questionToChnage] = 0;
    console.log("Punkte nach Änderung: " + punkte);

    add = function(arr) {
        return arr.reduce((a, b) => a + b, 0);
    }; 
    gesamtpunkte = add(punkte);

    console.log("Gesamtpunkte nach Änderung: " + gesamtpunkte);
}

function fillPoints() {
    for (let i=0 ; i < 6 ; i++) {
        let rightAnswers = document.getElementById("nrOfRightAnswers" + (i+1)).innerText;
        rightAnswers = parseInt(rightAnswers);
        if (punkte[i] == 1 || punkte[i] == 3) {
            console.log("Frage " + (i+1) + "Richtige Antworten vorher: " + rightAnswers);
            rightAnswers+=1;
            console.log("Frage " + (i+1) + "Richtige Antworten nachher: " + rightAnswers);
            document.getElementById("nrOfRightAnswers" + (i+1)).innerText = rightAnswers;
        }
    }
}

function questionTimer() {
    document.getElementById("seconds").innerText = timeToAnswer;
    timeToAnswer--;
    if ( timeToAnswer < 0 ) {
        clearInterval(qTimer);
        checkAnswer();
    }
}

function halftimeTimer() {
    clearInterval(qTimer);
    document.getElementById("seconds1").innerText = timeToAct;
    timeToAct--;
    if ( timeToAct < 0 ) {
        document.getElementById("playContainer").style.display="block";
        document.getElementById("halftimeContainer").style.display="none";
        document.getElementById("resultContainer").style.display="none";
        document.getElementById("finishContainer").style.display="none";

        timeToAct = 20;
        clearInterval(hTimer);
        timeToAnswer = 10;
        questionTimer = setInterval(questionTimer, 1000);
    }
}

function endTimer() {
    clearInterval(qTimer);
    document.getElementById("seconds2").innerText = timeToAct;
    timeToAct--;
    if ( timeToAct < 0 ) {

        document.getElementById("endpoints").innerText = gesamtpunkte;

        document.getElementById("playContainer").style.display="none";
        document.getElementById("halftimeContainer").style.display="none";
        document.getElementById("resultContainer").style.display="none";
        document.getElementById("finishContainer").style.display="block";

        clearInterval(eTimer);
    }
}
