<?php

	session_start();
	require 'dbh.php';
	extract($_POST);

	$un=$username;
	$psw=$pass;
	//created the template
	$sql="SELECT * FROM users WHERE username=?"; 
	//create the prepared statement
	$stmt = mysqli_stmt_init($conn);
	//prepare the prepared statement
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		die("sqlerror");
	}
	else {
	//bind the parameters to the placeholders
	mysqli_stmt_bind_param($stmt, "s", $un);
	//run parameters inside database
	mysqli_stmt_execute($stmt);
	$result = mysqli_stmt_get_result($stmt);
	if ($row = mysqli_fetch_assoc($result)) {
		$checkpass=password_verify($psw, $row['password']);
	
		if ($checkpass==true) {
			if ($row['type']=='manager') {
				$_SESSION['username']=$un;
				header("Location:managerpage.php");
			}
			else{
			$_SESSION['username']=$un;
			header("Location:index.php");	
		}
			
		}
		else{
			$_SESSION['loginError']=1;
			header("Location:login.php");		}
		
	}
	else{
		$_SESSION['loginError']=1;
		header("Location:login.php");		

	}
}