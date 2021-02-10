<?php

			extract($_POST); 
			if (isset($cancel)) {
				header("Location:sellerprofile.php");
			}
			require 'dbh.php';
			$sql5="SELECT * FROM property where name='$name';";
			$re = mysqli_query($conn, $sql5);
			$resultcheck = mysqli_num_rows($re);
			if ($resultcheck > 0) {
				echo "<p>Cannot add property already exists in the system. Go <a href='sellerprofile.php'>Back</a></p>";
			}
			else{
				if (isset($add)) {
				



				$file1= $_FILES['file1'];
				$filename1= $_FILES['file1']['name'];
				$filetemp1= $_FILES['file1']['tmp_name'];
				$filesize1= $_FILES['file1']['size'];
				$fileerror1= $_FILES['file1']['error'];

				$fileExt1=explode('.', $filename1);
				$fileactualext1= strtolower(end($fileExt1));

				$allowed= array('jpg', 'jpeg', 'png', 'jfif');

				if (in_array($fileactualext1, $allowed)) {
					if ($fileerror1==0) {
						if ($filesize1 < 50000000) {
							$filenamenew1 = uniqid('',true).".".$fileactualext1;
							$filedestination1 = 'uploads/'.$filenamenew1;
							move_uploaded_file($filetemp1, $filedestination1);
							require 'dbh.php';
							$s = "INSERT INTO property (bedroom, bathroom, hall, kitchen, garage, price, type, area, description, city, u_id, income,name,bldg,road) VALUES('$bedroom', '$bathroom', '$hall', '$kitchen', '$garage', '$price', '$type', '$area', '$desc', '$city', '$u_id', '$income','$name','$bldg','$road');";
							$r = mysqli_query($conn,$s); 
							$pid= $conn->insert_id;

								$sql = "UPDATE city SET properties=properties+1 WHERE city='$city';";
								$e = mysqli_query($conn,$sql);
							


							$sqlimg= "INSERT INTO pcoverimage(p_id, picname) VALUES('$pid', '$filenamenew1')";
							$result= mysqli_query($conn, $sqlimg);
							
							

							
						}
						else{
							die("Image is too big property not added <a href='addproperty.php'>tryagain!</a>");
						}
					}
					else{
							die("Error uploading your images <a href='addproperty.php'>tryagain</a>");
				
					}
			
				}
				else{
					
					die("Please select an image <a href='addproperty.php'>tryagain</a>");
					
			

				}

				for ($i=2; $i < 7; $i++) { 
					$file= $_FILES['file'.$i.''];
					$filename= $_FILES['file'.$i.'']['name'];
					$filetemp= $_FILES['file'.$i.'']['tmp_name'];
					$filesize= $_FILES['file'.$i.'']['size'];
					$fileerror= $_FILES['file'.$i.'']['error'];

				$fileExt=explode('.', $filename);
				$fileactualext= strtolower(end($fileExt));

				$allowed= array('jpg', 'jpeg', 'png', 'jfif');

				if (in_array($fileactualext, $allowed)) {
					if ($fileerror==0) {
						if ($filesize < 50000000) {
							$filenamenew = uniqid('',true).".".$fileactualext;
							$filedestination = 'uploads/'.$filenamenew;
							move_uploaded_file($filetemp, $filedestination);



							$sqlimg= "INSERT INTO pimage(p_id, picname) VALUES('$pid', '$filenamenew')";
							$result= mysqli_query($conn, $sqlimg);
							

							
						}
						else{
							require 'dbh.php';
							$qw="DELETE FROM property WHERE p_id='$pid';";
							$rt = mysqli_query($conn, $qw);
							die("Image is too big product not added <a href='addproduct.php'>tryagain!</a>");
						}
					}
					else{
						require 'dbh.php';
						$qw="DELETE FROM property WHERE p_id='$pid';";
						$rt = mysqli_query($conn, $qw);

					
							die("Error uploading your images <a href='addproduct.php'>tryagain</a>");
				
					}
			
				}
				else{	
					require 'dbh.php';
					$qw="DELETE FROM property WHERE p_id='$pid';";
					$rt = mysqli_query($conn, $qw);
					
					die("Please select an image <a href='addproduct.php'>tryagain</a>");
			

				}
					
				}

				header("Location:sellerprofile.php");

		}
			}
			
			

