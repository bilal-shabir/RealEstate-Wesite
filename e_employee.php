<?php
extract($_POST);
if (isset($submit)) {
	require 'dbh.php';

	$sql = "UPDATE employee SET salary='$salary',untill='$date', job='$job' WHERE id='$eid';";
	$r = mysqli_query($conn, $sql);

	$sql2 = "SELECT * FROM employee where id='$eid';";
	$result = mysqli_query($conn, $sql2);
	$row = mysqli_fetch_assoc($result);

	if ($job=='manager') {
		$type='manager';
	}
	else{
		$type='seller';
	}


	$uid = $row['u_id'];
	$sql3 = "UPDATE users SET type='$type' WHERE u_id='$uid';";
	$s = mysqli_query($conn, $sql3);

	header("Location:adminprofile.php");
}
else{
	header("Location:adminprofile.php");
}
