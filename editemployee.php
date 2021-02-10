<?php
extract($_POST);
if (isset($edit)) {
require 'dbh.php';
	extract($_POST);
		$sql = "SELECT * FROM employee where id='$eid';";
		$result=mysqli_query($conn, $sql);
		$row=mysqli_fetch_assoc($result);

		?>

		<!DOCTYPE html>
<html>
<head>
	<title>edit employee information</title>
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
		<h2 style="margin-left: 30.5%; margin-top: 40px;">Edit Information</h2>
		<div class="wrap">
		<form method="POST" enctype="multipart/form-data" action="e_employee.php">
			<div class="left">
			Salary: &nbsp; <input type="number" name="salary" class="in" required="required" min="0" style="width: 100px;" value="<?php echo $row['salary']; ?>"><br>
			Contract untill : &nbsp; <input type="date" name="date" class="in" required="required" min="0" style="width: 120px;" value="<?php echo $row['untill']; ?>"><br>	
			Job: &nbsp; <select class="in" name="job">
                                	<option value="agent">Agent</option>
                                	<option value="manager">Manager</option>                                	
                            	</select><br>
			<input type="submit" name="cancel" value="Cancel" class="dbtn"><input type="submit" name="submit" value="Save Changes" class="ebtn" style="margin-left: 15px;margin-top: 15px;">
			<?php echo "<input type='hidden' name='eid' value='".$eid."'> "; ?>
			</div>
		</form>
	</div>
</body>
</html> 
<?php
}
elseif (isset($remove)) {
	require 'dbh.php';
	extract($_POST);
	$sql = "SELECT * FROM employee where id='$eid';";
		$result=mysqli_query($conn, $sql);
		$row=mysqli_fetch_assoc($result);
		$uid =$row['u_id'];

		$sql = "DELETE FROM employee where id='$eid';";
		$r = mysqli_query($conn, $sql);

		$sql = "DELETE FROM reservation where agent='$uid';";
		$r = mysqli_query($conn, $sql);

		$sql = "DELETE FROM sales where aid='$uid';";
		$r = mysqli_query($conn, $sql);

		$sql1 = "SELECT * FROM property where u_id='$uid';";
		$result = mysqli_query($conn, $sql1);
		$resultcheck = mysqli_num_rows($result);
		if ($resultcheck>0) {
			while ($row1 = mysqli_fetch_assoc($result)) {
				$pid = $row1['p_id'];
				$sql2 = "DELETE FROM pcoverimage where p_id='$pid';";
				$r = mysqli_query($conn, $sql2);
				$sql2 = "DELETE FROM pimage where p_id='$pid';";
				$r = mysqli_query($conn, $sql2);


			}
		}
		$sql = "DELETE FROM property where u_id='$uid';";
		$r = mysqli_query($conn, $sql);

		$sql = "DELETE FROM users where u_id='$uid';";
		$r = mysqli_query($conn, $sql);

		
		header("Location:adminprofile.php");
		
}