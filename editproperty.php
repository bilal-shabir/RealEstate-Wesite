	<?php 
	require 'dbh.php';
	extract($_POST);
	if (isset($edit)) {
		# code...
	
		$sql = "SELECT * FROM property where p_id='$pid';";
		$result=mysqli_query($conn, $sql);
		$row6=mysqli_fetch_assoc($result);

		?>

		<!DOCTYPE html>
<html>
<head>
	<title>edit property</title>
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
		<form method="POST" enctype="multipart/form-data" action="eproperty.php">
			<div class="left">
			Name of the building: &nbsp; <input type="text" name="name" class="in" required="required" style="width: 100px;" value="<?php echo $row6['name']; ?>"><br>
			Number of bedroom: &nbsp; <input type="number" name="bedroom" class="in" required="required" min="0" style="width: 100px;" value="<?php echo $row6['bedroom']; ?>"><br>
			Number of bathroom : &nbsp; <input type="number" name="bathroom" class="in" required="required" min="0" style="width: 100px;" value="<?php echo $row6['bathroom']; ?>"><br>
			Number of hall:	&nbsp; <input type="number" name="hall" class="in" required="required" min="0" style="width: 100px;" value="<?php echo $row6['hall']; ?>"><br>
			Number of kitchen: &nbsp; &nbsp; &nbsp;<input type="number" name="kitchen" class="in" min="0" style="width: 100px;" required="required" style="width: 100px;" value="<?php echo $row6['kitchen'] ?>"><br>
			Number of garage : &nbsp;<input type="number" name="garage" class="in" required="required" style="width: 100px;" min="0" value="<?php echo $row6['garage']; ?>"><br>
			Located in: &nbsp; <select class="in" name="city">
                                	<?php
                                		require 'dbh.php';
                                		$sql1= "SELECT * FROM city;";
										$result1 = mysqli_query($conn, $sql1);
                                		while ($row1=mysqli_fetch_assoc($result1)) { ?>
                                			<option value="<?php echo $row1['city']; ?>"><?php echo $row1['city']; ?></option>
                                		<?php }
                                	 ?>
                            	</select><br>
            Road (sqft): &nbsp; <input type="number" name="road" class="in" required="required" style="width: 100px;" min="0" value="<?php echo $row6['road']; ?>"><br>
            Building no. (sqft): &nbsp; <input type="number" name="bldg" class="in" required="required" style="width: 100px;" min="0" value="<?php echo $row6['bldg']; ?>"><br>
			Area (sqft): &nbsp; <input type="number" name="area" class="in" required="required" style="width: 100px;" min="0" value="<?php echo $row6['area']; ?>"><br>
			Price: &nbsp; <input type="number" name="price" class="in" style="width: 100px;" required="required" min="100" value="<?php echo $row6['price']; ?>"> <b>BD</b><br>
			Type: &nbsp; <select class="in" name="type">
                                		<option value="house">House</option>
                                		<option value="appartment">Appartment</option>
                                		<option value="villa">Villa</option>
                           			 </select><br>
            For: &nbsp; <select class="in" name="income">
                                		<option value="rent">Rent</option>
                                		<option value="sale">Sale</option>
                           			 </select><br>
            One line heading: &nbsp; <input type="text" name="desc" value="<?php echo $row6['description']; ?>" class="in" required="required">
			<input type="submit" name="cancel" value="Cancel" class="dbtn"><input type="submit" name="submit" value="Save Changes" class="ebtn" style="margin-left: 15px;margin-top: 15px;">
			<?php echo "<input type='hidden' name='pid' value='".$pid."'> "; ?>
			</div>
		</form>
	</div>
</body>
</html>
<?php
}
elseif (isset($delete)) {
	require 'dbh.php';
	$sql="DELETE FROM reservation where p_id='$pid';";
	$d= mysqli_query($conn, $sql);

	$sql="DELETE FROM pcoverimage where p_id='$pid';";
	$d= mysqli_query($conn, $sql);

	$sql="DELETE FROM pimage where p_id='$pid';";
	$d= mysqli_query($conn, $sql);

	$sql2 = "SELECT * FROM property where p_id='$pid';";
	$result2 = mysqli_query($conn, $sql2);
	$row2 = mysqli_fetch_assoc($result2);
	$currentcity = $row2['city'];

	$sql3="UPDATE city SET properties=properties-1 where city='$currentcity';";
	$u = mysqli_query($conn, $sql3);

	$sql="DELETE FROM property where p_id='$pid';";
	$d= mysqli_query($conn, $sql);
	header("Location:sellerprofile.php");
}