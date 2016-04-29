<?php

session_start();

include 'connection.php';

if(isset($_POST['submit'])){
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = "SELECT password FROM users WHERE username = '$username'";
    $myQuery = mysqli_query($conn, $query);
    $queryRow = mysqli_fetch_array($myQuery);
    $pass = $queryRow['password'];
    
    if($password == $pass){
       echo "yes";
       $_SESSION['username'] = $username;
       header('Location: home.php');
    } else {
        echo "Invalid credentials";
    }
    
    
}
