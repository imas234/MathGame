const docOptions = document.querySelectorAll("#option-box .option");
const docExpression = document.querySelector("#expression");
const scoreMsg = document.getElementById("score-msg");
const score = document.getElementById("score");
const saveScoreButton = document.getElementById("save-score");
const leaderboardButton = document.getElementById("leaderboard");

function getRandNum(num){
    let outNum = Math.floor(Math.random() * num);
    while(outNum == 0){
        outNum = Math.floor(Math.random() * num)
    }
    return outNum;
}

function getExpression(operator){
    let x = getRandNum(10);
    let y = getRandNum(10);
    return x + " " + operator + " " + y;
}

function setExpression(expression){
    docExpression.textContent = expression;
}

function evaluate(expression){
    let result = 0;
    let s = expression.split(" ");
    if(s[1] == "+"){
        result = Number(s[0]) + Number(s[2]);
    }
    return result;
}

function generateOptions(result){
    if ((result - 1) <= 0) {
        return [result, result + 1, result + 2];
    }
    return [result, result + 1, result - 1];
}

function setOptions(options, order){
    for(let i = 0; i < options.length; i++){
        docOptions[i].textContent = String(options[order[i]]);
    }
}

function generateOrder(){
    let orders  = ["012","021","102","120","201","210"];
    let index = getRandNum(orders.length);
    let selectedOrder = [];
    for(let i = 0; i < 3; i++){
      selectedOrder.push(Number(orders[index].charAt(i)));
    }
    return selectedOrder;
}

function setState(){
    exp = getExpression("+");
    setExpression(exp);
    let ops = generateOptions(evaluate(exp));
    let ord = generateOrder();
    setOptions(ops, ord);
    console.log("exp: " + exp + " input: " + input + " points: " + points);
}

function getInput(){
    docOptions[0].addEventListener("click", function(){
        input = Number(docOptions[0].textContent);
        if(input == evaluate(exp)){
            points++;
        }
        setState();
    });
    docOptions[1].addEventListener("click", function(){
        input = Number(docOptions[1].textContent);
        if(input == evaluate(exp)){
            points++;
        }
        setState();
    });
    docOptions[2].addEventListener("click", function(){
        input = Number(docOptions[2].textContent);
        if(input == evaluate(exp)){
            points++;
        }
        setState();
    });
}

function disableOptions(disabled){
    docOptions.forEach(element => {
        element.disabled = disabled;
    });
}

function reset(){
    document.getElementById("reset").disabled = false;
    disableOptions(true);
    addLinks();
    document.getElementById("reset").addEventListener("click",function(){
        disableOptions(false);
        game();
    });
}

function showScore(){
    scoreMsg.textContent = "Points Scored";
    score.textContent = String(points);
}

function removeScore(){
    scoreMsg.textContent = "";
    score.textContent = "";
}

function init(){
    points = 0;
    timer = 60;
    document.getElementById("reset").disabled = true;
    document.getElementById("timer").textContent = String(timer);
    removeScore();
    removeLinks();
}

function addLinks(){
    saveScoreButton.href = "saveScore.php";
    saveScoreButton.textContent = "Save Score";
    leaderboardButton.href = "leaderboard.php";
    leaderboardButton.textContent = "Leaderboard";
}

function removeLinks(){
    saveScoreButton.href = "";
    saveScoreButton.textContent = "";
    leaderboardButton.href = "";
    leaderboardButton.textContent = "";
}

var points = 0;
var input = 0;
var exp = "null";
var timer = 0;

function game(){
    init();
    let t = setInterval(function(){
        timer--;
        if(timer >= 0){
            document.getElementById("timer").textContent = String(timer);
        }
        else{
            clearInterval(t);
            reset();
            showScore();
        }        
    }, 1000)
    setState();
    input = getInput(exp);

}

setInterval(game(), 60000);