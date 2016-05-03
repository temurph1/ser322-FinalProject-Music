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
    th{
        text-align:center;
    }
    h3{
        color: silver;
        margin: 0px;
        padding: 0px;
        font-size: 12px;
        
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
                <a class="navbar-brand" href="#">Groovy</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="home.php">Home</a>
                    </li>
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                    <li>
                        <a href="signup.php">Register</a>
                    </li>
                    <li>
                        <a href="songlist.php">Library</a>
                    </li>
                    <li>
                        <a href="home.php">Playlist</a>
                    </li>
                    <li>
                        <a href="users.php">Find Users</a>
                    </li>
                    <li>
                        <a href="editUser.php">Profile</a>
                    </li>

                    <a href="index.php">
                    <button type="button" class="btn btn-warning" style="margin-left:400px; margin-top:7px;">Logout</button>
                    </a>

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
               
                <?php
    include 'connection.php';
    session_start();
    
    $username = $_SESSION['username'];
    $id = $_SESSION['id'];
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    $firstname = $_SESSION['firstname']; 
    $lastname = $_SESSION['lastname'];
    
    if(isset($_POST['update'])){
        $newFirstname = $_POST['firstname'];
        $newLastname = $_POST['lastname'];
        $newUsername = $_POST['username'];
        $newPassword = $_POST['password'];
        $newEmail = $_POST['email'];
        
        if($newFirstname != ""){
            $query = "UPDATE `users` SET `firstname` = '$newFirstname' WHERE `users`.`id` = $id;";
            mysqli_query($conn, $query);
            $_SESSION['firstname'] = $newFirstname;
        }
        if($newLastname != ""){
            $query = "UPDATE `users` SET `lastname` = '$newLastname' WHERE `users`.`id` = $id;";
            mysqli_query($conn, $query);
            $_SESSION['lastname'] = $newLastname;
        }
        if($newPassword != ""){
            $query = "UPDATE `users` SET `password` = '$newPassword' WHERE `users`.`id` = $id;";
            mysqli_query($conn, $query);
            $_SESSION['password'] = $newPassword;
        }
        if($newUsername != ""){
            $query = "UPDATE `users` SET `username` = '$newUsername' WHERE `users`.`id` = $id;";
            mysqli_query($conn, $query);
            $_SESSION['username'] = $newUsername;
        }
        if($newEmail != ""){
            $query = "UPDATE `users` SET `email` = '$newEmail' WHERE `users`.`id` = $id;";
            mysqli_query($conn, $query);
            $_SESSION['email'] = $newEmail;
        }
        
        header("Location: home.php");
    }
    

        ?>
        <h1 style="color: silver">EDIT INFO</h1>    
    <form action="editUser.php" method="post">
        <h3>FIRST NAME </h3>
    <input type="text" placeholder=<?php echo "$firstname" ?> name="firstname" style="width:500px; height:40px; font-size:20px; border: 2px solid silver; "><br>
    <h3>LAST NAME</h3>
    <input type="text" placeholder=<?php echo "$lastname" ?> name="lastname" style="width:500px; height:40px; font-size:20px; border: 2px solid silver; "><br>
    <h3>USERNAME</h3>
    <input type="text" placeholder=<?php echo "$username" ?> name="username" style="width:500px; height:40px; font-size:20px; border: 2px solid silver; "><br>
    <h3>PASSWORD</h3>
    <input type="text" placeholder=<?php echo "$password" ?> name="password" style="width:500px; height:40px; font-size:20px; border: 2px solid silver; "><br>
    <h3>EMAIL</h3>
    <input type="text" placeholder=<?php echo "$email" ?> name="email" style="width:500px; height:40px; font-size:20px; border: 2px solid silver; "><br><br>

    <input class="btn btn-success" type="submit" name="update" value="Submit Changes" style="width:500px; font-size:12px ">
    </form>
        <?php
   
    ?>

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

        
        