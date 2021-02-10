<?php 
session_start();
require 'dbh.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Homes Template">
    <meta name="keywords" content="Homes, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agent Lsitings</title>

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
                        <li><a href="./about.html" class="navlink">About Us</a></li>
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
                                                elseif($type=="admin"){
                                                    echo "<li><a href='adminprofile.php' class='navlink'>";

                                                    }
                                                elseif($type=="seller"){
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
    <section class="hero-section set-bg search-result" data-setbg="img/bg.jpg">
        <div class="container hero-text text-white">
            <h2>Agent Listings</h2>
        </div>
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
    <!-- Map Section Begin -->
    <!-- Map Section End -->
    <!-- Hotel Room Section Begin -->
    <section class="hotel-rooms spad-2">
        <div class="container">
            <div class="row">
            <?php

            	$uid = intval($_GET['agentid']);
            	require 'dbh.php';


                $sql2="SELECT * FROM property where u_id='$uid';";
                $result2=mysqli_query($conn, $sql2);
                $resultcheck=mysqli_num_rows($result2);
                
            	if ($resultcheck>0) {
                    # code...
                
            	?>
                <div class="col-lg-12 p-45">
                    <div class="found-items">
                        <h4>This agent has listed <span><?php echo $resultcheck; ?></span> properties</h4>
                </div>

            </div>
        </div>
            <div class="row">
            	<?php 
            		while ($row2= mysqli_fetch_assoc($result2)) { 
            			$pid = $row2['p_id'];
                    	$sql4 = "SELECT * FROM pcoverimage where p_id='$pid';";
                    	$result4 = mysqli_query($conn, $sql4);
                    	$r = mysqli_fetch_assoc($result4);
            			?>
            			<div class="col-lg-4 col-md-4 col-md-6">
                    		<div class="room-items">
                        <div class="room-img set-bg" data-setbg="uploads/<?php echo $r['picname'] ?>">
                            <a href="#" class="room-content">
                                <i class="flaticon-heart"></i>
                            </a>
                        </div>
                        <div class="room-text">
                            <div class="room-details">
                                <div class="room-title">
                                    <h5><?php echo $row2['description']; ?></h5>
                                  
                                </div>
                            </div>
                            <div class="room-features">
                                <div class="room-info">
                                    <div class="size">
                                        <p>Lot Size</p>
                                        <img src="img/rooms/size.png" alt="">
                                        <i class="flaticon-bath"></i>
                                        <span><?php echo $row2['area']; ?></span>
                                    </div>
                                    <div class="beds">
                                        <p>Beds</p>
                                        <img src="img/rooms/bed.png" alt="">
                                        <span><?php echo $row2['bedroom']; ?></span>
                                    </div>
                                    <div class="baths">
                                        <p>Baths</p>
                                        <img src="img/rooms/bath.png" alt="">
                                        <span><?php echo $row2['bathroom']; ?></span>
                                    </div>
                                    <div class="garage">
                                        <p>Garage</p>
                                        <img src="img/rooms/garage.png" alt="">
                                        <span><?php echo $row2['garage']; ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="room-price">
                                <p>For <?php echo $row2['income']; ?></p>
                                <span><?php echo $row2['price']; ?> BD</span>
                            </div>
                            <a href="single-property.php?propertyid=<?php echo $row2['p_id']; ?>" class="site-btn btn-line">View Property</a>
                        </div>
                    		</div>
               			</div>  
            	<?php }
            	?>
                                                     
            </div>
       <?php }
       else{
       	echo "<h4 style='color:#ccc; margin:auto'>No property matches the search filters!<h4>";
       } ?>
         </div>
    </section>
    <!-- Hotel Room Section End -->
    <!-- Footer Section Begin -->
    <footer class="footer-section p-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center sp-60">
                    <img src="img/only-logo.png" alt="">
                </div>
            </div>
            <div class="row p-37">
                <div class="col-lg-4">
                    <div class="about-footer">
                        <h5>About Homes</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eleifend tristique venenatis.
                            Maecenas a rutrum tellus nam vel semper nibh.</p>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer-blog">
                        <h5>Latest Blog Posts</h5>

                        <div class="single-blog">
                            <div class="lt-side">
                                <img src="img/footer-blog-1.jpg" alt="">
                            </div>
                            <div class="rt-side">
                                <h6>How to find the perfect area for<br> your next house.</h6>
                                <div class="blog-time">
                                    <i class="flaticon-clock"></i>
                                    <span>5 min</span>
                                </div>
                                <a href="#" class="read-more">
                                    <i class="flaticon-right-arrow-1"></i>
                                    <span>Read More</span>
                                </a>
                            </div>
                        </div>
                        <div class="single-blog">
                            <div class="lt-side">
                                <img src="img/footer-blog-2.jpg" alt="">
                            </div>
                            <div class="rt-side">
                                <h6>How to find the perfect area for<br> your next house.</h6>
                                <div class="blog-time">
                                    <i class="flaticon-clock"></i>
                                    <span>5 min</span>
                                </div>
                                <a href="#" class="read-more">
                                    <i class="flaticon-right-arrow-1"></i>
                                    <span>Read More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer-address">
                        <h5>Get In Touch</h5>
                        <ul>
                            <li><i class="flaticon-placeholder"></i><span>132 Liberty Streetelit, Plano, Texas</span>
                            </li>
                            <li><i class="flaticon-envelope"></i><span>hello@home.com</span></li>
                            <li><i class="flaticon-smartphone"></i><span>214-805-4428</span></li>
                        </ul>
                        <p>Monday – Friday: 9 am – 5 pm</p>
                        <p>Saturday: 9 am – 1pm</p>
                    </div>
                </div>
            </div>

            <div class="row p-20">
                <div class="col-lg-12 text-center">
                    <div class="copyright">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

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