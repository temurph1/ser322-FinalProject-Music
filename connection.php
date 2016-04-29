<?php

$dbhost = "127.0.0.1";
$dbuser = "root";
$dbpass = "";
$db = "music";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

mysqli_select_db($conn, $db);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

