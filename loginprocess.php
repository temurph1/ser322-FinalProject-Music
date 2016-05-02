<?php

session_start();

include 'connection.php';

if(isset($_POST['submit'])){
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = "SELECT * FROM users WHERE username = '$username'";
    $myQuery = mysqli_query($conn, $query);
    $queryRow = mysqli_fetch_array($myQuery);
    $pass = $queryRow['password'];
    $id = $queryRow['id'];
    
    if($password == $pass){
       echo "yes";
       $_SESSION['username'] = $username;
       $_SESSION['id'] = $id;
       header('Location: home.php');
    } else {
        echo "Invalid credentials";
    }
    
    
}
