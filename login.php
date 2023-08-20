<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Login - Gamemate</title>

    <!--css files-->
    <?php include('include/css.php'); ?>

</head>

<body class="home">
<div class="page-wrapper">
    <!-- Start of Header -->
    <header class="header">
        <div class="header-top">
            <div class="container">
                <div class="header-left">
                    <p class="welcome-msg">Welcome to Gamemate Store message!</p>
                </div>
                <div class="header-right">
                    <div class="dropdown">
                        <a href="#currency">USD</a>
                        <div class="dropdown-box">
                            <a href="#USD">USD</a>
                            <a href="#EUR">EUR</a>
                        </div>
                    </div>
                    <!-- End of DropDown Menu -->

                    <div class="dropdown">
                        <a href="#language"><img src="assets/images/flags/eng.png" alt="ENG Flag" width="14"
                                                 height="8" class="dropdown-image"/> ENG
                        </a>
                        <div class="dropdown-box">
                            <a href="#ENG">
                                <img src="assets/images/flags/eng.png" alt="ENG Flag" width="14" height="8"
                                     class="dropdown-image"/>
                                ENG
                            </a>
                            <a href="#FRA">
                                <img src="assets/images/flags/fra.png" alt="FRA Flag" width="14" height="8"
                                     class="dropdown-image"/>
                                FRA
                            </a>
                        </div>
                    </div>
                    <!-- End of Dropdown Menu -->
                    <span class="divider d-lg-show"></span>
                    <a href="#" class="d-lg-show">Blog</a>
                    <a href="#" class="d-lg-show">Become a Vendor</a>
                    <a href="#" class="d-lg-show">About Us</a>
                    <a href="#" class="d-lg-show">
                        <i class="w-icon-exclamation-circle"></i>
                        Need Help
                    </a>
                </div>
            </div>
        </div>
        <!-- End of Header Top -->

        <div class="header-middle">
            <div class="container">
                <div class="header-left mr-md-4">
                    <a href="#" class="mobile-menu-toggle  w-icon-hamburger">
                    </a>
                    <a href="#" class="logo ml-lg-0">
                        <img src="assets/img/logo.png" alt="logo" width="145" height="45"/>
                    </a>
                    <nav class="main-nav">
                        <ul class="menu">
                            <li class="active">
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#">Shop</a>
                            </li>
                            <li>
                                <a href="#">Vendor</a>
                            </li>
                            <li>
                                <a href="#">Blog</a>
                            </li>
                            <li>
                                <a href="#">Pages</a>
                            </li>
                            <li>
                                <a href="#">Elements</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="header-right ml-4">
                    <div class="account align-items-center d-sm-show">
                        <a class="login inline-type d-flex ls-normal" href="#">
                            <i class="w-icon-account d-flex align-items-center justify-content-center br-50"></i>
                            <span class="d-flex flex-column justify-content-center ml-3 d-xl-show">Sign In
                                    <b class="d-block font-weight-bold ls-25">Account</b>
                                </span>
                        </a>
                    </div>
                    <span class="divider mr-6 d-xl-show"></span>
                    <div class="dropdown cart-dropdown cart-offcanvas mr-0 mr-lg-2">
                        <div class="cart-overlay"></div>
                        <a href="#" class="label-down link">
                            <i class="w-icon-cart">
                                <span class="cart-count">2</span>
                            </i>
                            <span class="cart-label">Cart</span>
                        </a>
                        <!-- End of Dropdown Box -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Header Middle -->

        <div class="header-bottom sticky-content fix-top sticky-header has-dropdown">
            <div class="container">
                <div class="inner-wrap">
                    <div class="header-left flex-1">
                        <div class="dropdown category-dropdown show-dropdown" data-visible="true">
                            <a href="#" class="category-toggle text-white" role="button" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="true" data-display="static"
                               title="All Departments">
                                <i class="w-icon-category"></i>
                                <span>All Departments</span>
                            </a>
                            <div class="dropdown-box">
                                <ul class="menu vertical-menu category-menu">
                                    <li>
                                        <a href="#">
                                            <i class="w-icon-electronics"></i>電腦遊戲
                                        </a>
                                        <ul class="megamenu">
                                            <li>
                                                <ul>
                                                    <li><a href="#">英雄聯盟</a></li>
                                                    <li><a href="#"> 聯盟戰棋</a></li>
                                                    <li><a href="#">特戰英豪</a></li>
                                                    <li><a href="#">Apex</a></li>
                                                    <li><a href="#">絕地求生</a></li>
                                                    <li><a href="#">彩虹六號</a></li>
                                                    <li><a href="#"> Among us</a></li>
                                                    <li><a href="#">Call of duty</a></li>
                                                    <li><a href="#">糖豆人</a></li>
                                                    <li><a href="#">Rust</a></li>

                                                </ul>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li><a href="#">Csgo</a></li>
                                                    <li><a href="#">Minecraft</a></li>
                                                    <li><a href="#">Overwatch</a></li>
                                                    <li><a href="#">Fortnite</a></li>
                                                    <li><a href="#">Dead by Daylight</a></li>
                                                    <li><a href="#">魔獸世界</a></li>
                                                    <li><a href="#">爐石戰記</a></li>
                                                    <li><a href="#">GTA 5</a></li>
                                                    <li><a href="#">Super Animal Royale</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="banner-fixed menu-banner menu-banner2">
                                                    <figure>
                                                      <!--  <img src="assets/images/menu/banner-2.jpg" alt="Menu Banner"
                                                             width="235" height="347"/>-->
                                                    </figure>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="w-icon-mobile"></i>手機遊戲
                                        </a>
                                        <ul class="megamenu">
                                            <li>
                                                <ul>
                                                    <li><a href="#">傳說對決</a>
                                                    </li>
                                                    <li><a href="#">激鬥峽谷</a></li>
                                                    <li><a href="#">王者榮耀</a></li>
                                                    <li><a href="#"> 絕地求生</a></li>
                                                    <li><a href="#">極速領域</a></li>
                                                </ul>
                                                <ul>
                                                    <li><a href="#">明日之後</a></li>
                                                    <li><a href="#">荒野行動</a></li>
                                                    <li><a href="#"> 第五人格</a></li>
                                                    <li><a href="#"> 皇室戰爭</a></li>
                                                    <li><a href="#">開心鬥一番</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li><a href="#">跑跑卡丁車</a></li>
                                                    <li><a href="#">Call of duty</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="menu-banner banner-fixed menu-banner3">
                                                    <figure>
                                                      <!--  <img src="assets/images/menu/banner-3.jpg" alt="Menu Banner"
                                                             width="235" height="461"/>-->
                                                    </figure>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="w-icon-electronics"></i>Lorem Ipsum
                                        </a>
                                        <ul class="megamenu">
                                            <li>
                                                <h4 class="menu-title">Lorem Ipsum</h4>
                                                <hr class="divider">
                                                <ul>
                                                    <li><a href="#">Lorem Ipsum</a></li>
                                                    <li><a href="#">Lorem Ipsum</a></li>
                                                    <li><a href="#">Lorem Ipsum</a></li>
                                                    <li><a href="#">Lorem Ipsum</a></li>
                                                    <li><a href="#">Lorem Ipsum</a>
                                                    </li>
                                                </ul>
                                                <h4 class="menu-title mt-1">Lorem Ipsum</h4>
                                                <hr class="divider">
                                                <ul>
                                                    <li><a href="#">Lorem Ipsum</a></li>
                                                    <li><a href="#">Lorem Ipsum</a>
                                                    </li>
                                                    <li><a href="#">Lorem Ipsum</a></li>
                                                    <li><a href="#">Lorem Ipsum</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <h4 class="menu-title">Lorem Ipsum</h4>
                                                <hr class="divider">
                                                <ul>
                                                    <li><a href="#">Lorem Ipsum</a>
                                                    </li>
                                                    <li><a href="#">Lorem Ipsum</a>
                                                    </li>
                                                    <li><a href="#">Lorem Ipsum</a></li>
                                                    <li><a href="#">Lorem Ipsum</a></li>
                                                    <li><a href="#">Lorem Ipsum</a>
                                                    </li>
                                                </ul>
                                                <h4 class="menu-title mt-1">Lorem Ipsum</h4>
                                                <hr class="divider">
                                                <ul>
                                                    <li><a href="#">Lorem Ipsum</a></li>
                                                    <li><a href="#">Lorem Ipsum</a></li>
                                                    <li><a href="#">Lorem Ipsum</a>
                                                    </li>
                                                    <li><a href="#">Lorem Ipsum</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="menu-banner banner-fixed menu-banner4">
                                                    <figure>
                                                        <!--<img src="assets/images/menu/banner-4.jpg" alt="Menu Banner"
                                                             width="235" height="433"/>-->
                                                    </figure>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="w-icon-sofa"></i>Lorem Ipsum
                                        </a>
                                        <ul class="megamenu type2">
                                            <li class="row">
                                                <div class="col-md-3 col-lg-3 col-6">
                                                    <h4 class="menu-title">Lorem Ipsum</h4>
                                                    <hr class="divider"/>
                                                    <ul>
                                                        <li><a href="#">Lorem Ipsum</a>
                                                        </li>
                                                        <li><a href="#">Lorem Ipsum</a></li>
                                                        <li><a href="#">Lorem Ipsum</a></li>
                                                        <li><a href="#">Lorem Ipsum</a></li>
                                                        <li><a href="#">Lorem Ipsum</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-6">
                                                    <h4 class="menu-title">Lorem Ipsum</h4>
                                                    <hr class="divider"/>
                                                    <ul>
                                                        <li><a href="#">Lorem Ipsum</a></li>
                                                        <li><a href="#">Lorem Ipsum</a></li>
                                                        <li><a href="#">Lorem Ipsum</a></li>
                                                        <li><a href="#">Lorem Ipsum</a></li>
                                                        <li><a href="#">Lorem Ipsum</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-6">
                                                    <h4 class="menu-title">Lorem Ipsum</h4>
                                                    <hr class="divider"/>
                                                    <ul>
                                                        <li><a href="#">Lorem Ipsum</a></li>
                                                        <li><a href="#">Lorem Ipsum</a>
                                                        </li>
                                                        <li><a href="#">Lorem Ipsum</a></li>
                                                        <li><a href="#">Lorem Ipsum</a></li>
                                                        <li><a href="#">Lorem Ipsum</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-6">
                                                    <h4 class="menu-title">Lorem Ipsum</h4>
                                                    <hr class="divider"/>
                                                    <ul>
                                                        <li><a href="#">Lorem Ipsum</a>
                                                        </li>
                                                        <li><a href="#">Lorem Ipsum</a></li>
                                                        <li><a href="#">Lorem Ipsum</a>
                                                        </li>
                                                        <li><a href="#">Lorem Ipsum</a>
                                                        </li>
                                                        <li><a href="#">Lorem Ipsum</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="row">
                                                <div class="col-6">
                                                    <div class="banner banner-fixed menu-banner5 br-xs">
                                                        <figure>
                                                         <!--   <img src="assets/images/menu/banner-5.jpg" alt="Banner"
                                                                 width="410" height="123"
                                                                 style="background-color: #D2D2D2;"/>-->
                                                        </figure>
                                                        <div class="banner-content text-right y-50 mt-0">
                                                            <h4 class="banner-subtitle font-weight-normal text-default text-capitalize">
                                                                New Arrivals
                                                            </h4>
                                                            <h3 class="banner-title font-weight-bolder text-capitalize ls-normal">
                                                                Amazing Sofa
                                                            </h3>
                                                            <div class="banner-price-info font-weight-normal ls-normal">
                                                                Starting at <strong>$125.00</strong>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="banner banner-fixed menu-banner5 br-xs">
                                                        <figure>
                                                         <!--   <img src="assets/images/menu/banner-6.jpg" alt="Banner"
                                                                 width="410" height="123"
                                                                 style="background-color: #9F9888;"/>-->
                                                        </figure>
                                                        <div class="banner-content y-50 mt-0">
                                                            <h4 class="banner-subtitle font-weight-normal text-white text-capitalize">
                                                                Best Seller
                                                            </h4>
                                                            <h3 class="banner-title font-weight-bolder text-capitalize text-white ls-normal">
                                                                Chair &amp; Lamp
                                                            </h3>
                                                            <div class="banner-price-info font-weight-normal ls-normal text-white">
                                                                From <strong>$165.00</strong>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="w-icon-toy"></i>Lorem Ipsum
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="w-icon-basketball"></i>Lorem Ipsum
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="w-icon-heartbeat"></i>Lorem Ipsum
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="w-icon-camera"></i>Lorem Ipsum
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="w-icon-furniture"></i>Lorem Ipsum
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="w-icon-kettle"></i>Lorem Ipsum
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="view-all-cats font-weight-bold text-uppercase ls-25">
                                            View All Categories<i class="w-icon-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <form method="get" action="#"
                              class="header-search hs-expanded hs-round bg-white br-xs d-md-flex input-wrapper mr-4 ml-4">
                            <div class="select-box border-no">
                                <select id="category" name="category" class="ls-normal">
                                    <option value="">All Categories</option>
                                    <option value="4">Lorem Ipsum</option>
                                    <option value="5">Lorem Ipsum</option>
                                    <option value="6">Lorem Ipsum</option>
                                    <option value="7">Lorem Ipsum</option>
                                    <option value="8">Lorem Ipsum</option>
                                    <option value="9">Lorem Ipsum</option>
                                    <option value="10">Lorem Ipsum</option>
                                    <option value="11">Lorem Ipsum</option>
                                    <option value="12">Lorem Ipsum</option>
                                </select>
                            </div>
                            <input type="text" class="form-control text-light border-no" name="search" id="search"
                                   placeholder="Search in..." required/>
                            <button class="btn btn-search border-no" type="submit"><i class="w-icon-search"></i>
                            </button>
                        </form>
                    </div>
                    <div class="header-right ml-4">
                        <a href="#" class="d-xl-show"><i class="w-icon-map-marker"></i>Track Order</a>
                        <a href="#"><i class="w-icon-sale"></i>Special Offers</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End of Header -->

    <!-- Start of Main -->
    <main class="main">
        <div class="top-two-section">
            <div class="container pb-10">
                <div class="intro-wrapper mt-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="login-popup">
                                <div class="tab tab-nav-boxed tab-nav-center tab-nav-underline">
                                    <ul class="nav nav-tabs text-uppercase" role="tablist">
                                        <li class="nav-item">
                                            <a href="#sign-in" class="nav-link active">Sign In</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sign-up" class="nav-link">Sign Up</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="sign-in">
                                            <form action="" method="post">
                                                <div class="form-group">
                                                    <label>Username or email address *</label>
                                                    <input type="text" class="form-control" name="username" id="username" required="">
                                                </div>
                                                <div class="form-group mb-0">
                                                    <label>Password *</label>
                                                    <input type="password" class="form-control" name="password" id="password" required="">
                                                </div>
                                                <div class="form-checkbox d-flex align-items-center justify-content-between">
                                                    <input type="checkbox" class="custom-checkbox" id="remember1" name="remember1" required="">
                                                    <label for="remember1">Remember me</label>
                                                    <a href="#">Last your password?</a>
                                                </div>
                                                <button type="submit" name="login" class="btn btn-primary">Sign In</button>
                                            </form>
                                        </div>
                                        <div class="tab-pane" id="sign-up">
                                            <form action="" method="post">
                                                <div class="form-group">
                                                    <label>Your email address *</label>
                                                    <input type="email" class="form-control" name="email" id="email_1" required="">
                                                </div>
                                                <div class="form-group mb-5">
                                                    <label>Password *</label>
                                                    <input type="password" class="form-control" name="password" id="password_1" required="">
                                                </div>
                                                <div class="checkbox-content login-vendor">
                                                    <div class="form-group mb-5">
                                                        <label>First Name *</label>
                                                        <input type="text" class="form-control" name="first-name" id="first-name" required="">
                                                    </div>
                                                    <div class="form-group mb-5">
                                                        <label>Last Name *</label>
                                                        <input type="text" class="form-control" name="last-name" id="last-name" required="">
                                                    </div>
                                                    <div class="form-group mb-5">
                                                        <label>Phone Number *</label>
                                                        <input type="tel" class="form-control" name="phone-number" id="phone-number" required="">
                                                    </div>
                                                </div>
                                                <div class="form-checkbox user-checkbox mt-0">
                                                    <input type="radio" class="custom-checkbox checkbox-round active" id="check-customer" name="check-customer" value="user" required="" checked>
                                                    <label for="check-customer" class="check-customer mb-1">I am a user</label>
                                                    <br>
                                                    <input type="radio" class="custom-checkbox checkbox-round" id="check-seller" name="check-customer" value="gamer" required="">
                                                    <label for="check-seller" class="check-seller">I am a gamer</label>
                                                </div>
                                                <p>Your personal data will be used to support your experience
                                                    throughout this website, to manage access to your account,
                                                    and for other purposes described in our <a href="#" class="text-primary">privacy policy</a>.</p>
                                                <div class="form-checkbox d-flex align-items-center justify-content-between mb-5">
                                                    <input type="checkbox" class="custom-checkbox" id="remember" name="remember" required="">
                                                    <label for="remember" class="font-size-md">I agree to the <a href="#" class="text-primary font-size-md">privacy policy</a></label>
                                                </div>
                                                <button type="submit" name="signup" class="btn btn-primary">Sign Up</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- End of Main -->


