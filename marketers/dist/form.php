<?php
require("herokudb.php");
if (isset($_POST['reg_user'])) {
	$_SESSION['first_name']
	= $_POST['first_name'];
	$_SESSION['email']= $_POST['email'];

	// Taking all 5 values from the form data(input)
	$first_name = $_REQUEST['first_name'];
	$last_name = $_REQUEST['last_name'];
	$email = $_REQUEST['email'];

  $wallect = $_REQUEST['wallect'];
	$crypto = $_REQUEST['crypto'];

  $phone = $_REQUEST['phone'];
	$profession = $_REQUEST['pro'];
  $skill1 = $_REQUEST['skill1'];
	$skill2 = $_REQUEST['skill2'];
	$password = $_REQUEST['password'];
  $confirm = $_REQUEST['confirm'];

  $ID = "verifying your ID...";
$number = 0;
$amount = 0;
$ranking = 1;

  if ($password != $confirm){
    echo "password did not match";
    exit;
  }else{
    $sql = "INSERT INTO market VALUES ('$first_name',
					'$last_name','$email','$amount','$phone','$profession', '$skill1','$skill2' ,'$crypto',
          '$wallect','$number','$amount', '$ID','$password', '$ranking')";
					mysqli_query($conn, $sql);
          echo "successful";
          header('location: home.php');
								// // Close connection
								mysqli_close($conn);
  }
}