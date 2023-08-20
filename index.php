<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Home - Gamemate</title>

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
                    <a href="index.php" class="logo ml-lg-0">
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
                        <a class="login inline-type d-flex ls-normal" href="login.php">
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
                        <div class="intro-slide-wrapper col-md-8 mb-4">
                            <div class="swiper-container swiper-theme pg-inner animation-slider"
                                 data-swiper-options="{
                                'nav': false,
                                'dots': true,
                                'slidesPerView': 1,
                                'autoplay': {
                                    'delay': 8000,
                                    'disableOnInteraction': false
                                }}">
                                <div class="swiper-wrapper row gutter-no cols-1">
                                    <div class="swiper-slide banner banner-fixed intro-slide intro-slide1"
                                         style="background-image: url(assets/img/img01.jpg); background-color: #E7ECF0;">
                                        <div class="banner-content y-50">
                                            <div class="slide-animate" data-animation-options="{
                                                'name': 'zoomIn', 'duration': '1s'
                                                }">
                                                <a href="#"
                                                   class="btn btn-dark btn-outline btn-rounded btn-icon-right">
                                                    Shop Now
                                                    <i class="w-icon-long-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Intro Slide 1 -->
                                </div>
                                <!--<div class="swiper-pagination"></div>-->
                            </div>
                        </div>
                        <div class="intro-banner-wrapper col-md-4">
                            <div class="row">
                                <div class="intro-banner banner col-md-12 col-sm-6 mb-4 banner-fixed overlay-dark">
                                    <figure class="banner-media">
                                        <img src="assets/img/img02.jpg" alt="Banner"
                                             width="347"
                                             height="245"
                                             style="background-color: #E9E1F1;"/>
                                    </figure>
                                    <div class="banner-content">

                                    </div>
                                </div>
                                <!-- End of Intro Banner -->
                                <div class="intro-banner banner col-md-12 col-sm-6 mb-4 banner-fixed overlay-dark">
                                    <figure class="banner-media">
                                        <img src="assets/img/img03.jpg" alt="Banner"
                                             width="347"
                                             height="245"
                                             style="background-color: #E9E9EB;"/>
                                    </figure>
                                    <div class="banner-content">
                                    </div>
                                </div>
                                <!-- End of Intro Banner -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- End of Intro-wrapper -->
                <div class="swiper-container swiper-theme icon-box-wrapper appear-animate br-sm bg-white mt-2" style="background-color: #7705e7 !important;"
                     data-swiper-options="{
                    'spaceBetween': 0,
                    'slidesPerView': 1,
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 2
                        },
                        '992': {
                            'slidesPerView': 3
                        },
                        '1200': {
                            'slidesPerView': 4
                        }
                    }}">
                    <div class="swiper-wrapper row cols-md-4 cols-sm-3 cols-1">
                        <div class="swiper-slide icon-box icon-box-side text-dark">
                            <span class="icon-box-icon icon-shipping">
                                <i class="w-icon-truck"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title font-weight-bolder">Free Shipping & Returns</h4>
                                <p class="text-default">For all orders over $99</p>
                            </div>
                        </div>
                        <div class="swiper-slide icon-box icon-box-side text-dark">
                            <span class="icon-box-icon icon-payment">
                                <i class="w-icon-bag"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title font-weight-bolder">Secure Payment</h4>
                                <p class="text-default">We ensure secure payment</p>
                            </div>
                        </div>
                        <div class="swiper-slide icon-box icon-box-side text-dark icon-box-money">
                            <span class="icon-box-icon icon-money">
                                <i class="w-icon-money"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title font-weight-bolder">Money Back Guarantee</h4>
                                <p class="text-default">Any back within 30 days</p>
                            </div>
                        </div>
                        <div class="swiper-slide icon-box icon-box-side text-dark icon-box-chat">
                            <span class="icon-box-icon icon-chat">
                                <i class="w-icon-chat"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title font-weight-bolder">Customer Support</h4>
                                <p class="text-default">Call or email us 24/7</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Icon Box Wrapper -->
            </div>
        </div>
    </main>
    <!-- End of Main -->
    <section class="head2">
        <div class="container">
            <div class="title-link-wrapper title-deals after-none appear-animate">
                <h2 class="title">Deals Hot of The Day</h2>
                <div class="product-countdown-container d-flex font-size-sm text-white bg-dark br-xs align-items-center mr-auto mt-1 mb-1">
                    <label>Offer Ends in: </label>
                    <div class="product-countdown countdown-compact ml-1 font-weight-bold" data-until="+10h"
                         data-relative="true" data-compact="true" data-format="HMS">00:00:00</div>
                </div>
                <a href="demo14-shop.html" class="ml-0 mb-0 ls-normal" style="color: white">
                    More Products
                    <i class="w-icon-long-arrow-right"></i>
                </a>
            </div>
            <div class="swiper-container swiper-theme product-deals-wrapper appear-animate"
                 data-swiper-options="{
                    'spaceBetween': 20,
                    'slidesPerView': 2,
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 3
                        },
                        '768': {
                            'slidesPerView': 4
                        },
                        '992': {
                            'slidesPerView': 5
                        }
                    }}">
                <div class="swiper-wrapper row cols-lg-5 cols-md-4 cols-sm-3 cols-2">
                    <div class="swiper-slide product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="assets/images/demos/demo14/products/img04.jpg" alt="Product" width="300"
                                         height="337">
                                    <img src="assets/images/demos/demo14/products/img04.jpg" alt="Product" width="300"
                                         height="337">
                                </a>
                            </figure>
                            <h4 class="head5">Lorem ipsum</h4>
                            <P class="prag"> Lorem ipsum is a placeholder text commonly used to</P>
                        </div>
                    </div>
                    <!-- End of Product Wrap -->
                    <div class="swiper-slide product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="assets/images/demos/demo14/products/img05.jpg" alt="Product" width="300" height="337">
                                    <img src="assets/images/demos/demo14/products/img05.jpg"  alt="Product" width="300" height="337">
                                </a>
                            </figure>
                            <h4 class="head5">Lorem ipsum</h4>
                            <P class="prag"> Lorem ipsum is a placeholder text commonly used to</P>
                        </div>
                    </div>
                    <!-- End of Product Wrap -->
                    <div class="swiper-slide product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="assets/images/demos/demo14/products/img06.jpg" alt="Product" width="300" height="337">
                                    <img src="assets/images/demos/demo14/products/img06.jpg" alt="Product" width="300" height="337">
                                </a>
                            </figure>
                            <h4 class="head5">Lorem ipsum</h4>
                            <P class="prag"> Lorem ipsum is a placeholder text commonly used to</P>
                        </div>
                    </div>
                    <!-- End of Product Wrap -->
                    <div class="swiper-slide product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="assets/images/demos/demo14/products/img07.jpg" alt="Product" width="300" height="337">
                                    <img src="assets/images/demos/demo14/products/img07.jpg" alt="Product" width="300" height="337">
                                </a>
                            </figure>
                            <h4 class="head5">Lorem ipsum</h4>
                            <P class="prag"> Lorem ipsum is a placeholder text commonly used to</P>
                        </div>
                    </div>
                    <!-- End of Product Wrap -->
                    <div class="swiper-slide product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="assets/images/demos/demo14/products/img08.jpg" alt="Product" width="300" height="337">
                                    <img src="assets/images/demos/demo14/products/img08.jpg" alt="Product" width="300" height="337">
                                </a>
                            </figure>
                            <h4 class="head5">Lorem ipsum</h4>
                            <P class="prag"> Lorem ipsum is a placeholder text commonly used to</P>
                        </div>
                    </div>
                    <!-- End of Product Wrap -->
                </div>
            </div>
            <!-- End of Prodcut Deals Wrapper -->
            <div class="row grid banner-grid pt-1 appear-animate">
                <div class="grid-item grid-item1 banner banner-fixed overlay-dark  col-lg-8 height-x1">
                    <figure class="banner-media">
                        <img src="assets/images/demos/demo14/banner/img09.jpg" alt="Category Banner" width="900" height="290" style="background-color: #373538;">
                    </figure>
                </div>
                <div class="grid-item grid-item3 banner banner-fixed overlay-dark col-lg-4 col-md-6 height-x2">
                    <figure class="banner-media">
                        <img src="assets/images/demos/demo14/banner/img12.jpg" alt="Category Banner" width="440" height="290"  style="background-color: #D3D3D5;">
                    </figure>
                </div>
                <div class="grid-item grid-item4 banner banner-fixed overlay-dark col-lg-4 col-md-6 height-x1">
                    <figure class="banner-media">
                        <img src="assets/images/demos/demo14/banner/img10.jpg" alt="category" width="440" height="600"  style="background-color: #ADB5BF;">
                    </figure>
                </div>
                <div class="grid-item grid-item2 banner banner-fixed overlay-light col-lg-4 col-md-6 height-x1">
                    <figure class="banner-media">
                        <img src="assets/images/demos/demo14/banner/img11.jpg" alt="category" width="440" height="290"  style="background-color: #272624;">
                    </figure>
                </div>
                <div class="grid-space col-1"></div>
            </div>
            <!-- End of Banner Grid -->
        </div>

        </div>
    </section>


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
