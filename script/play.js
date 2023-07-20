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
let timeToAnswer = 20;
let numberOfQuestions = 3;
let qTimer = null;
let hTimer = null;
let eTimer = null;

// Start des Quiz, wird nur einmal aufgerufen
function play() {
    document.getElementById("playContainer").style.display="block";
    document.getElementById("halftimeContainer").style.display="none";
    document.getElementById("resultContainer").style.display="none";
    getQuestionsWithAjax();
    fillResultBoxText();
    rundenZaehler = 0;
    timeToAnswer = 20;
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
    document.getElementById(idOfClickedBtn).classList.remove("quizAnswerKlickedButton");
    document.getElementById(idOfClickedBtn).classList.add("quizAnswerButton");
    idOfClickedBtn = btn.id;
    console.log(idOfClickedBtn);
    gegebeneAntwort[rundenZaehler] = btn.innerText;
    richtigeAntwort[rundenZaehler] = document.getElementById('antwort1_richtig').innerText;
    document.getElementById(idOfClickedBtn).classList.remove("quizAnswerButton");
    document.getElementById(idOfClickedBtn).classList.add("quizAnswerKlickedButton");
    document.getElementById("sendAnswerBtn").disabled = false;
}

// Prüft ob die gegebene Antwort richtig ist und speichert entsprechend die Punkte
function checkAnswer() {
    clearInterval(qTimer);
    console.log("ID of clicked bitton: " + idOfClickedBtn);

    // Wenn Antwort richtig 1 Punkt addieren
    if (idOfClickedBtn == "antwort1_richtig") {
        punkteAusRunde = 1;
        document.getElementById("answer"+(rundenZaehler+1)+"1").classList.add("rightAnswer");
        document.getElementById("answer"+(rundenZaehler+4)+"1").classList.add("rightAnswer");
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
        if (idOfClickedBtn == "antwort2" | "answer12" | "answer22" | "answer32") {
            document.getElementById("answer"+(rundenZaehler+1)+"2").classList.add("falseAnswer");
            document.getElementById("answer"+(rundenZaehler+4)+"2").classList.add("falseAnswer");
        }
        if (idOfClickedBtn == "antwort3" | "answer13" | "answer23" | "answer33") {
            document.getElementById("answer"+(rundenZaehler+1)+"3").classList.add("falseAnswer");
            document.getElementById("answer"+(rundenZaehler+4)+"3").classList.add("falseAnswer");
        }
        if (idOfClickedBtn == "antwort4" | "answer14" | "answer24" | "answer34") {
            document.getElementById("answer"+(rundenZaehler+1)+"4").classList.add("falseAnswer");
            document.getElementById("answer"+(rundenZaehler+4)+"4").classList.add("falseAnswer");
        }
    }
    
    // Punkte aus Runde werden in Array gespeichert
    punkte[rundenZaehler] = punkteAusRunde;
    // Gesamtpunkte werden berechnet
    gesamtpunkte += punkteAusRunde;
    console.log("Punkte aus Runde: " + punkte[rundenZaehler]);
    console.log("Gesamtunkte: " + gesamtpunkte);

    rundenZaehler++;

    timeToAnswer = 20;
    qTimer = setInterval(questionTimer, 1000);
    askNextQuestion();
    
}
// Zeigt die nächste Frage incl. Antworten an
function askNextQuestion() {
    // Wenn gewünschte Anzahl Fragen beantwortet sind, blende HalftimeContainer ein, und Fragen aus
    document.getElementById(idOfClickedBtn).classList.remove("quizAnswerKlickedButton");
    document.getElementById(idOfClickedBtn).classList.add("quizAnswerButton");
    
    if (rundenZaehler == numberOfQuestions) {
        clearInterval(qTimer);
        document.getElementById("playContainer").style.display="none";
        document.getElementById("halftimeContainer").style.display="block";
        document.getElementById("resultContainer").style.display="none";

        document.getElementById("seconds1").innerText = timeToAct;
        hTimer = setInterval(halftimeTimer, 1000);

    }

    // Wenn noch Fragen übrig sind -> nächste Frage anzeigen
    if (rundenZaehler < numberOfQuestions) {
        // Alle Antworten werden anklickbar gemacht
        document.getElementById("antwort1_richtig").disabled = false;
        document.getElementById("antwort2").disabled = false;
        document.getElementById("antwort3").disabled = false;
        document.getElementById("antwort4").disabled = false;
        
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
    } else {
        clearInterval(qTimer);
        console.log("Fertig! Punktestand ist: " + gesamtpunkte);
        document.getElementById("playContainer").hidden = true;
        document.getElementById("resultContainer").hidden = false;
        document.getElementById("endpoints").innerText = gesamtpunkte;
    } 

    console.log(punkte);
}

function fillResultBoxText() {
    for (let i = 0 ; i < 3 ; i++) {
        document.getElementById("givenQuestion"+(i+1)).innerText = questions[i]['frage'];
        document.getElementById("givenQuestion"+(i+4)).innerText = questions[i]['frage'];
        document.getElementById("answer"+(i+1)+"1").innerText = questions[i]['antwort1_richtig'];
        document.getElementById("answer"+(i+4)+"1").innerText = questions[i]['antwort1_richtig'];
        document.getElementById("answer"+(i+1)+"2").innerText = questions[i]['antwort2'];
        document.getElementById("answer"+(i+4)+"2").innerText = questions[i]['antwort2'];
        document.getElementById("answer"+(i+1)+"3").innerText = questions[i]['antwort3'];
        document.getElementById("answer"+(i+4)+"3").innerText = questions[i]['antwort3'];
        document.getElementById("answer"+(i+1)+"4").innerText = questions[i]['antwort4'];
        document.getElementById("answer"+(i+4)+"4").innerText = questions[i]['antwort4'];
    }
}

function changeAnswerToRight(klickedButton, frage, antwort) {
    klickedButton.disabled="true";
    klickedButton.classList.add("quizAnswerKlickedButton");
    document.getElementById("answer"+(frage+3)+antwort).classList.add("rightAnswer");
    console.log("Punkte vor Änderung: " + punkte);
    console.log("Gesamtpunkte vor Änderung: " + gesamtpunkte);
    punkte[(frage-1)] = punkte[(frage-1)] + 1;
    console.log("Punkte nach Änderung: " + punkte);
    
    add = function(arr) {
        return arr.reduce((a, b) => a + b, 0);
    }; 
    gesamtpunkte = add(punkte);

    console.log("Gesamtpunkte nach Änderung: " + gesamtpunkte);
}

function changeAnswerToFalse(klickedButton, frage, antwort) {
    klickedButton.disabled="true";
    klickedButton.classList.add("quizAnswerKlickedButton");
    document.getElementById("answer"+(frage+3)+antwort).classList.add("falseAnswer2");
    console.log("Punkte vor Änderung: " + punkte);
    console.log("Gesamtpunkte vor Änderung: " + gesamtpunkte);
    punkte[(frage-1)] = 0;
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
        timeToAnswer = 20;
        checkAnswer();
    }
}

function halftimeTimer() {
    clearInterval(qTimer);
    document.getElementById("seconds1").innerText = timeToAct;
    timeToAct--;
    if ( timeToAct < 0 ) {
        document.getElementById("playContainer").style.display="none";
        document.getElementById("halftimeContainer").style.display="none";
        document.getElementById("resultContainer").style.display="block";

        document.getElementById("endpoints").innerText = gesamtpunkte+5;

        clearInterval(qTimer);
        clearInterval(hTimer);
    }
}