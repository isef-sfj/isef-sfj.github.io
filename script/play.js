let questions = null;

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

function buttonClicked(source){
    console.log(source.id);
    let gegebeneAntwort = source.innerText;
    document.getElementById('angeklickt').innerText = gegebeneAntwort;
    if (source.id == "antwort1_richtig") {
        console.log("Rischtisch!");
    } else {
        console.log("Falsch!");
    }
    
    
}

function play() {
    
    getQuestionsWithAjax();

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
    
    
    function showQuestion(number) {
        frage.innerText = questions[number]['frage'];
        antwort1.innerText = questions[number]['antwort1_richtig'];
        antwort2.innerText = questions[number]['antwort2'];
        antwort3.innerText = questions[number]['antwort3'];
        antwort4.innerText = questions[number]['antwort4'];
    }

    showQuestion(3);

    

    /*
    questions.forEach(element => {
        frage.innerText = element['frage'];
        antwort1.innerText = element['antwort1_richtig']
        antwort2.innerText = element['antwort2']
        antwort3.innerText = element['antwort3']
        antwort4.innerText = element['antwort4']
    });
    */ 
    
}