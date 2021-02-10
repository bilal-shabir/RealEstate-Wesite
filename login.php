<!DOCTYPE html>
<?php session_start();

 ?>

<html>
<head>
	<title>Login or Register</title>
	<?php
	if (isset($_SESSION['loginError'])) {
		echo "	<link rel='stylesheet' type='text/css' href='css/loginstyle2.css'> ";
	}
	else {
		echo "<link rel='stylesheet' type='text/css' href='css/loginstyle.css'>";	}
	
	?>
</head>
<body>
	<div class="container">
		<div class="left-section">
			<div class="header">
				<h1 class="animation a1">Welcome Back!</h1>
				<h4 class="animation a2">Login to see your profile and orders.</h4>
				<p class="animation a7" style="color: red; font-size: 12px;"> <b><?php 
						if (isset($_SESSION['loginError'])) {
							echo "*Inavlid username or password";
						}?></b></p>
			</div>
				<?php
				if (isset($_SESSION['pid'])) {
					extract($_POST);
					$shopid = intval($_GET['shopid']);
					$_SESSION['quantity'] = $quantity;
					$lid = $_SESSION['pid'];
					echo "<form class='form' method='POST' class='form' action='loginverify.php?pid=".$lid."&shopid=".$shopid."'>";
				}
				else{
				?>
				<form class="form" method="POST" class="form" action="loginverify.php">
				<?php } ?>
				<input type="text" name="username" placeholder="Username" class="form-field animation a3">
				<input type="password" name="pass" placeholder="Password" class="form-field animation a4">
				<input type="submit" name="login" class="animation a6 login" value="Login">
				<p class="animation a5" style=" background-color: #2e8afd; border-color:#2e8afd; "><a href="registrationform.php" style="color: white;">Register</a></p>
				</form>
			
		</div>
		<div class="right-section"></div>
	</div>

</body>
</html>