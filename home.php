<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
session_start();

include 'connection.php';
$username = $_SESSION['username'];
$id = $_SESSION['id'];

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "<b>", $username, "'s Playlist </b>";


    $query = "SELECT * FROM playlists WHERE userId = '$id' ";
    $myQuery = mysqli_query($conn, $query);
    
    $queryRow = mysqli_fetch_array($myQuery);
    
    ?>
    <table id="table" border="2">
      <tr>
      <th>Title</th>
      <th>Artist</th>
    </tr>
    <?php  
    while($row = mysqli_fetch_array($myQuery)){
      
    ?>
    <form action="removeSong.php" method="post">
        <?php
        $songID = $row["songId"];
        $songQuery = "SELECT * FROM songs WHERE id = '$songID' ";
        $mySongQuery = mysqli_query($conn, $songQuery);
    
        $querySongRow = mysqli_fetch_array($mySongQuery);
        ?>
    <tr><td><?php echo $querySongRow["title"] ?> 
        </td><td> <?php echo $querySongRow["artist"] ?> 
        <td><label>
    <input type="hidden" name ="songID" value="<?php echo $row["songId"] ?>" >
    <input type= "submit" name = "submit" value="Remove" />
    </label>
    </td></tr>
    </form>  
       
        <?php
    }?>
        <form action="songlist.php" method="post">
            <input type="submit" value="Song List">
        <input type="submit" value="Add Song">
        </form>   
    <form action="users.php" method="post">
            <input type="submit" value="Find Users">
        </form> 
        
        
    </body>
</html>
