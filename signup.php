<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

include 'connection.php';

if(isset($_POST['submit'])){
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['firstname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    
    $query = "INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `email`) VALUES (NULL, '$firstname', '$lastname', '$username', '$password', '$email')";
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
        
  <form action="index.php" method="post">
  First Name:<br>
  <input type="text" name="firstname"><br>
  Last Name:<br>
  <input type="text" name="lastname"><br>
  Username:<br>
  <input type="text" name="username"><br>
  Password:<br>
  <input type="text" name="password"><br>
  Email:<br>
  <input type="text" name="email"><br><br>

  <input type="submit" value="Submit" action="index.php" method="post">
</form>
        
    </body>
    
</html>
