<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Users</title>

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
                        <a href="home.php">Home</a>
                    </li>
                    <li>
                        <a href="songlist.php">Library</a>
                    </li>
                    <li>
                        <a href="playlist.php">Playlist</a>
                    </li>
					<li>
                        <a href="merch.php">Merchandise</a>
                    </li>
                    <li>
                        <a href="users.php">Find Users</a>
                    </li>
                    <li>
                        <a href="editUser.php">Profile</a>
                    </li>
                    <a href="index.php">
                    <button type="button" class="btn btn-warning" style="margin-left:400px; margin-top:7px; color: white;">Logout</button>
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
                
<h1 style="color: silver">Merchandise List</h1>


      <table class="table table-striped" id="table" border="0" align="center">
      <thead>
      <tr>
      <th>Name</th>
      <th>Price</th>
    </tr>     
      </thead>

 <?php
      
      include 'connection.php';
    $query = "SELECT * FROM merchandise ";
    $myQuery = mysqli_query($conn, $query);
   
    while($row = mysqli_fetch_array($myQuery)){
     ?>   
    
    <form action="merchItem.php" method="post">
        
    <tr><td><?php echo $row["name"] ?> 
        </td><td> <?php echo "$ " . $row["price"] ?> 
        <td><label>
    <input type = "hidden" name = "merchID" value = "<?php echo $row["id"] ?>" >
    <input type = "hidden" name = "name" value = "<?php echo $row["name"] ?>" >
    <input type= "submit" class="btn btn-warning" name = "submit" value="View Item" />
    </label>
    </td></tr>
    </form>   
    
    
    <?php
    }
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
