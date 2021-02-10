<?php
extract($_POST);
if (isset($submit)) {
	require 'dbh.php';

	$sql1="SELECT * from property where p_id='$pid';";
	$result= mysqli_query($conn, $sql1);
	$row=mysqli_fetch_assoc($result);
	$currentcity = $row['city'];
	$sql = "UPDATE property SET bedroom='$bedroom',bathroom='$bathroom', hall='$hall', kitchen='$kitchen', description='$desc', income='$income', area='$area',price='$price',city='$city',garage='$garage', type='$type', name='$name', road='$road', bldg='$bldg' WHERE p_id='$pid';";
	$r = mysqli_query($conn, $sql);
	if ($currentcity==$city) {
		header("Location:sellerprofile.php");
	}
	else{
		$sql = "UPDATE city SET properties=properties-1 WHERE city='$currentcity';";
		$e = mysqli_query($conn,$sql);

		$sql = "UPDATE city SET properties=properties+1 WHERE city='$city';";
		$e = mysqli_query($conn,$sql);
		header("Location:sellerprofile.php");

	}
	
}
else{
	header("Location:sellerprofile.php");
}