<div class="month-category head3 pt-8">
    <div class="container">
        <div class="category-wrapper bg-white">
            <div class="product-wrapper">
                <div class="row grid cols-xl-5 cols-md-4 cols-sm-3 cols-2 appear-animate" id="products-1">
                    <div class="grid-item product-wrap shoes">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="assets/images/demos/demo14/products/img13.jpg" alt="Product" width="300" height="337">
                                    <img src="assets/images/demos/demo14/products/img13.jpg" alt="Product" width="300" height="337">
                                </a>
                            </figure>
                        </div>
                    </div>
                    <!-- End of Product Wrap -->
                    <div class="grid-item product-wrap fashion air-condtioning">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="assets/images/demos/demo14/products/img14.jpg" alt="Product" width="300" height="337">
                                    <img src="assets/images/demos/demo14/products/img14.jpg" alt="Product" width="300" height="337">
                                </a>
                            </figure>
                        </div>
                    </div>
                    <!-- End of Product Wrap -->
                    <div class="grid-item product-wrap fashion vacuum">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="assets/images/demos/demo14/products/img15.jpg" alt="Product" width="300" height="337">
                                    <img src="assets/images/demos/demo14/products/img15.jpg" alt="Product" width="300" height="337">
                                </a>
                            </figure>
                        </div>
                    </div>
                    <!-- End of Product Wrap -->
                    <div class="grid-item product-wrap fashion cameras">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="assets/images/demos/demo14/products/img16.jpg" alt="Product" width="300" height="337">
                                    <img src="assets/images/demos/demo14/products/img16.jpg" alt="Product" width="300" height="337">
                                </a>
                            </figure>
                        </div>
                    </div>
                    <!-- End of Product Wrap -->
                    <div class="grid-item product-wrap shoes">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="assets/images/demos/demo14/products/img17.jpg" alt="Product" width="300" height="337">
                                    <img src="assets/images/demos/demo14/products/img17.jpg" alt="Product" width="300" height="337">
                                </a>
                            </figure>
                        </div>
                    </div>
                    <!-- End of Product Wrap -->
                    <div class="grid-space col-xl-5col col-1"></div>
                </div>
            </div>
            <!-- End of Product Wrapper -->
        </div>
    </div>
</div>

    <!-- Start of Footer -->
    <?php include('include/footer.php'); ?>
    <!-- End of Footer -->
</div>
<!-- End of Page-wrapper -->


<!-- Start of Scroll Top -->
<?php include('include/scrol_top.php'); ?>
<!-- End of Scroll Top -->

<!-- Start of Mobile Menu -->
<?php include('include/mobile.php'); ?>
<!-- End of Mobile Menu -->

<!-- Start of Newsletter popup -->
<?php include('include/newsletter.php'); ?>
<!-- End of Newsletter popup -->

<!-- Start of Quick View -->
<?php include('include/quick.php'); ?>
<!-- End of Quick view -->

<!-- Plugin JS File -->
<?php include('include/js.php'); ?>
</body>


</html>
