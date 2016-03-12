<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "msgboard";

$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn,$dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_query($conn,"set names utf8"); 

?>