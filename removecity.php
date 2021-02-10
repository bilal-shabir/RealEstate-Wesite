<?php
extract($_POST);
require 'dbh.php';
$sql= "DELETE FROM city where id='$city_id';";
$r = mysqli_query($conn, $sql);
header("Location:adminprofile.php");