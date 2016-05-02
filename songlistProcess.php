<?php
    include 'connection.php';
    session_start();
    if(isset($_POST['submit'])){
   
        $songID = $_POST['songID'];
        $userID = $_SESSION['id'];
        
        echo $userID;
        echo $songID;
        $query = "INSERT INTO `playlists` (`userId`, `songId`) VALUES ('$userID', '$songID')";
        mysqli_query($conn, $query);
        header("Location: home.php");
        
    }
    ?>
