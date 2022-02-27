<?php
require('herokudb.php');
$email = $_SESSION['email'];
$pic = $_REQUEST['file'];

$sql ="UPDATE `market` SET `picture`='{$pic}' WHERE email = '{$email}'";
mysqli_query($conn, $sql);
header('location: home.php');
// // Close connection
mysqli_close($conn);