<?php
session_start();
extract($_POST);
if (isset($cancel)) {
	require 'dbh.php';
$sql = "DELETE FROM reservation where id='$rid';";
$r = mysqli_query($conn, $sql);

$un=$_SESSION['username'];
$sql2="SELECT * FROM users where username='$un';";
$result2=mysqli_query($conn, $sql2);
$row2=mysqli_fetch_assoc($result2);

if ($row2['type']=='seller') {
	header("Location:sellerprofile.php");
}
else{
	header("Location:userprofile.php");
}
}
elseif (isset($pay)) {
	require 'dbh.php';
	$sql3 = "SELECT * from reservation where id='$rid';";
	$result3 = mysqli_query($conn, $sql3);
	$row3 = mysqli_fetch_assoc($result3);

	$p_id = $row3['p_id'];

	$sql4= "SELECT * FROM property where p_id='$p_id';";
	$result4=mysqli_query($conn, $sql4);
	$row4 = mysqli_fetch_assoc($result4);

	$un=$_SESSION['username'];
	$sql2="SELECT * FROM users where username='$un';";
	$result2=mysqli_query($conn, $sql2);
	$row2=mysqli_fetch_assoc($result2);

	$price=$row4['price'];
	$city= $row4['city'];
	$agentid=$row4['u_id'];
	if ($row4['income']=='rent') {
		$commision=$price;
	}
	else{
		$commision=$price*0.05;
	}
	$date=date('Y-m-d');
	$buyerid=$row2['u_id'];

	$sql = "DELETE FROM reservation where id='$rid';";
	$r = mysqli_query($conn, $sql);



	$sql5="INSERT into sales(aid, pid, price, commision, city,date,bid) VALUES('$agentid','$p_id', '$price', '$commision','$city','$date','$buyerid');";
	$u=mysqli_query($conn,$sql5);





	header("Location:userprofile.php");

}

