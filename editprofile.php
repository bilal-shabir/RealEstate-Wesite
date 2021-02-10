<?php
	session_start();

	require 'dbh.php';
	extract($_POST);
	$fullname=$fn;
	$username = $_SESSION['username'];
	$password = password_hash($psw, PASSWORD_DEFAULT);
	$cpassword=$cpsw;
	$email=$em;
	$number=$num;
	$address=$addr;

	$sql="SELECT * FROM users WHERE username='$username';"; 

	
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$u_id= $row['u_id'];
	$passcheck=password_verify($cpassword, $password);


	if($passcheck==false){
		$_SESSION['pswerror']=1;
		if ($row['type']=='seller') {
			header("Location:sellerprofile.php");
		}
		elseif($row['type']=='customer'){
		header("Location:userprofile.php");
		
		}
		elseif ($row['type']=='admin') {
		header("Location:adminprofile.php");
		
		}
		else{
		header("Location:managerprofile.php");
		}
	}
	else{
		$sql = "UPDATE users SET password='$password',fullname='$fullname',email='$email', number='$number', address='$address' WHERE u_id='$u_id';";
		$result= mysqli_query($conn, $sql);
		$_SESSION['pswerror']=null;
		if ($row['type']=='seller') {
			header("Location:sellerprofile.php");
		}
		elseif($row['type']=='customer'){
		header("Location:userprofile.php");
		
		}
		elseif ($row['type']=='admin') {
		header("Location:adminprofile.php");
		
		}
		else{
		header("Location:managerprofile.php");
		}

	}