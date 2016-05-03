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
    $email = $queryRow['email'];
    $firstname = $queryRow['firstname'];
    $lastname = $queryRow['lastname'];
    
    if($password == $pass && $username != "" && $password != "" ){
       $_SESSION['username'] = $username;
       $_SESSION['id'] = $id;
       $_SESSION['email'] = $email;
       $_SESSION['password'] = $pass;
       $_SESSION['firstname'] = $firstname;
       $_SESSION['lastname'] = $lastname; 
       header('Location: home.php');
    } else {
        echo "Invalid credentials";
    }
    
    
}
