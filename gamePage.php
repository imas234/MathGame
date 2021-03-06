<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./gameStyle.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <title>Game Screen</title>
</head>
<body>
    <div class="container" id="timer-box">
        <span id="timer">60</span>
    </div>
    <div class="container" id = "expression-box">
        <span id="expression"></span>
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
    <div class="container" id="link-box">
        <a class="link" id="save-score"></a>
        <a class="link" id="leaderboard"></a>
    </div>
    <script src="./game.js"></script>
</body>
</html>