<?php  
 include 'connection.php';
 if(isset($_POST['submit'])){
    $userID = $_POST['userID'];
    $username = $_POST['username'];
    $songQuery = "SELECT * FROM playlists WHERE userId = '$userID'";
    $mySongQuery = mysqli_query($conn, $songQuery);
    
    $querySongRow = mysqli_fetch_array($mySongQuery);
   
    ?>
    <h1> <?php echo "$username" ?>'s Playlist </h>
    <table id="table" border="2">
      <tr>
      <th>Title</th>
      <th>Artist</th>
    </tr>
    <?php  
    while($querySongRow = mysqli_fetch_array($mySongQuery)){
        $songID = $querySongRow['songId'];
        $query = "SELECT * FROM songs WHERE id = '$songID' ";
        $myQuery = mysqli_query($conn, $query);
    
        $row = mysqli_fetch_array($myQuery);
    ?>
    <tr><td><?php echo $row["title"] ?> 
        </td><td> <?php echo $row["artist"] ?> 
        <label>
    </label>
    </td></tr>
<?php
    }
}
?>