<?php
    include 'connection.php';
    session_start();
    if(isset($_POST['submit'])){
   
        $songID = $_POST['songID'];
        $userID = $_SESSION['id'];
        
        $query = "DELETE FROM `playlists` WHERE `playlists`.`userId` = '$userID' AND `playlists`.`songId` = '$songID';";
        mysqli_query($conn, $query);
        header("Location: home.php");
        
    }
    ?>