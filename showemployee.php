<!DOCTYPE html>
<head>
	<style type="text/css">
		    body{
        height: 100%;
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  font-smoothing: antialiased;
    }
    p{
    	margin-top: 5px;
    	font-size: 14px;
    }
     
	.bbtn{
		padding:3px 5px; 
	text-decoration: none;
 	box-shadow:inset 0px 1px 0px 0px #246bff;
  	background:linear-gradient(to bottom, #246bff 5%, #1c54ff 100%);
  	background-color:#ffca7a;
  	border-radius: 5px;
  	border:1px solid #246bff;
  	cursor:pointer;
  	font-weight:normal;
  	color: #ffffff;
  	font-size: 10px;
	}
	.bbtn:hover{
			background:linear-gradient(to bottom, #1c54ff 5%, #246bff 100%);
  	background-color:#1c54ff;
	}
	.abtn{
		box-shadow: 0px 1px 0px 0px #f0f7fa;
	background:linear-gradient(to bottom, #f55d5d 5%, #d61a1a 100%);
	background-color:#f55d5d;
	border-radius:6px;
	border:1px solid #ff0303;
	cursor:pointer;
	color:#ffffff;
	
	font-size:10px;
	font-weight:normal;
	padding:3px 5px;
	text-decoration:none;
	margin-left: 7px;
	}
	.abtn:hover{
					background:linear-gradient(to bottom, #d61a1a 5%, #f55d5d 100%);
	background-color:#d61a1a;
	}

	</style>
</head>
<body>

	<?php
	  require 'dbh.php';
      $e_id = intval($_GET['q']);
      $sql= "SELECT * FROM employee where id='$e_id';";
      $result= mysqli_query($conn, $sql);
      $row=mysqli_fetch_assoc($result);

      $uid = $row['u_id'];
      $sql2 = "SELECT * FROM users where u_id ='$uid';";
      $result2 = mysqli_query($conn, $sql2);
      $row2 = mysqli_fetch_assoc($result2);


	 ?>
	 <p>Name: <?php echo $row2['fullname']; ?></p>
	 <p>E-mail: <?php echo $row2['email']; ?></p>
	 <?php
	 	if ( $row2['number']==0) {
	 		echo '<p>Contact: Not specified</p>';
	 	}
	 	else{
	 		echo "<p>Contact: ".$row2['number'];
	 	}
	  ?>
	 
	 <p>Job: <?php echo $row['job']; ?></p>
	 <p>Salary: <?php echo $row['salary']; ?> BD</p>
	 <p>Joined: <?php echo $row['joined']; ?> &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; Untill: <?php echo $row['untill']; ?></p>
	 <form method="POST" action="editemployee.php" style="margin-top: 10px;">
	 	<input type="submit" name="edit" value="Edit Information" class="bbtn">
	 	<input type="submit" name="remove" value="Remove Employee" class="abtn" onclick="return confirm('Are you sure you want to remove this employee?')">
	 	<input type="hidden" name="eid" value="<?php echo $e_id; ?>">
	 </form>


</body>
