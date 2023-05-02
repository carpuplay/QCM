//table avec les réponses correctes
let correct = [3];

//table avec les réponses de l'élève
let selection=[];
let rep_correctes=0;

function result(num_question, selection){
    selection[num_pregunta] = selection.value;

    id = "p" + num_question;
    labels = document.getElementById(id).childNodes;
    labels[3].style.backgroundColor = "White";
    labels[5].style.backgroundColor = "White";
    labels[7].style.backgroundColor = "White";

    selection.parentNode.style.backgroundColor = "#cec0fc";
}

//fonction pour comparer les tables de questions
function correction(){
    num_correct = 0;
    for (i=0;i < correct.length; i++){
        if (correct[i]==selection[i]){
            num_correct++;
        }
    }
    document.getElementById("result").innerHTML = num_correct
}