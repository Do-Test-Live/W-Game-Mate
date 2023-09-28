<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Title</title>
    <link type="text/css" rel="stylesheet" href="assets/uikit/css/uikit-rtl.min.css">
    <!--css files-->
    <?php include('include/css.php'); ?>
    <style>
        button{
            border: unset;
            background-image: url(assets/images/new_page/btn-2.png);
            background-position: center;
            background-size: contain;
            background-repeat: no-repeat;
            color: white;
            font-size: 20px;
            font-weight: bold;
            width: 100%;
            padding: 24px 20px;
            background-color: transparent;
        }
        .button-head{
            background-image: unset;
            border: unset;
            color: white;
            font-size: 20px;
            font-weight: bold;
            background-color: #4a9fff;
            margin: 30px;
            max-width: 280px;
            padding: 20px 40px;
        }
        .uk-card-media-top{
            background-color: #4a9fff5e;
        }
        .header-button{
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;
            width: 150px;
            margin-right: 20px;
        }
    </style>
</head>
<body>

<div class="page-wrapper" style="background-image: url('assets/images/new_page/bg.png'); background-repeat: no-repeat; background-position: center; background-size: cover; height: 100%;">
    <!-- Start of Header -->
    <header class="header header-border">
        <!-- End of Header Top -->
        <div class="header-middle">
            <div class="container">
                <div class="header-left mr-md-4">
                    <a href="#" class="mobile-menu-toggle  w-icon-hamburger">
                    </a>
                    <a href="index.php" class="logo ml-lg-0">
                        <img src="assets/images/new_page/back.png" alt="logo" style="width: 120px"/>
                    </a>
                    <a href="index.php" class="logo ml-lg-0">
                        <img src="assets/img/logo.png" alt="logo" width="250px"/>
                    </a>
                    <nav class="main-nav">
                        <ul class="menu">
                            <li class="active">
                                <a href="#">Lorem Ipsum</a>
                            </li>
                            <li>
                                <a href="#">Lorem Ipsum</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="header-right ml-4">
                    <div class="account align-items-center d-sm-show">
                        <button class="inline-type d-flex ls-normal header-button" href="#" style="background-image: url('assets/images/new_page/b1.png');">
                            <p style="padding-left: 50px; font-size: 20px; padding-top: 25px">50</p>
                        </button>
                        <button class="inline-type d-flex ls-normal header-button" href="#" style="background-image: url('assets/images/new_page/b2.png');">
                            <p style="padding-left: 50px; font-size: 20px; padding-top: 25px">50</p>
                        </button>
                        <button class="inline-type d-flex ls-normal header-button" href="#" style="background-image: url('assets/images/new_page/b3.png');">
                            <p style="padding-left: 50px; font-size: 20px; padding-top: 25px">50</p>
                        </button>

                    </div>
                </div>
            </div>
        </div>
        <!-- End of Header Middle -->

        <div class="header-bottom sticky-content fix-top sticky-header">
            <div class="container">
                <div class="inner-wrap">
                    <div class="header-left flex-1">
                        <div class="dropdown category-dropdown has-border" data-visible="true">
                            <a href="#" class="category-toggle" role="button" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="true" data-display="static"
                               title="Browse Categories">
                                <i class="w-icon-category"></i>
                                <span>All Menus</span>
                            </a>

                            <div class="dropdown-box">
                                <ul class="menu vertical-menu category-menu">
                                    <li>
                                        <a href="#">
                                            Lorem Ipsum
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Lorem Ipsum
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Lorem Ipsum
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Lorem Ipsum
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Lorem Ipsum
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="header-right">
                        <a href="gamer_signup.php" class="d-xl-show"><i class="w-icon-map-marker mr-1"></i>註冊成為陪玩師</a>
                        <a href="#"><i class="w-icon-sale"></i>Daily Deals</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End of Header -->


    <main class="main mt-5" style="padding: 20px;">
        <div class="uk-slider-container-offset" uk-slider>

            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                <ul class="uk-slider-items uk-child-width-1-4@s uk-grid">
                    <li>
                        <div class="uk-card uk-card-default" style="text-align: center;">
                            <button class="mt-5 button-head">LOREM IPSUM</button>
                            <div class="uk-card-media-top">
                                <h2 style="padding-top: 50px">$50</h2>
                                <img src="assets/images/new_page/1.png" alt="">
                            </div>
                            <div class="uk-card-body mt-4">
                                <button>
                                    $50
                                </button>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-card uk-card-default" style="text-align: center;">
                            <button class="mt-5 button-head">LOREM IPSUM</button>
                            <div class="uk-card-media-top">
                                <h2 style="padding-top: 50px">$200</h2>
                                <img src="assets/images/new_page/2.png" alt="">
                            </div>
                            <div class="uk-card-body">
                                <button><del style="color: #ff49a2; font-size: 16px">$200</del></br>$190</button>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-card uk-card-default" style="text-align: center;">
                            <button class="mt-5 button-head">LOREM IPSUM</button>
                            <div class="uk-card-media-top">
                                <h2 style="padding-top: 50px">$500</h2>
                                <img src="assets/images/new_page/3.png" alt="">
                            </div>
                            <div class="uk-card-body">
                                <button><del style="color: #ff49a2; font-size: 16px">$500</del></br>$475</button>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-card uk-card-default" style="text-align: center;">
                            <button class="mt-5 button-head">LOREM IPSUM</button>
                            <div class="uk-card-media-top">
                                <h2 style="padding-top: 50px">$1000</h2>
                                <img src="assets/images/new_page/5.png" alt="">
                            </div>
                            <div class="uk-card-body">
                                <button><del style="color: #ff49a2; font-size: 16px">$1000</del></br>$950</button>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-card uk-card-default" style="text-align: center;">
                            <button class="mt-3 button-head">LOREM IPSUM</button>
                            <div class="uk-card-media-top">
                                <h2 style="padding-top: 50px">$5000</h2>
                                <img src="assets/images/new_page/6.png" alt="">
                            </div>
                            <div class="uk-card-body">
                                <button><del style="color: #ff49a2; font-size: 16px">$5000</del></br>$4750</button>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-card uk-card-default" style="text-align: center;">
                            <button class="mt-3 button-head">LOREM IPSUM</button>
                            <div class="uk-card-media-top">
                                <h2 style="padding-top: 50px">$10000</h2>
                                <img src="assets/images/new_page/4.png" alt="">
                            </div>
                            <div class="uk-card-body">
                                <button><del style="color: #ff49a2; font-size: 16px">$10000</del></br>$9500</button>
                            </div>
                        </div>
                    </li>
                </ul>

                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

            </div>

            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

        </div>
    </main>
