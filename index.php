<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        ?>
        
        
<h1>Welcome to Music</h1>        
        
<form action="loginprocess.php" method="post">
  Username:<br>
  <input type="text" name="username"><br>
  Password:<br>
  <input type="password" name="password">
  <br>
  <input type="submit" name = "submit" value="Submit">
</form>

<form action="signup.php" method="get">
    <input type="submit" value="Register" action="signup.php" method="post">
</form>


    </body>
</html>
