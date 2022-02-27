<?php
require("herokudb.php");
if (isset($_POST['cash'])) {

	$_SESSION['email']
	= $_POST['email'];

	// Taking all 5 values from the form data(input)
	$first_name = $_REQUEST['first_name'];
	$last_name = $_REQUEST['last_name'];
	$email = $_REQUEST['email'];
	$DOB = $_REQUEST['DOB'];
	$sex = $_REQUEST['sex'];
	$phone = $_REQUEST['phone'];

}


    ?>