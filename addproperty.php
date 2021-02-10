<?php session_start();
 extract($_POST);
 if (isset($back)) {
 	header("Location:sellerprofile.php");
 }
 else{
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Add property</title>
	<style type="text/css">
		*{
			margin:0;
			padding:0;
		}
		body{
			font-family: candara;
		}
		.wrap{
			width: 745;
			padding: 20px;
			border: 1px solid #f2f2f2;
			height: 100%;
			background-color: #f2f2f2;
			border-radius: 5px;
			float: left;
			margin-left: 13%;

		}
		.left{
			width:500px;
			float: left;
		}
		.right{
			width: 230px;
			float: left;
		}
		.in{
			height: 20px;
			margin-top: 15px;
			border: 1px solid #ccc;
			border-radius: 4px;
		}
		.ebtn{
			 padding:7px 14px; background-color: #ffba66; border: 1px solid #ffba66; border-radius: 4px; margin-left: 340px; margin-top: 173px;
		}
		.dbtn{
			padding:7px 14px;  background-color: #ff6666; border: 1px solid #ff6666; border-radius: 4px; margin-top: 291px;

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

	
		<?php 
		extract($_POST);
		require 'dbh.php';
		$uid = $userid;
		 ?>
		<h2 style="margin-left: 13.5%; margin-top: 40px;">Add a Property</h2>
		<div class="wrap">
		<form method="POST" enctype="multipart/form-data" action="aproperty.php">
			<div class="left">
			Name of the property: &nbsp; <input type="text" name="name" class="in" required="required" style="width: 100px;"><br>
			Number of bedroom: &nbsp; <input type="number" name="bedroom" class="in" required="required" min="0" style="width: 100px;"><br>
			Number of bathroom : &nbsp; <input type="number" name="bathroom" class="in" required="required" min="0" style="width: 100px;"><br>
			Number of hall:	&nbsp; <input type="number" name="hall" class="in" required="required" min="0" style="width: 100px;"><br>
			Number of kitchen: &nbsp; &nbsp; &nbsp;<input type="number" name="kitchen" class="in" min="0" style="width: 100px;" required="required" style="width: 100px;"><br>
			Number of garage : &nbsp;<input type="number" name="garage" class="in" required="required" style="width: 100px;" min="0"><br>
			<?php
			require 'dbh.php';
				$sql= "SELECT * FROM city;";
				$result = mysqli_query($conn, $sql);
				
				
			 ?>
			Located in: &nbsp; <select class="in" name="city">
                                	<?php
                                		while ($row=mysqli_fetch_assoc($result)) { ?>
                                			<option value="<?php echo $row['city']; ?>"><?php echo $row['city']; ?></option>
                                		<?php }
                                	 ?>
                           
                            	</select><br>
            Road no.: &nbsp; <input type="number" name="road" class="in" required="required" style="width: 100px;" min="0"><br>
            Building no.: &nbsp; <input type="number" name="bldg" class="in" required="required" style="width: 100px;" min="0"><br>
			Area (sqft): &nbsp; <input type="number" name="area" class="in" required="required" style="width: 100px;" min="0"><br>
			Price: &nbsp; <input type="number" name="price" class="in" style="width: 100px;" required="required" min="0"> <b>BD</b><br>
			Type: &nbsp; <select class="in" name="type">
                                		<option value="house">House</option>
                                		<option value="appartment">Appartment</option>
                                		<option value="villa">Villa</option>
                           			 </select><br>
            For: &nbsp; <select class="in" name="income">
                                		<option value="rent">Rent</option>
                                		<option value="sale">Sale</option>
                           			 </select><br>
			
			<p style="margin-left: 0px; float: left; margin-top: 40px;">Please write a short description: &nbsp; </p><textarea cols="60" rows="8" name="desc" style="margin-left: 0px; float: left; margin-top:10px; border: 1px solid #ccc; border-radius: 4px;" required="required"></textarea>
			</div>
			<div class="right">
				Select cover photo: &nbsp; <input type="file" name="file1"  class="u" required="required" accept="image/*"><br>
				<p style="margin-top: 30px;">Select photos of the property:</p> <br>
				<input type="file" name="file2"  class="u" style="margin-top: 0px;" required="required" accept="image/*"><br>
				<input type="file" name="file3"  class="u" required="required" accept="image/*"><br>
				<input type="file" name="file4"  class="u" required="required" accept="image/*"><br>
				<input type="file" name="file5"  class="u" required="required" accept="image/*"><br>
				<input type="file" name="file6"  class="u" required="required" accept="image/*"><br>
				
				<input type="submit" name="add" value="Add property" class="ebtn">
				<?php echo "<input type='hidden' name='u_id' value='".$uid."'>" ?>

			</div> 
			<div style="margin-top: 15px; border: 1px solid #ccc; padding: 10px; font-size: 12px; border-radius: 4px; float: left; height: 150px; color: gray;" ><h4>Instructions</h4><br>
				<p style="margin-top: 6px;">*images must have white background<p></div>

		</form>
		<form method="POST" action="aproperty.php"><input type="submit" name="cancel" value="Cancel" class="dbtn"></form>
	</div>
</body>
</html>
<?php } ?>