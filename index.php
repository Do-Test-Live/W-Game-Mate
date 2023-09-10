<?php
session_start();
require_once('include/dbController.php');
$db_handle = new DBController();
date_default_timezone_set("Asia/Hong_Kong");
?>

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
    <?php include ('include/header.php');?>
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
                </div>
                <!-- End of Icon Box Wrapper -->
            </div>
        </div>
    </main>
    <!-- End of Main -->
    <section class="head2">
        <div class="container">
            <div class="title-link-wrapper title-deals after-none appear-animate">
                <h2 class="title">Top Gamers of the Month</h2>
                <div class="product-countdown-container d-flex font-size-sm text-white br-xs align-items-center mr-auto mt-1 mb-1">
                </div>
                <a href="gamer.php" class="ml-0 mb-0 ls-normal" style="color: white">
                    More Gamers
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
                    <?php
                    $fetch_top_gamer = $db_handle->runQuery("SELECT * from gamer where top_gamer = '1' ORDER BY rand()");
                    $no_fetch_top_gamer = $db_handle->numRows("SELECT * from gamer where top_gamer = '1' ORDER BY rand()");
                    for($i = 0; $i < $no_fetch_top_gamer; $i++){
                        ?>
                        <div class="swiper-slide product-wrap">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <?php
                                    $image = explode(',',$fetch_top_gamer[$i]['images']);
                                    ?>
                                    <a href="#">
                                        <img src="<?php echo $image[0];?>" alt="Product" width="300"
                                             height="337">
                                    </a>
                                </figure>
                                <h4 class="head5"><?php echo $fetch_top_gamer[$i]['full_name_cn'];?></h4>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
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
