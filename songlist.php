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


?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <h1> Song List </h1>
        
        <table border="2">
      <tr>
      <th>Title</th>
      <th>Artist</th>
    </tr>
        
        <?php
    $query = "SELECT * FROM songs ";
    $myQuery = mysqli_query($conn, $query);
        
        while($row = mysqli_fetch_array($myQuery)){
        echo "<tr><td>",$row["title"],"</td><td>", $row["artist"], "</td><td> <input type=\"submit\" value=\"Add\"> </td></tr>";
        }
        ?>
    </body>
</html>
