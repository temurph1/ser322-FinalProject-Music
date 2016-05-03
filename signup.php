<!DOCTYPE html>

<?php

include 'connection.php';

if(isset($_POST['submit'])){
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    
    $query = "INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `email`) VALUES (NULL, '$firstname', '$lastname', '$username', '$password', '$email')";
    mysqli_query($conn, $query); 
    header('Location: index.php');
}
?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bare - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    br {
        line-height:30px;
    }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="images/groovylogowhite.png" width="105"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                    <li>
                        <a href="signup.php">Register</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                  <h1 style="color: silver">Start a new music adventure</h1><br>
                  
                <input type="submit"value="REGISTER WITH FACEBOOK" class="btn btn-lg btn-primary" style="width:500px; font-size:12px ">
                <h2 style="font-size:12px; margin:8px; color: silver;">-   or  -</h2>
        
                  <form action="signup.php" method="post">
  <input type="text" name="firstname" placeholder="   First Name" style="width:500px; height:40px; font-size:20px; border: 2px solid silver; "><br>
  <input type="text" name="lastname" placeholder="   Last Name" style="width:500px; height:40px; font-size:20px; border: 2px solid silver; "><br>
  <input type="text" name="username" placeholder="   Username" style="width:500px; height:40px; font-size:20px; border: 2px solid silver; "><br>
  <input type="text" name="password" placeholder="   Password" style="width:500px; height:40px; font-size:20px; border: 2px solid silver; "><br>
  <input type="text" name="email" placeholder="   Email" style="width:500px; height:40px; font-size:20px; border: 2px solid silver; "><br><br>
  <input type="submit" name = "submit" value="REGISTER" class="btn btn-lg btn-success" style="width:500px; font-size:12px ">

</form>

            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

