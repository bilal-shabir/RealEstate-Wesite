<?php
session_start();
require 'dbh.php';
$pid = intval($_GET['propertyid']);

$sql = "SELECT * FROM property where p_id='$pid';";
$result= mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);
$agentid=$row['u_id'];

$un=$_SESSION['username'];
$sql2= "SELECT * FROM users where username='$un';";
$result2=mysqli_query($conn, $sql2);
$row2=mysqli_fetch_assoc($result2);
$userid= $row2['u_id'];

$sql3="INSERT INTO reservation (p_id, reservedby, agent) VALUES('$pid', '$userid', '$agentid');";
$r = mysqli_query($conn,$sql3); 
header("Location:userprofile.php");