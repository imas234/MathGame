<?php
    include_once 'connection.php';
    $leaderboard = mysqli_query($db, "select username, score from user_scores order by score desc limit 10;");
    $row =  mysqli_fetch_assoc($leaderboard);
    // while()
?>
