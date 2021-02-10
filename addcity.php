<?php
extract($_POST);
require 'dbh.php';

		?>

		<!DOCTYPE html>
<html>
<head>
	<title>add new city</title>
	<style type="text/css">
		*{
			margin:0;
			padding:0;
		}
		body{
			font-family: candara;
		}
		.wrap{
			width: 500px;
			padding: 20px;
			border: 1px solid #f2f2f2;
			height: 100%;
			background-color: #f2f2f2;
			border-radius: 5px;
			margin: 0 auto;

		}
		.in{
			height: 20px;
			margin-top: 15px;
			border: 1px solid #ccc;
			border-radius: 4px;
		}
		.ebtn{
			 padding:7px 14px; background-color: #ffba66; border: 1px solid #ffba66; border-radius: 4px;
		}
		.dbtn{
			padding:7px 14px;  background-color: #ff6666; border: 1px solid #ff6666; border-radius: 4px;margin-left: 278px;

		}
		.ebtn:hover{
			cursor: pointer;
			color: white;
			border: 1px solid orange;
			background-color: orange;
		}
		.dbtn:hover{
			cursor: pointer;
			color: white;
			border: 1px solid red;
			background-color: red;
		}
		.u{
			padding: 3px 10px;
			margin-top: 10px;
		}

	</style>
</head>
<body>
		<h2 style="margin-left: 30.5%; margin-top: 40px;">add city</h2>
		<div class="wrap">
		<form method="POST" enctype="multipart/form-data" action="a_city.php">
			<div class="left">
			City Name: &nbsp; <input type="text" name="city" class="in" required="required"><br>
			<input type="submit" name="cancel" value="Cancel" class="dbtn"><input type="submit" name="submit" value="Save Changes" class="ebtn" style="margin-left: 15px;margin-top: 15px;">
			</div>
		</form>
	</div>
</body>
</html> 
