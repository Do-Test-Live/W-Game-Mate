<?php
session_start();
require_once('include/dbController.php');
$db_handle = new DBController();
date_default_timezone_set("Asia/Hong_Kong");

$id = $_GET['id'];
$fetch_data = $db_handle->runQuery("SELECT * FROM `gamer_profile`,`gamer` WHERE gamer_profile.id = '$id' and gamer_profile.gamer_id = gamer.id");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Gamer Details - Game Mate</title>

    <?php include('include/css.php'); ?>
</head>

<body>
<div class="page-wrapper">
    <!-- Start of Header -->
    <?php include('include/header_inner.php'); ?>
    <!-- End of Header -->


    <!-- Start of Main -->
    <main class="main mb-10 mt-5 pb-1">

        <!-- Start of Page Content -->
        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="main-content">
                        <div class="product product-single row mb-2">
                            <div class="col-md-6 mb-6">
                                <div class="product-gallery product-gallery-sticky">
                                    <div class="swiper-container product-single-swiper swiper-theme nav-inner"
                                         data-swiper-options="{
                                            'navigation': {
                                                'nextEl': '.swiper-button-next',
                                                'prevEl': '.swiper-button-prev'
                                            }
                                        }">
                                        <div class="swiper-wrapper row cols-1 gutter-no">
                                            <?php
                                            $image = explode(',', $fetch_data[0]['images']);
                                            foreach ($image as $img) {
                                                ?>
                                                <div class="swiper-slide">
                                                    <figure class="product-image">
                                                        <img src="<?php echo $img; ?>"
                                                             data-zoom-image="<?php echo $img; ?>"
                                                             alt="" width="800" height="900">
                                                    </figure>
                                                </div>
                                                <?php
                                            }
                                            ?>
                                        </div>
                                        <button class="swiper-button-next"></button>
                                        <button class="swiper-button-prev"></button>
                                        <div class="product-label-group">
                                            <label class="product-label label-discount">100 Fans</label>
                                        </div>
                                        <div class="product-label-group-new">
                                            <img src="assets/images/verified.png" alt="Brand"
                                                 width="105" height="48"/>
                                        </div>
                                    </div>
                                    <div class="product-thumbs-wrap swiper-container" data-swiper-options="{
                                            'navigation': {
                                                'nextEl': '.swiper-button-next',
                                                'prevEl': '.swiper-button-prev'
                                            }
                                        }">
                                        <div class="product-thumbs swiper-wrapper row cols-4 gutter-sm">
                                            <?php
                                            $image = explode(',', $fetch_data[0]['images']);
                                            foreach ($image as $img) {
                                                ?>
                                                <div class="product-thumb swiper-slide">
                                                    <img src="<?php echo $img; ?>"
                                                         alt="" width="800" height="900">
                                                </div>
                                                <?php
                                            }
                                            ?>
                                        </div>
                                        <button class="swiper-button-next"></button>
                                        <button class="swiper-button-prev"></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4 mb-md-6">
                                <div class="product-details" data-sticky-options="{'minWidth': 767}">
                                    <h1 class="product-title"><?php echo $fetch_data[0]['nick_name'];?></h1>
                                    <h4 style="color: #000000;"><?php echo $fetch_data[0]['game_name'];?></h4>
                                    <div class="product-bm-wrapper">
                                        <div class="product-meta">
                                            <div class="product-categories">
                                                ID:
                                                <span class="product-category"><a href="#"><?php echo $fetch_data[0]['gamer_id'];?></a></span>
                                            </div>
                                        </div>
                                    </div>

                                    <hr class="product-divider">

                                    <div class="product-price">
                                        <ins class="new-price">HKD <?php echo $fetch_data[0]['price'];?> <label class="mr-2"><?php echo $fetch_data[0]['price_unit'];?></label></ins>
                                        <!--<del class="old-price">$60.00 <label class="mr-2">per hour</label></del>-->
                                    </div>

                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 80%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="#product-tab-reviews" class="rating-reviews">(3 Reviews)</a>
                                    </div>


                                    <div class="product-short-desc">
                                        <ul class="list-type-check list-style-none">
                                            <li>Ultrices eros in cursus turpis massa cursus mattis.</li>
                                            <li>Volutpat ac tincidunt vitae semper quis lectus.</li>
                                            <li>Aliquam id diam maecenas ultricies mi eget mauris.</li>
                                        </ul>
                                    </div>

                                    <p>Skill Information: </p>
                                    <div id="player-container">
                                        <audio controls>
                                            <source src="<?php echo $fetch_data[0]['audio'];?>" type="audio/mpeg">
                                            Your browser does not support the audio element.
                                        </audio>
                                    </div>

                                    <hr class="product-divider">

                                    <div class="fix-bottom product-sticky-content sticky-content">
                                        <div class="product-form container">
                                            <button class="btn btn-primary btn-cart" style="margin-right: 10px">
                                                <i class="w-icon-chat"></i>
                                                <span>Chat</span>
                                            </button>
                                            <button class="btn btn-primary btn-cart" style="margin-left: 10px">
                                                <i class="w-icon-cart"></i>
                                                <span>Place an Order Now</span>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="social-links-wrapper">
                                        <div class="social-links">
                                            <div class="social-icons social-no-color border-thin">
                                                <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                                <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                                <a href="#"
                                                   class="social-icon social-pinterest fab fa-pinterest-p"></a>
                                                <a href="#" class="social-icon social-whatsapp fab fa-whatsapp"></a>
                                                <a href="#"
                                                   class="social-icon social-youtube fab fa-linkedin-in"></a>
                                            </div>
                                        </div>
                                        <span class="divider d-xs-show"></span>
                                        <div class="product-link-wrapper d-flex">
                                            <a href="#"
                                               class="btn-product-icon btn-wishlist w-icon-heart"><span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab tab-nav-boxed tab-nav-underline product-tabs">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a href="#product-tab-reviews" class="nav-link">Customer Reviews (3)</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="product-tab-reviews">
                                <div class="row mb-4">
                                    <div class="col-xl-4 col-lg-5 mb-4">
                                        <div class="ratings-wrapper">
                                            <div class="avg-rating-container">
                                                <h4 class="avg-mark font-weight-bolder ls-50">3.3</h4>
                                                <div class="avg-rating">
                                                    <p class="text-dark mb-1">Average Rating</p>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 60%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <a href="#" class="rating-reviews">(3 Reviews)</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                    class="ratings-value d-flex align-items-center text-dark ls-25">
                                                        <span
                                                                class="text-dark font-weight-bold">66.7%</span>Recommended<span
                                                        class="count">(2 of 3)</span>
                                            </div>
                                            <div class="ratings-list">
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <div class="progress-bar progress-bar-sm ">
                                                        <span></span>
                                                    </div>
                                                    <div class="progress-value">
                                                        <mark>70%</mark>
                                                    </div>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 80%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <div class="progress-bar progress-bar-sm ">
                                                        <span></span>
                                                    </div>
                                                    <div class="progress-value">
                                                        <mark>30%</mark>
                                                    </div>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 60%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <div class="progress-bar progress-bar-sm ">
                                                        <span></span>
                                                    </div>
                                                    <div class="progress-value">
                                                        <mark>40%</mark>
                                                    </div>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 40%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <div class="progress-bar progress-bar-sm ">
                                                        <span></span>
                                                    </div>
                                                    <div class="progress-value">
                                                        <mark>0%</mark>
                                                    </div>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 20%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <div class="progress-bar progress-bar-sm ">
                                                        <span></span>
                                                    </div>
                                                    <div class="progress-value">
                                                        <mark>0%</mark>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-7 mb-4">
                                        <div class="review-form-wrapper">
                                            <h3 class="title tab-pane-title font-weight-bold mb-1">Submit Your
                                                Review</h3>
                                            <p class="mb-3">Your email address will not be published. Required
                                                fields are marked *</p>
                                            <form action="#" method="POST" class="review-form">
                                                <div class="rating-form">
                                                    <label for="rating">Your Rating Of This Gamer :</label>
                                                    <span class="rating-stars">
                                                                <a class="star-1" href="#">1</a>
                                                                <a class="star-2" href="#">2</a>
                                                                <a class="star-3" href="#">3</a>
                                                                <a class="star-4" href="#">4</a>
                                                                <a class="star-5" href="#">5</a>
                                                            </span>
                                                    <select name="rating" id="rating" required=""
                                                            style="display: none;">
                                                        <option value="">Rate…</option>
                                                        <option value="5">Perfect</option>
                                                        <option value="4">Good</option>
                                                        <option value="3">Average</option>
                                                        <option value="2">Not that bad</option>
                                                        <option value="1">Very poor</option>
                                                    </select>
                                                </div>
                                                <button type="submit" class="btn btn-dark mt-3">Submit
                                                    Review
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <!-- End of Main Content -->

                    <!-- End of Sidebar -->
                </div>
            </div>
        </div>
        <!-- End of Page Content -->
    </main>
    <!-- End of Main -->

    <!-- Start of Footer -->
    <?php include('include/footer.php'); ?>
    <!-- End of Footer -->
</div>
<!-- End of Page Wrapper -->

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

<script>
    var track = document.getElementById('track');

    var controlBtn = document.getElementById('play-pause');

    function playPause() {
        if (track.paused) {
            track.play();
            //controlBtn.textContent = "Pause";
            controlBtn.className = "pause";
        } else {
            track.pause();
            //controlBtn.textContent = "Play";
            controlBtn.className = "play";
        }
    }

    controlBtn.addEventListener("click", playPause);
    track.addEventListener("ended", function () {
        controlBtn.className = "play";
    });
</script>
</body>
</html>