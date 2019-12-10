<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="saveStyle.css">    
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <title>Score Save Screen</title>
</head>
<body>
    <div class="container" id="score-box">
        <span class="score-view" id="score-msg">You Scored</span>
        <span class="score-view" id="score-value"></span>
    </div>
    <form action="saveScore.php" method="POST">
        <div class="container" id="login-box">
            <input  type="hidden" name="points" id="saved-points" value=""></input>
            <input class="input-area" type="text" name="name" placeholder="Name"></input>      
            <input class="input-area" type="text" name="password" placeholder="Password"></input>
            <input class="input-button" type="submit" value="Save" name="save"></input>
        </div>
    </form>
    <script src="scoreManip.js"></script>
</body>
</html>