</div>

<!-- Start of Scroll Top -->
<?php include('include/scrol_top.php'); ?>
<!-- End of Scroll Top -->

<!-- Start of Mobile Menu -->
<div class="mobile-menu-wrapper">
    <div class="mobile-menu-overlay"></div>
    <!-- End of .mobile-menu-overlay -->

    <a href="#" class="mobile-menu-close"><i class="close-icon"></i></a>
    <!-- End of .mobile-menu-close -->

    <div class="mobile-menu-container scrollable">
        <!-- End of Search Form -->
        <div class="tab">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a href="#main-menu" class="nav-link active">Main Menu</a>
                </li>
                <li class="nav-item">
                    <a href="#categories" class="nav-link">Categories</a>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane active" id="main-menu">
                <ul class="mobile-menu">
                    <li><a href="#">Lorem Ipsum</a></li>
                    <li><a href="#">Lorem Ipsum</a></li>
                </ul>
            </div>
            <div class="tab-pane" id="categories">
                <ul class="mobile-menu">
                    <li>
                        <a href="#">
                            Lorem Ipsum
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Lorem Ipsum
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Lorem Ipsum
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Lorem Ipsum
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Lorem Ipsum
                        </a>
                    </li>
            </div>
        </div>
    </div>
</div>
<!-- End of Mobile Menu -->


<!-- Plugin JS File -->
<?php include('include/js.php'); ?>

<script src="assets/uikit/js/uikit.min.js"></script>
</body>
</html>