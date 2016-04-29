<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

include 'connection.php';

if(isset($_POST['submit'])){
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    
    $query = "INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES (NULL, '$username', '$password', '$email')";
    mysqli_query($conn, $query);     
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        
  <h1> Register </h1> 
        
  <form action="signup.php" method="post">
  Email:<br>
  <input type="text" name="email"><br>
  Username:<br>
  <input type="text" name="username"><br>
  Password:<br>
  <input type="text" name="password">
  <br>
  <input type="submit" name = "submit" value="Submit">
</form>
        
    </body>
    
</html>
