<?php
include 'database.php';

//Check if form submitted
if(isset($_POST['submit'])){
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$subject = mysqli_real_escape_string($con, $_POST['subject']);
	$message = mysqli_real_escape_string($con, $_POST['message']);
	
	// Set timezone
    date_default_timezone_set('Asia/Kolkata'); //indian time zone represented as like this
    $time = date('h:i:s a',time());
    
	//Validate input
    if(!isset($name) || $name == '' || !isset($email) || $email == '' || !isset($subject) || $subject == '' || !isset($message) || $message == ''){
		$error = "Please fill in all the Fields";
		header("Location: index.php?error=".urlencode($error)); //never ever forget to give a space after colon
		exit();
		
    } else {
        $query = "INSERT INTO contactus (name, email, subject, message, time)
		         VALUES('$name','$email','$subject','$message','$time')";
		
     if(!mysqli_query($con, $query)){
		 die('Error: '.mysqli_error($con));
	 } else{
		 header("Location: index.php");
		 exit();
	 }
    } 
}