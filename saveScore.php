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
        <span class="score-view" id="score-msg">Points Scored</span>
        <span class="score-view" id="score-value"></span>
    </div>
    <form name="user-form" action="saveScore.php" method="POST" onsubmit="return validateForm()">
        <div class="container" id="login-box">
            <input  type="hidden" name="points" id="saved-points" value=""/>
            <input class="input-area" type="text" name="username" placeholder="Name" id="input-username" required/>   
            <input class="input-area" type="text" name="password" placeholder="Password" id="input-password" required/>
            <input class="input-button" type="submit" value="Save" name="save" id="save-button"/>
        </div>
    </form>
    <script src="scoreManip.js"></script>
    <div class="container" id="error-msg">
        <?php
            include_once 'connection.php';
            if(isset($_POST["save"]))  {
                $username = $_POST["username"];
                $password = $_POST["password"];
                $points = $_POST["points"];
                $password_check = mysqli_query($db, "select password from users where username = '$username';");
                $pw_check_results = mysqli_num_rows($password_check);
                if($pw_check_results == 0){
                    $sql="insert into users values(null, '$username', '$password')";
                    mysqli_query($db, $sql);
                    $sql="insert into user_scores values(null, '$username', $points)";
                    mysqli_query($db, $sql);
                    header("Location: leaderboard.php");
                }
                else if($pw_check_results > 0){
                    $row = mysqli_fetch_assoc($password_check);
                    if($password == $row['password']){
                        $sql="insert into user_scores values(null, '$username', $points)";
                        mysqli_query($db, $sql);
                        header("Location: leaderboard.php");
                    }else{
                        echo "Password does not match. Try a different username or enter the correct password.";
                    }                
                }
                
            }
        ?>
    </div>
</body>
</html>