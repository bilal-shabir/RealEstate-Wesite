<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>

	<title>Register</title>
	<style>
		*{
			margin:0;
			padding:0;
		}
		body{
			font-family: Candara;
		}
	
		h1{
			width: 30px;
			margin-left: 45%;
			margin-top: 27px;
		}
		h1> a{
			text-decoration: none;
			color: #000;
		}
		.wrap{
			margin:20px auto;
			width: 390px;
			height: 680px;
			border: 1px solid #ddd;
			border-radius: 4px;

		}
		form >p{
			font-size: 12px;
			margin-top: 17px;
			margin-left: 28px;
		
		}
		.psw,.un{
			width: 330px;
			height: 27px;
			margin-top: 3px;
			margin-left: 28px;
			border-radius: 4px;
			border:1px solid #a6a6a6;
		}
		.fn,.em{
			width: 330px;
			height: 27px;
			margin-top: 3px;
			margin-left: 0px;
			border-radius: 4px;
			border:1px solid #a6a6a6;
		
		}
		h2{
			margin-top: 14px;
			margin-left: 28px;

		}
		.cpsw{
			border-radius: 4px;
			width: 330px;
			height: 27px;
			margin-top: 3px;
			margin-left: 28px;
			border:1px solid #a6a6a6;
		}
		.submit{
			margin-top: 15px;
			height: 27px;
			border-radius: 4px;
			border:1px solid #3399ff;
			background-color: #3399ff;
			width: 330px;
			margin-left: 28px;


		}
		.link{
			margin-top: 15px;
			margin-left: 28px;
			font-size: 15px;
		}
		p> a{
			text-decoration: none;
			color: blue;
		}
		p{
			font-size: 14px;
			margin-top: 17px;
			margin-left: 28px;

		}
		.un:focus{
			border-color: orange;
		}
		.psw:focus{
			border-color: orange;
		}
		.cpsw:focus{
			border-color: orange;
		}
		.submit:hover{
			background-color: #1a47f5;
			cursor: pointer;
		}


	</style>
</head>
<body>


	<h2 style="margin-top: 27px; margin-left: 41.5%; margin-top: 27px;"><a href="index.php" style=";text-decoration: none;color: #3133ce;">SANAD REAL ESTATE</a></h2>
	<div id='w' class="wrap" style="z-index: -1;">
		<form method="POST" action="a_employee.php">
		<h2>Register employee</h2>
		<div id="error_msg" style="text-align:center;color:red;z-index: 100;position: absolute;float: left;font-size: 13px;margin-left: 28px;"></div>
			
			<p><b>Employee name</b>
			<input type='text' onKeyUp="name_validity(this.value)" id="fn" name='fn' required='required' class='fn' ></p> 
		<p><b>Employee E-mail address</b><input type="text" id='em' onKeyUp="em_validity(this.value)" name="em" required="required" class="em"></p>
		<?php if (isset($_SESSION['uerror'])) {
			echo "<div style='z-index:-1;position:absolute;'><p style='color: red; margin-top: 3px;font-size:12px' ><b>*Username not available</b></p></div>";
			?><p><b>Employee username</b></p><input type='text' id='un' onKeyUp="usern_validity(this.value)" name='un' required='required' class='un' style='border-color:red;'><?php
			unset($_SESSION['uerror']);
		}
		else{
			?><p><b>Employee username</b></p><input type='text' id='un' onKeyUp="usern_validity(this.value)" name='un' required='required' class='un'><?php
			}
		?>
		<p><b>Job</b><br><select name="job" class="fn"><option value="agent">Agent</option><option>Manager</option></select></p>
		<p><b>Contract untill</b><br><input type="date" name="date" class="fn" required="required"></p>
		<p><b>Salary</b><input type="number" name="salary" class="fn" min="0" required="required"></p>
		<?php if (isset($_SESSION['perror'])) {
			echo "<div style='z-index:-1;position:absolute;'><p style='color: red; margin-top: 3px;font-size:12px;' ><b>*Passwords do not match</b></p></div>";
			?><p><b>Password</b></p><input type='password' onKeyUp='pass_validity(this.value)' id='ps' name='psw' required='required' class='psw' style='border-color:red;'>

			<p><b>Re-enter password</b></p><input type='password' onKeyUp='pass_confirm(this.value)' id='cps' name='cpsw' class='cpsw' style='border-color:red;'><?php
			unset($_SESSION['perror']);
		} 
		else {
		?><p><b>Password</b></p><input type='password' onKeyUp='pass_validity(this.value)' id='ps' name='psw' required='required' class='psw'><div style="width: 316px;height: 47px;font-size: 10px;
		border: 1px solid #ccc;padding: 5px;margin-left: 30px;margin-top: 5px;border-radius: 4px;"><ul style="list-style: none;">
			<li>*Password must contain atleast one special character</li>
			<li>*Password must contain atleast one uppercase letter</li>
			<li>*Spaces are not accepted</li>
			<li>*One digit from 0-9</li>
		</ul></div>
		<p><b>Re-enter password</b></p><input type='password'onKeyUp='pass_confirm(this.value)' id='cps' name='cpsw' class='cpsw'><?php
		} ?>
		<input type="submit"  id='reg' name="register" value="Register account" class="submit">
		</form>
		
	</div>
