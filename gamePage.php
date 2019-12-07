<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Solway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container" id="timer-box">
        <span id="timer">60</span>
    </div>
    <div class="container" id = "expression-box">
        <p id="expression"></p>
    </div>
    <div class="container" id="option-box">
        <button class="option" id="op1"></button>
        <button class="option" id="op2"></button>
        <button class="option" id="op3"></button>
    </div>
    <div class="container" id="reset-box"> 
        <button id="reset">Reset</button>
    </div>
    <div class="container" id="scoreBox">
        <span id="score-msg"></span>
        <span id="score"></span>
    </div>
    <script src="game.js"></script>
</body>
</html>