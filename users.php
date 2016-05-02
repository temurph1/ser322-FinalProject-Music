 
<h1>Current Users</h1>

<table id="table" border="2">
      <tr>
      <th>Username</th>
      <th>Email</th>
    </tr>     

 <?php
      
      include 'connection.php';
    $query = "SELECT * FROM users ";
    $myQuery = mysqli_query($conn, $query);
   
    while($row = mysqli_fetch_array($myQuery)){
     ?>   
    
    <form action="userPlaylist.php" method="post">
        
    <tr><td><?php echo $row["username"] ?> 
        </td><td> <?php echo $row["email"] ?> 
        <td><label>
    <input type = "hidden" name = "songID" value = "<?php echo $row["id"] ?>" >
    <input type= "submit" name = "submit" value="View Playlist" />
    </label>
    </td></tr>
    </form>   
    
    
    <?php
    }
    ?>