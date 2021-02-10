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
    <title>Manager -home</title>

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
        .bbtn{
            padding: 15px 20px;
            border:1px solid #cc3399;
            border-radius: 6px;
            background-color: #cc3399;
            color: #fff;
            font-weight: normal;
            cursor: pointer;
        }
        .bbtn:hover{
            background-color: #b82e8a;
            border-color: #b82e8a;

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
                        <a href="#">
                            <h3 style="color: white">Sanad Real Estate</h3>
                        </a>
                    </div>
                    <ul class="main-menu">
                        
                                    <?php if (isset($_SESSION['username'])){
                                                include_once 'dbh.php';
                                                
                                                     echo "<li><a href='managerprofile.php' class='navlink'>";
                                                 
                                                
                                                    
            
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
            <h2>Generate Reports</h2>
            <form style="margin-top: 70px;" method="POST" action="report.php">
                <input type="submit" name="employee" style="margin-right: 60px;" class="bbtn" value="Employee Report">
                <input type="submit" name="city" class="bbtn" value="City Report">
                <input type="submit" name="property" style="margin-left: 60px;" class="bbtn" value="Property Report">
            </form>
        </div>
    </section>
    <!-- Footer Section Begin -->
   
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