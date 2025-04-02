<?php
session_start();
error_reporting(0);
include('includes/config.php');
// Code user Registration
if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$contactno=$_POST['contactno'];
$password=md5($_POST['password']);
$query=mysqli_query($con,"insert into users(name,email,contactno,password) values('$name','$email','$contactno','$password')");
if($query)
{
	echo "<script>alert('You are successfully register');</script>";
}
else{
echo "<script>alert('Not register something went worng');</script>";
}
}
// Code for User login
if(isset($_POST['login']))
{
   $email=$_POST['email'];
   $password=md5($_POST['password']);
$query=mysqli_query($con,"SELECT * FROM users WHERE email='$email' and password='$password'");
$num=mysqli_fetch_array($query);
if($num>0)
{
$extra="my-cart.php";
$_SESSION['login']=$_POST['email'];
$_SESSION['id']=$num['id'];
$_SESSION['username']=$num['name'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=1;
$log=mysqli_query($con,"insert into userlog(userEmail,userip,status) values('".$_SESSION['login']."','$uip','$status')");
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
$extra="login.php";
$email=$_POST['email'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=0;
$log=mysqli_query($con,"insert into userlog(userEmail,userip,status) values('$email','$uip','$status')");
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
$_SESSION['errmsg']="Invalid email id or Password";
exit();
}
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Try Ones</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="">

  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700%7COpen+Sans:400,400i,600,700' rel='stylesheet'>

  <!-- Css -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/magnific-popup.css" />
  <link rel="stylesheet" href="css/font-icons.css" />
  <link rel="stylesheet" href="css/sliders.css" />
  <link rel="stylesheet" href="css/style.min.css" />

  <!-- Favicons -->
  <link rel="shortcut icon" href="img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" href="img/apple-touch-icon.html">
  <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

  <style>
    .social-icon {
      position: fixed;
      bottom: 100px;
      right: 40px;
      display: flex;
      flex-direction: column;
      gap: 10px;
      z-index: 100;
    }

    .instagram-icon,
    .whatsapp-icon,
    .linkedin-icon,
    .facebook-icon,
    .twitter-icon {
      padding: 10px;
      border-radius: 50%;
      width: 50px;
      height: 50px;
      display: flex;
      justify-content: center;
      align-items: center;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease-in-out;
    }

    .instagram-icon:hover,
    .whatsapp-icon:hover,
    .linkedin-icon:hover,
    .facebook-icon:hover,
    .twitter-icon:hover {
      transform: scale(1.1);
    }

    /* Ensuring icons are visible and properly sized */
    .instagram-icon i,
    .whatsapp-icon i,
    .linkedin-icon i,
    .facebook-icon i,
    .twitter-icon i {
      color: white;
      font-size: 24px;
    }


    .instagram-icon {
      background-color: #e4405f;
    }

    .whatsapp-icon {
      background-color: #25d366;
    }

    .linkedin-icon {
      background-color: #0077b5;
    }

    .facebook-icon {
      background-color: #1877f2;
    }


    .twitter-icon {
      background-color: #000;
    }
  </style>

</head>

<body class="relative">

  <!-- Preloader -->
  <div class="loader-mask">
    <div class="loader">
      <div></div>
      <div></div>
    </div>
  </div>

  <main class="main-wrapper">

    <header class="nav-type-1">

      <!-- Fullscreen search -->
      <div class="search-wrap">
        <div class="search-inner">
          <div class="search-cell">
            <form method="get">
              <div class="search-field-holder">
                <input type="search" class="form-control main-search-input" placeholder="Search for">
                <i class="ui-close search-close" id="search-close"></i>
              </div>
            </form>
          </div>
        </div>
      </div> <!-- end fullscreen search -->

      <!-- Top Bar -->
      <div class="top-bar hidden-xs">
        <div class="container">
          <div class="top-bar-links flex-parent">
            <ul class="top-bar-currency-language">
              <li>
                Currency: <a href="#">USD<i class="fa fa-angle-down"></i></a>
                <div class="currency-dropdown">
                  <ul>
                    <li><a href="#">USD</a></li>
                    <li><a href="#">EUR</a></li>
                  </ul>
                </div>
              </li>
              <li class="language">
                Language: <a href="#">ENG<i class="fa fa-angle-down"></i></a>
                <div class="language-dropdown">
                  <ul>
                    <li><a href="#">English</a></li>
                    <li><a href="#">Spanish</a></li>
                    <li><a href="#">German</a></li>
                    <li><a href="#">Chinese</a></li>
                  </ul>
                </div>
              </li>
            </ul>

            <ul class="top-bar-acc">
              <li class="top-bar-link"><a href="#">My Wishlist</a></li>
              <li class="top-bar-link"><a href="#">Newsletter</a></li>
              <li class="top-bar-link"><a href="login.php">Login</a></li>
            </ul>

          </div>
        </div>
      </div> <!-- end top bar -->

      <nav class="navbar navbar-static-top">
        <div class="navigation">
          <div class="container relative">

            <div class="row flex-parent">

              <div class="navbar-header flex-child">
                <!-- Logo -->
                <div class="logo-container">
                  <div class="logo-wrap">
                    <a href="index.php">
                      <img class="logo-dark" width="200" height="150" src="img/logo_dark.png"
                        srcset="img/logo_dark.png 1x, img/logo_dark.png 2x" alt="logo">
                    </a>
                  </div>
                </div>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <!-- Mobile cart -->
                <div class="nav-cart mobile-cart hidden-lg hidden-md">
                  <div class="nav-cart-outer">
                    <div class="nav-cart-inner">
                      <a href="#" class="nav-cart-icon">
                        <span class="nav-cart-badge">2</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div> <!-- end navbar-header -->

              <div class="nav-wrap flex-child">
                <div class="collapse navbar-collapse text-center" id="navbar-collapse">

                  <ul class="nav navbar-nav">

                    <li class="dropdown">
                      <a href="#">Try Ones Young</a>
                      <i class="fa fa-angle-down dropdown-trigger"></i>
                      <ul class="dropdown-menu">
                        <li><a href="viewall.php">View all</a></li>
                        <li><a href="afreen.php">Afreen</a></li>
                        <li><a href="gaon-ki-gori.php">Gaon Ki Gori</a></li>
                        <li><a href="jeans-jhumka.php">Jeans & Jhumkha</a></li>
                      </ul>
                    </li>

                    <li><a href="timeless.php">Try Ones Timeless</a></li>

                    <li class="dropdown">
                      <a href="#">Shop By Category</a>
                      <i class="fa fa-angle-down dropdown-trigger"></i>
                      <ul class="dropdown-menu">
                        <li><a href="best-sellers.php">Best Sellers</a></li>
                        <li><a href="new-arrival.php">New Arrival</a></li>
                        <li class="dropdown">
                      <a href="#">Kurtis</a>
                      <i class="fa fa-angle-down dropdown-trigger"></i>
                      <ul class="dropdown-menu">
                        <li><a href="short-kurti.php">Short Kurti</a></li>
                        <li><a href="long-kurti.php">Long Kurti</a></li>
                      </ul>
                    </li>                        
                        <li><a href="tops.php">Tops</a></li>
                        <li><a href="dresses.php">Dresses</a></li>
                      </ul>
                    </li>

                    <li><a href="corset-kurti.php">Corset Kurti</a></li>
                    <li><a href="noodle-strap-kurti.php">Noodle Strap Kurtis</a></li>
                    <li><a href="about-us.php">About Us</a></li>
                    
                    <li class="dropdown">
                      <a href="#">Contact Us</a>
                      <i class="fa fa-angle-down dropdown-trigger"></i>
                      <ul class="dropdown-menu">
                        <li><a href="franchise-with-us.php">Franchise With Us</a></li>
                        <li><a href="faq.php">FAQ's</a></li>
                      </ul>
                    </li> <!-- end elements -->

                    <li class="mobile-links hidden-lg hidden-md">
                      <a href="login.php">My Account</a>
                    </li>

                    <!-- Mobile search -->
                    <li id="mobile-search" class="hidden-lg hidden-md">
                      <form method="get" class="mobile-search">
                        <input type="search" class="form-control" placeholder="Search...">
                        <button type="submit" class="search-button">
                          <i class="fa fa-search"></i>
                        </button>
                      </form>
                    </li>

                  </ul> <!-- end menu -->
                </div> <!-- end collapse -->
              </div> <!-- end col -->

              <div class="flex-child flex-right nav-right hidden-sm hidden-xs">
                <ul>
                  <li class="nav-register">
                    <a href="#">My Account</a>
                  </li>
                  <li class="nav-search-wrap style-2 hidden-sm hidden-xs">
                    <a href="#" class="nav-search search-trigger">
                      <i class="fa fa-search"></i>
                    </a>
                  </li>
                  <li class="nav-cart">
                    <div class="nav-cart-outer">
                      <div class="nav-cart-inner">
                        <a href="#" class="nav-cart-icon">
                          0
                        </a>
                      </div>
                    </div>
                    <div class="nav-cart-container">
                      <div class="nav-cart-items">

                        <div class="nav-cart-item clearfix">
                          <div class="nav-cart-img">
                            <a href="#">
                              <img src="img/shop/shop_item_1.jpg" alt="">
                            </a>
                          </div>
                          <div class="nav-cart-title">
                            <a href="#">
                              Ladies Bag
                            </a>
                            <div class="nav-cart-price">
                              <span>1 x</span>
                              <span>1250.00</span>
                            </div>
                          </div>
                          <div class="nav-cart-remove">
                            <a href="#" class="remove"><i class="ui-close"></i></a>
                          </div>
                        </div>

                        <div class="nav-cart-item clearfix">
                          <div class="nav-cart-img">
                            <a href="#">
                              <img src="img/shop/shop_item_2.jpg" alt="">
                            </a>
                          </div>
                          <div class="nav-cart-title">
                            <a href="#">
                              Sequin Suit longer title
                            </a>
                            <div class="nav-cart-price">
                              <span>1 x</span>
                              <span>1250.00</span>
                            </div>
                          </div>
                          <div class="nav-cart-remove">
                            <a href="#" class="remove"><i class="ui-close"></i></a>
                          </div>
                        </div>

                      </div> <!-- end cart items -->

                      <div class="nav-cart-summary">
                        <span>Cart Subtotal</span>
                        <span class="total-price">$1799.00</span>
                      </div>

                      <div class="nav-cart-actions mt-20">
                        <a href="shop-cart.php" class="btn btn-md btn-dark"><span>View Cart</span></a>
                        <a href="shop-checkout.php" class="btn btn-md btn-color mt-10"><span>Proceed to
                            Checkout</span></a>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>

            </div> <!-- end row -->
          </div> <!-- end container -->
        </div> <!-- end navigation -->
      </nav> <!-- end navbar -->
    </header>