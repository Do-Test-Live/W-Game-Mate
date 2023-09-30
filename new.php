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
       .main button{
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
            background-image: unset !important;
            border: unset;
            color: white;
            font-size: 20px;
            font-weight: bold;
            background-color: #4a9fff !important;
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
    <?php include ('include/header_inner.php');?>
    <!-- End of Header -->


    <main class="main mt-5" style="padding: 20px;">
        <div class="uk-slider-container-offset" uk-slider>

            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                <ul class="uk-slider-items uk-child-width-1-4@s uk-grid">
                    <li>
                        <div class="uk-card uk-card-default" style="text-align: center;">
                            <button class="mt-5 button-head">$50</button>
                            <div class="uk-card-media-top">
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
                            <button class="mt-5 button-head">$100</button>
                            <div class="uk-card-media-top">
                                <img src="assets/images/new_page/2.png" alt="">
                            </div>
                            <div class="uk-card-body">
                                <button><del style="color: #ff49a2; font-size: 16px">$200</del></br>$190</button>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-card uk-card-default" style="text-align: center;">
                            <button class="mt-5 button-head">$500</button>
                            <div class="uk-card-media-top">
                                <img src="assets/images/new_page/3.png" alt="">
                            </div>
                            <div class="uk-card-body">
                                <button><del style="color: #ff49a2; font-size: 16px">$500</del></br>$475</button>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-card uk-card-default" style="text-align: center;">
                            <button class="mt-5 button-head">$1000</button>
                            <div class="uk-card-media-top">
                                <img src="assets/images/new_page/5.png" alt="">
                            </div>
                            <div class="uk-card-body">
                                <button><del style="color: #ff49a2; font-size: 16px">$1000</del></br>$950</button>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-card uk-card-default" style="text-align: center;">
                            <button class="mt-3 button-head">$5000</button>
                            <div class="uk-card-media-top">
                                <img src="assets/images/new_page/6.png" alt="">
                            </div>
                            <div class="uk-card-body">
                                <button><del style="color: #ff49a2; font-size: 16px">$5000</del></br>$4750</button>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-card uk-card-default" style="text-align: center;">
                            <button class="mt-3 button-head">$10000</button>
                            <div class="uk-card-media-top">
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
    <!-- Start of Footer -->
    <?php include('include/footer.php'); ?>
    <!-- End of Footer -->
</div>

<!-- Start of Scroll Top -->
<?php include('include/scrol_top.php'); ?>
<!-- End of Scroll Top -->

<!-- Start of Mobile Menu -->
<?php include ('include/mobile.php');?>
<!-- End of Mobile Menu -->


<!-- Plugin JS File -->
<?php include('include/js.php'); ?>

<script src="assets/uikit/js/uikit.min.js"></script>
</body>
</html>