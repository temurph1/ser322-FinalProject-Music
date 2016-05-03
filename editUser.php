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
    
    if(isset($_POST['submit'])){
        ?>
        <h1> Edit Info </h1>    
    <form action="editUser.php" method="post">
    First Name:<br>
    <input type="text" placeholder=<?php echo "$firstname" ?> name="firstname"><br>
    Last Name:<br>
    <input type="text" placeholder=<?php echo "$lastname" ?> name="lastname"><br>
    Username:<br>
    <input type="text" placeholder=<?php echo "$username" ?> name="username"><br>
    Password:<br>
    <input type="text" placeholder=<?php echo "$password" ?> name="password"><br>
     Email:<br>
    <input type="text" placeholder=<?php echo "$email" ?> name="email"><br><br>

    <input type="submit" name="update" value="Change">
    </form>
        <?php
    }
    ?>