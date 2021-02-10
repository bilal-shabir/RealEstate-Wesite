<?php
extract($_POST);
require 'dbh.php';

$sql = "INSERT INTO city(city) VALUES('$city');";
$r = mysqli_query($conn, $sql);

header("Location:adminprofile.php");