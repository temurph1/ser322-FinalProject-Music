<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
session_start();

include 'connection.php';
include('simple_html_dom.php');
$username = $_SESSION['username'];


?>

<?php
    function query() { 
        echo "alert(\"The link was clicked\");";
    } 
?>



<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <h1> Song List </h1>

        <table id="table" border="2">
      <tr>
      <th>Title</th>
      <th>Artist</th>
    </tr>
   
        
      <?php
    $query = "SELECT * FROM songs ";
    $myQuery = mysqli_query($conn, $query);
    
    

    while($row = mysqli_fetch_array($myQuery)){
     ?>   
    
    <form action="songlistProcess.php" method="post">
        
    <tr><td><?php echo $row["title"] ?> 
        </td><td> <?php echo $row["artist"] ?> 
        <td><label>
    <input type = "hidden" name = "songID" value = "<?php echo $row["id"] ?>" >
    <input type= "submit" name = "submit" value="Add" />
    </label>
    </td></tr>
    </form>   
    
    
    <?php
    }
    ?>




     
        
    </form>
    </body>
</html>