<script language="javascript">

function name_validity(ename){
	
	if (ename.length==0){
		document.getElementById("error_msg").innerHTML="";
		return;
	}
	
	var name_exp= new RegExp(/^[a-zA-Z\s]{1,15}$/);
	
	if (name_exp.test(ename)==false ){
	document.getElementById("error_msg").innerHTML="*Invalid full name.";
	document.getElementById("fn").style="border-color:red";
	document.getElementById("reg").disabled=true;
	} 
	if (name_exp.test(ename)==true )
	{
		document.getElementById("error_msg").innerHTML="";
		document.getElementById("fn").style="border-color:#33ff33";
		document.getElementById("reg").disabled=false;





	}
	
	
}

function em_validity(uemail){
	
	if (uemail.length==0){
		document.getElementById("error_msg").innerHTML="";
		return;
	}
	
	var uemail_exp= new RegExp(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/);
	
	if (uemail_exp.test(uemail)==false ){
	document.getElementById("error_msg").innerHTML="*Invalid E-mail.";
	document.getElementById("em").style="border-color:red";
	document.getElementById("reg").disabled=true;
	} else{
		document.getElementById("error_msg").innerHTML="";
		document.getElementById("em").style="border-color:#33ff33";
		document.getElementById("reg").disabled=false;
	}
	
	
}

function usern_validity(uname){
	
	if (uname.length==0){
		document.getElementById("error_msg").innerHTML="";
		return;
	}
	
	var uname_exp= new RegExp(/^[a-zA-Z0-9]{0,20}$/);
	
	if (uname_exp.test(uname)==false ){
	document.getElementById("error_msg").innerHTML="*Invalid username.";
	document.getElementById("un").style="border-color:red";
	document.getElementById("reg").disabled=true;
	} else{
		document.getElementById("error_msg").innerHTML="";
		document.getElementById("un").style="border-color:#33ff33";
		document.getElementById("reg").disabled=false;
		
	}
	
}

function pass_validity(ups){
	
	if (ups.length==0){
		document.getElementById("error_msg").innerHTML="";
		return;
	}
	
	var ups_exp= new RegExp(/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{8,})/);
	
	if (ups_exp.test(ups)==false ){
	
	document.getElementById("error_msg").innerHTML="*Password not strong enough";
	document.getElementById("ps").style="border-color:red";
	document.getElementById("reg").disabled=true;
	} else{
		document.getElementById("error_msg").innerHTML="";
		document.getElementById("ps").style="border-color:#33ff33";
		document.getElementById("reg").disabled=false;
		
	}
	
}

function pass_confirm(cps) {
	
	if (cps.length==0){
		document.getElementById("error_msg").innerHTML="";
		return;
	}
	
	var password = document.getElementById("ps").value;
    var confirmPassword = document.getElementById("cps").value;
	if (password != confirmPassword) {
            document.getElementById("error_msg").innerHTML="Passwords do not match!";
			document.getElementById("cps").style="border-color:red";
            document.getElementById("reg").disabled=true;

        }
		
	else{
		document.getElementById("error_msg").innerHTML="";
		document.getElementById("cps").style="border-color:#33ff33";
        document.getElementById("reg").disabled=false;
		
	}
}


     




</script>
</body>
</html>