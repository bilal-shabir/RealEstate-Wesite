<?php
session_start();
$lid = intval($_GET['propertyid']);
require 'dbh.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Homes Template">
    <meta name="keywords" content="Homes, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Single Property Page</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <style type="text/css">
    	.sb{
    		background-color: #8AD144;
    		text-decoration: none;
    		border-color: #8AD144;
    		color: white;
    		margin-left: 550px;
    	}
    	.sb:hover{
    		color: white;
    		background-color: #00b300;
    		border-color: #00b300;
    	}

    </style>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Header Section Begin -->
        <header class="header-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo">
                        <a href="./index.php">
                            <h3 style="color: white">Sanad Real Estate</h3>
                        </a>
                    </div>
                    <ul class="main-menu">
                        <li><a href="./index.php" class="navlink">Home</a></li>
                        <li><a href="./blog.html" class="navlink">About Us</a></li>
                        <li><a href="./contact.html" class="navlink">Contact</a></li>
                                    <?php if (isset($_SESSION['username'])){
                                                include_once 'dbh.php';
                                                $username = $_SESSION['username'];
                                                $sql= "SELECT * FROM users WHERE username='$username';";
                                                $result = mysqli_query($conn ,$sql);
                                                $row = mysqli_fetch_assoc($result);
                                                $type= $row['type'];
                                                if ($type=="customer") {
                                                     echo "<li><a href='userprofile.php' class='navlink'>";
                                                 }
                                                else{
                                                    echo "<li><a href='sellerprofile.php' class='navlink'>";

                                                    }
            
                                                echo "Profile</a></li>";

                                                }
                                            else{
                                                echo "<li><a href='login.php' class='navlink'>";
                                                echo "Login";
                                                echo "</a></li>";
                                                }?>
                    </ul>
                    <div id="mobile-menu-wrap"></div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
    <!-- Hero Section Begin -->
    <section class="hero-section set-bg single-property-r" data-setbg="img/bg.jpg">
    </section>
    <!-- Hero Section End -->
    <!-- Filter Search Section Begin -->
 <div class="filter-search">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">
                    <form class="filter-form" method="POST" action="search.php">
                        <div class="location">
                            <p>Location</p>
                            <select class="filter-location" name="city" >
                                
                                <?php 
                                require 'dbh.php';
                                $sql3 = "SELECT * FROM city;";
                                $result3 = mysqli_query($conn, $sql3);
                                while ($row3 = mysqli_fetch_assoc($result3)) { ?>
                                    <option value="<?php echo $row3['city']; ?>"><?php echo $row3['city']; ?></option>
                                <?php }
                                ?>
                            </select>
                        </div>
                        <div class="search-type">
                            <p>Property Type</p>
                            <select class="filter-property" name="type">
                                <option value="house">House</option>
                                <option value="appartment">Appartment</option>
                                <option value="villa">Villa</option>
                            </select>
                        </div>
                        <div class="price-range">
                            <p style="margin-bottom: 15px;">Max Price</p>
                            <div>
                                <input type="number" name="price" min="0" style="width: 150px; border-radius: 5px; border:1px solid #ccc;" required="required">
                            </div>
                        </div>
                        <div class="bedrooms">
                            <p>Bedrooms</p>
                            <div class="room-filter-pagi">
                                <div class="bf-item">
                                    <input type="radio" name="bedroom" id="room-1" value="1">
                                    <label for="room-1">1</label>
                                </div>
                                <div class="bf-item">
                                    <input type="radio" name="bedroom" id="room-2" value="2">
                                    <label for="room-2">2</label>
                                </div>
                                <div class="bf-item">
                                    <input type="radio" name="bedroom" id="room-3" value="3">
                                    <label for="room-3">3</label>
                                </div>
                                <div class="bf-item">
                                    <input type="radio" name="bedroom" id="room-4" value="4">
                                    <label for="room-4">4+</label>
                                </div>
                            </div>
                        </div>
                        <div class="bathrooms">
                            <p>Bathrooms</p>
                            <div class="room-filter-pagi">
                                <div class="bf-item">
                                    <input type="radio" name="bathroom" id="bathroom-1" value="1">
                                    <label for="bathroom-1">1</label>
                                </div>
                                <div class="bf-item">
                                    <input type="radio" name="bathroom" id="bathroom-2" value="2">
                                    <label for="bathroom-2">2</label>
                                </div>
                                <div class="bf-item">
                                    <input type="radio" name="bathroom" id="bathroom-3" value="3">
                                    <label for="bathroom-3">3</label>
                                </div>
                                <div class="bf-item">
                                    <input type="radio" name="bathroom" id="bathroom-4" value="4">
                                    <label for="bathroom-4">4+</label>
                                </div>
                            </div>
                        </div>
                        <div class="search-btn">
                            <button type="submit"><i class="flaticon-search"></i>Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Filter Search Section End -->
    <!-- Single Property Section Begin -->
    <div class="single-property">
        <div class="container">
            <div class="row spad-p">
                <div class="col-lg-12">
                    <div class="property-title">
                    	<?php 
                    	$sql="SELECT * FROM property where p_id='$lid';";
                    	$result = mysqli_query($conn, $sql);
                    	$row= mysqli_fetch_assoc($result);
                    	?>
                        <h3><?php echo $row['description']; ?></h3>
                        <a href="#"><i class="fa flaticon-placeholder"></i><?php echo $row['city']; ?>, Road: <?php echo $row['road']; ?>, Bldg: <?php echo $row['bldg']; ?></a>
                    </div>
                    <div class="property-price">
                        <p>For <?php echo $row['income']; ?></p>
                        <span><?php echo $row['price']; ?> BD</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                	<?php 
                		$sql2="SELECT * FROM pcoverimage where p_id='$lid';";
                    	$result2 = mysqli_query($conn, $sql2);
                    	$row2= mysqli_fetch_assoc($result2);

                    	$sql3="SELECT * FROM pimage where p_id='$lid';";
                    	$result3 = mysqli_query($conn, $sql3);
                    	
                    	?>
                    <div class="property-img owl-carousel">
                        <div class="single-img">
                            <img src="uploads/<?php echo $row2['picname']; ?>" alt="">
                        </div>
                        <?php 
                        	while ($row3= mysqli_fetch_assoc($result3)) { ?>
                        <div class="single-img">
                            <img src="uploads/<?php echo $row3['picname']; ?>" alt="">
                        </div>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Single Property End -->
    <!-- Single Property Deatails Section Begin -->
    <section class="property-details">
        <div class="container">
            <div class="row sp-40 spt-40">
                <div class="col-lg-8">
                    <div class="p-ins">
                        <div class="row details-top">
                            <div class="col-lg-12">
                                <div class="t-details">
                                    <div class="popular-room-features single-property" style="margin-right: 380px;">
                                        <div class="size">
                                            <p>Lot Size</p>
                                            <img src="img/rooms/size.png" alt="">
                                            <i class="flaticon-bath"></i>
                                            <span><?php echo $row['area']; ?> sqft</span>
                                        </div>
                                        <div class="beds">
                                            <p>Beds</p>
                                            <img src="img/rooms/bed.png" alt="">
                                            <span><?php echo $row['bedroom']; ?></span>
                                        </div>
                                        <div class="baths">
                                            <p>Baths</p>
                                            <img src="img/rooms/bath.png" alt="">
                                            <span><?php echo $row['bathroom']; ?></span>
                                        </div>
                                        <div class="garage">
                                            <p>Garage</p>
                                            <img src="img/rooms/garage.png" alt="">
                                            <span><?php echo $row['garage']; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                
                                <div class="property-features">


                                	<?php 
                                        $sql7="SELECT * FROM sales where pid='$lid';";
                                        $result7 = mysqli_query($conn, $sql7);
                                        $resultcheck2 = mysqli_num_rows($result7);

                                        if ($resultcheck2>0) {
                                            echo "<h4>This Property is Sold!</h4>";
                                        }
                                        else{
                                            $sql6 = "SELECT * FROM reservation where p_id='$lid';";
                                        $result6= mysqli_query($conn, $sql6);
                                        $resultcheck= mysqli_num_rows($result6);
                                        if($resultcheck>0){
                                            echo "<h4>This Property is already reserved!</h4>";
                                        }
                                        else{


                                        if (isset($_SESSION['username'])) {
                                            $un = $_SESSION['username'];
                                            $sql5="SELECT * FROM users where username='$un';";
                                            $result5=mysqli_query($conn, $sql5);
                                            $row5=mysqli_fetch_assoc($result5);
                                            if ($row5['type'] != 'customer') { ?>
                                                    <h5>Please <a href="login.php">Login</a> as a customer to reserve</h5>
                                            <?php }
                                            else{
                                                ?>
                                                <a href="reserve.php?propertyid=<?php echo $lid; ?>" class="site-btn list-btn sb">Reserve</a>
                                                
                                            <?php }
                                            
                                            
                                        }
                                    
                                    else{ ?>
                                    <h4>Please <a href="login.php">Login</a> to reserve</h4>
                                    <?php } 

                                }
                                        }
?>

                                		
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row pb-30">
                        <div class="col-lg-12">
                            <div class="contact-service">
                            	<?php
                            		$uid = $row['u_id'];
                            		$sql4 = "SELECT * FROM users WHERE u_id='$uid';";
                            		$result4=mysqli_query($conn, $sql4);
                            		$row4=mysqli_fetch_assoc($result4);
                            	 ?>
                                <p>Listed by</p>
                                <h5><?php echo $row4['fullname']; ?></h5>
                                <table>

                                    <tr>
                                        <td>Mobile : <span><?php echo $row4['number']; ?></span></td>
                                    </tr>
                                
                                    <tr>
                                        <td>WhatsApp : <span><?php echo $row4['number']; ?></span></td>
                                    </tr>
                                    <tr>
                                        <td>Email : <span><?php echo $row4['email']; ?></span></td>
                                    </tr>
                                </table>
                                <a href="agentlisting.php?agentid=<?php echo $uid; ?>" class="site-btn list-btn">View More Listings</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Single Property Deatails Section End -->
    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <!-- Rooms Pic Section Begin-->
        <div class="room-pic">
            <div class="container-fluid">
                <div class="row sp-40">
                    <img src="img/room-pic/1.jpg" alt="">
                    <img src="img/room-pic/2.jpg" alt="">
                    <img src="img/room-pic/3.jpg" alt="">
                    <img src="img/room-pic/4.jpg" alt="">
                    <img src="img/room-pic/5.jpg" alt="">
                </div>
            </div>
        </div>
        <!-- Rooms Pic Section End -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center sp-60">
                    <h4 style="color: white;">Sanad Real Estate</h4>
                </div>
            </div>
            <div class="row p-37" style="margin-left: 200px;">
                <div class="col-lg-4">
                    <div class="about-footer">
                        <h5>About Sanad Real Estate</h5>
                        <p>Sanad Real Estate is a local real estate company located at the heart of bahrain(manama).</p>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" style="margin-left: 200px;">
                    <div class="footer-address">
                        <h5>Get In Touch</h5>
                        <ul>
                            <li><i class="flaticon-placeholder"></i><span>Road:1567 shop:567 manama, Bahrain</span>
                            </li>
                            <li><i class="flaticon-envelope"></i><span>sanadrealestate@gmail.com</span></li>
                            <li><i class="flaticon-smartphone"></i><span>17896354</span></li>
                        </ul>
                        <p>Sunday – Thursday: 9 am – 5 pm</p>
                        <p>Saturday: 9 am – 1pm</p>
                    </div>
                </div>
            </div>

            <div class="row p-20">
                <div class="col-lg-12 text-center">
                    <div class="copyright">
                        

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
