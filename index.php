
<?php 
    session_start();
    unset($_SESSION['loginError']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Homes Template">
    <meta name="keywords" content="Homes, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sanad Real Estate -home</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <style type="text/css">
        .navlink:hover{
            transform: scale(1.2);
            transition: 0.3s;
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
    <section class="hero-section home-page set-bg" data-setbg="img/bg.jpg">
        <div class="container hero-text text-white">
            <h2>Find your next</h2>
            <h1>dream home.</h1>
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
    <!-- Hotel Room Section Begin -->
    <section class="hotel-rooms spad">
        <div class="container">
            <div class="row">
                <?php 
                require 'dbh.php';
                $sql = "SELECT * FROM property ORDER BY p_id DESC;";
                $result = mysqli_query($conn ,$sql);
                for ($i=0; $i <6 ; $i++) { 
                    $row = mysqli_fetch_assoc($result);
                    $pid = $row['p_id'];
                    $sql2 = "SELECT * FROM pcoverimage where p_id='$pid';";
                    $result2 = mysqli_query($conn, $sql2);
                    $r = mysqli_fetch_assoc($result2);
                ?>
                <div class="col-lg-4 col-md-6">
                    <div class="room-items">
                        <div class="room-img set-bg" data-setbg="uploads/<?php echo $r['picname'] ?>">
                        </div>
                        <div class="room-text">
                            <div class="room-details">
                                <div class="room-title">
                                    <h5><?php echo $row['description']; ?></h5>
                                </div>
                            </div>
                            <div class="room-features">
                                <div class="room-info">
                                    <div class="size">
                                        <p>Lot Size</p>
                                        <img src="img/rooms/size.png" alt="">
                                        <i class="flaticon-bath"></i>
                                        <span><?php echo "".$row['area']." sqft"; ?></span>
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
                            <div class="room-price">
                                <p>For <?php echo $row['income']; ?></p>
                                <span><?php echo "BD ".$row['price']; ?></span>
                            </div>
                            <a href="single-property.php?propertyid=<?php echo $row['p_id']; ?>" class="site-btn btn-line">View Property</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
    </section>
    <!-- Hotel Room Section End -->
    
    <!-- Servies Section Begin -->
    <section class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-side">
                        <h2><span>Why choose Sanad Real Estate?</span><br>Because we we are the best in <br>the business.</h2>
                        <p>We provide quality services with the best property prices in Bahrain. Our agents are highly educated and well informed in the Real Estate buisness.We work with you (and your advisors) to create a real estate strategy which defends and optimises the value of an individual property or a wider portfolio.We find the right property for you. You can engage us to deliver only individual stages of a search or, if preferred, we can provide a complete “end to end” search and acquisition service. </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-side">
                        <ul>
                            <li><img src="img/check.png" alt="">Quality Services.
                            </li>
                            <li><img src="img/check.png" alt="">Qualified Agents.</li>
                            <li><img src="img/check.png" alt="">Best Prices in town.</li>
                            <li><img src="img/check.png" alt="">Special packages for each customer.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Servies Section End -->
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