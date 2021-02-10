<?php
extract($_POST);
	require 'dbh.php';
	extract($_POST);
	$fullname=$fn;
	$username = $un;
	$password = password_hash($psw, PASSWORD_DEFAULT);
	$cpassword=$cpsw;
	$email=$em;
	$today = date('Y-m-d');
	if($job=='agent'){
		$type= "seller";
	}
	else{
		$type= "manager";
	}
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
	$passcheck=password_verify($cpassword, $password);

	
	if ($row = mysqli_fetch_assoc($result)) {
		$_SESSION['perror']=null;
		$_SESSION['uerror']=1;
		header("Location:addemployee.php"); 
	}
	elseif($passcheck==false){
		$_SESSION['perror']=1;
		$_SESSION['uerror']=null;
		header("Location:addemployee.php");
	}
	else{
		$sql = "INSERT INTO users (username, password, fullname, email, type) VALUES (?, ?, ?, ?, ?);";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
		die("sqlerror");
		}
		mysqli_stmt_bind_param($stmt, "sssss", $username, $password, $fullname, $email, $type);
		mysqli_stmt_execute($stmt);
		$pid= $conn->insert_id;

		$sql2 = "INSERT INTO employee (u_id, joined, untill, job, salary) VALUES('$pid','$today','$date','$job','$salary');";
		$r = mysqli_query($conn,$sql2);
		
		$_SESSION['perror']=null;
		$_SESSION['uerror']=null;

		header("Location:adminprofile.php");

	}

	}
	