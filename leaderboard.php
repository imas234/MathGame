<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="leadStyle.css">    
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <title>Leaderboard</title>
</head>
<body>
    <div class="container" id="header-box">
        <span class="header-text">Leaderboard</span>
    </div>
    <div class="container" id="leaderboard-box">
        <?php
            include_once 'connection.php';
            $leaderboard = mysqli_query($db, "select username, score from user_scores order by score desc limit 7;");
            while($row =  mysqli_fetch_assoc($leaderboard)){
                echo "<div class=\"container\" id=\"arrange-box\"><span class=\"leaderboard-content\">{$row['username']}</span><span class=\"leaderboard-content\">{$row['score']}</span></div>";
            }
        ?>
    </div>
    <div class="container" id="link-box">
        <a class="link" id="play-game" href="gamePage.php">Play Game</a>
    </div>
</body>
</html>
