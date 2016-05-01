<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
session_start();

include 'connection.php';



?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "Welcome ", $_SESSION['username'] ;



    $query = "SELECT * FROM songs";
    $myQuery = mysqli_query($conn, $query);
    $queryRow = mysqli_fetch_array($myQuery);
    
    echo "<br><br>",$queryRow["title"]," ", $queryRow["artist"]," ", $queryRow["length"];
        ?>
        
        <h1></h1>
        
    </body>
</html>
