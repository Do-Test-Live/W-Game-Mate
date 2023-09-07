<?php
session_start();
require_once('include/dbController.php');
$db_handle = new DBController();
date_default_timezone_set("Asia/Hong_Kong");
if (!isset($_SESSION['userid'])) {
    echo "<script>
                window.location.href='index.php';
                </script>";
} else{
    $user_info = $db_handle->runQuery("select * from user where id = {$_SESSION['userid']}");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>My Profile - Gamemate</title>

    <?php include('include/css.php'); ?>
</head>

<body>
<div class="page-wrapper">
    <h1 class="d-none">Wolmart - Responsive Marketplace HTML Template</h1>
    <!-- Start of Header -->
    <?php include('include/header_inner.php'); ?>
    <!-- End of Header -->


    <!-- Start of Main -->
    <main class="main" style="margin-top: -1px;">

        <!-- Start of Page Content -->
        <div class="page-content mb-10">
            <div class="shop-default-banner shop-boxed-banner banner d-flex align-items-center mb-6"
                 style="background-image: url(assets/images/shop/banner2.jpg); background-color: #FFC74E;">
                <div class="container banner-content">

                </div>
            </div>
            <!-- End of Shop Banner -->
            <div class="container-fluid">
                <!-- Start of Shop Content -->
                <div class="shop-content">
                    <!-- Start of Shop Main Content -->
                    <div class="main-content">
                        <div class="btn-wrap show-code-action mb-5">
                            <a href="create_gamer_profile.php" class="btn btn-primary">Create Profile</a>
                        </div>
                        <div class="product-wrapper row cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2">
                            <?php
                            $fetch_profile = $db_handle->runQuery("SELECT * FROM `gamer`,`gamer_profile` WHERE gamer_profile.gamer_id = gamer.id and gamer.id = {$_SESSION['userid']}");
                            $no_fetch_profile = $db_handle->numRows("SELECT * FROM `gamer`,`gamer_profile` WHERE gamer_profile.gamer_id = gamer.id and gamer.id = {$_SESSION['userid']}");
                            if ($no_fetch_profile > 0) {
                                for ($i = 0; $i < $no_fetch_profile; $i++) {
                                    ?>
                                    <div class="product-wrap">
                                        <div class="product text-center">
                                            <figure class="product-media">
                                                <?php
                                                $image = explode(',', $fetch_profile[$i]['images']);
                                                ?>
                                                <a href="details.php?id=<?php echo $fetch_profile[$i]['id'];?>">
                                                    <img src="<?php echo $image[0]; ?>" alt="Product" width="300"
                                                         height="338"/>
                                                </a>
                                                <div class="product-action-horizontal">
                                                    <audio controls>
                                                        <source src="<?php echo $fetch_profile[$i]['audio']; ?>"
                                                                type="audio/mpeg">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <div class="product-cat">
                                                    <a href="details.php?id=<?php echo $fetch_profile[$i]['id'];?>"><?php echo $fetch_profile[$i]['game_name']; ?></a>
                                                </div>
                                                <h3 class="product-name">
                                                    <a href="details.php?id=<?php echo $fetch_profile[$i]['id'];?>"><?php echo $fetch_profile[0]['full_name_cn']; ?></a>
                                                </h3>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="details.php?id=<?php echo $fetch_profile[$i]['id'];?>" class="rating-reviews">(3 reviews)</a>
                                                </div>
                                                <div class="product-pa-wrapper">
                                                    <div class="product-price">
                                                        HKD <?php echo $fetch_profile[$i]['price'];?> <?php echo $fetch_profile[$i]['price_unit'];?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                        </div>

                    </div>
                    <!-- End of Shop Main Content -->

                    <!-- Start of Sidebar, Shop Sidebar -->
                    <aside class="sidebar shop-sidebar left-sidebar sticky-sidebar-wrapper">
                        <!-- Start of Sidebar Overlay -->
                        <div class="sidebar-overlay"></div>
                        <a class="sidebar-close" href="#"><i class="close-icon"></i></a>

                        <!-- Start of Sidebar Content -->
                        <div class="sidebar-content scrollable">
                            <div class="filter-actions">
                                <label>Filter :</label>
                                <a href="#" class="btn btn-dark btn-link filter-clean">Clean All</a>
                            </div>
                            <!-- Start of Collapsible widget -->
                            <div class="widget widget-collapsible">
                                <h3 class="widget-title"><span>All Categories</span></h3>
                                <ul class="widget-body filter-items search-ul">
                                    <li><a href="#">Accessories</a></li>
                                    <li><a href="#">Babies</a></li>
                                    <li><a href="#">Beauty</a></li>
                                    <li><a href="#">Decoration</a></li>
                                    <li><a href="#">Electronics</a></li>
                                    <li><a href="#">Fashion</a></li>
                                    <li><a href="#">Food</a></li>
                                    <li><a href="#">Furniture</a></li>
                                    <li><a href="#">Kitchen</a></li>
                                    <li><a href="#">Medical</a></li>
                                    <li><a href="#">Sports</a></li>
                                    <li><a href="#">Watches</a></li>
                                </ul>
                            </div>
                            <!-- End of Collapsible Widget -->

                            <!-- Start of Collapsible Widget -->
                            <div class="widget widget-collapsible">
                                <h3 class="widget-title"><span>Price</span></h3>
                                <div class="widget-body">
                                    <ul class="filter-items search-ul">
                                        <li><a href="#">$0.00 - $100.00</a></li>
                                        <li><a href="#">$100.00 - $200.00</a></li>
                                        <li><a href="#">$200.00 - $300.00</a></li>
                                        <li><a href="#">$300.00 - $500.00</a></li>
                                        <li><a href="#">$500.00+</a></li>
                                    </ul>
                                    <form class="price-range">
                                        <input type="number" name="min_price" class="min_price text-center"
                                               placeholder="$min"><span class="delimiter">-</span><input type="number"
                                                                                                         name="max_price"
                                                                                                         class="max_price text-center"
                                                                                                         placeholder="$max"><a
                                                href="#" class="btn btn-primary btn-rounded">Go</a>
                                    </form>
                                </div>
                            </div>
                            <!-- End of Collapsible Widget -->

                            <!-- Start of Collapsible Widget -->
                            <div class="widget widget-collapsible">
                                <h3 class="widget-title"><span>Size</span></h3>
                                <ul class="widget-body filter-items item-check mt-1">
                                    <li><a href="#">Extra Large</a></li>
                                    <li><a href="#">Large</a></li>
                                    <li><a href="#">Medium</a></li>
                                    <li><a href="#">Small</a></li>
                                </ul>
                            </div>
                            <!-- End of Collapsible Widget -->

                            <!-- Start of Collapsible Widget -->
                            <div class="widget widget-collapsible">
                                <h3 class="widget-title"><span>Brand</span></h3>
                                <ul class="widget-body filter-items item-check mt-1">
                                    <li><a href="#">Elegant Auto Group</a></li>
                                    <li><a href="#">Green Grass</a></li>
                                    <li><a href="#">Node Js</a></li>
                                    <li><a href="#">NS8</a></li>
                                    <li><a href="#">Red</a></li>
                                    <li><a href="#">Skysuite Tech</a></li>
                                    <li><a href="#">Sterling</a></li>
                                </ul>
                            </div>
                            <!-- End of Collapsible Widget -->

                            <!-- Start of Collapsible Widget -->
                            <div class="widget widget-collapsible">
                                <h3 class="widget-title"><span>Color</span></h3>
                                <ul class="widget-body filter-items item-check">
                                    <li><a href="#">Black</a></li>
                                    <li><a href="#">Blue</a></li>
                                    <li><a href="#">Brown</a></li>
                                    <li><a href="#">Green</a></li>
                                    <li><a href="#">Grey</a></li>
                                    <li><a href="#">Orange</a></li>
                                    <li><a href="#">Yellow</a></li>
                                </ul>
                            </div>
                            <!-- End of Collapsible Widget -->
                        </div>
                        <!-- End of Sidebar Content -->
                    </aside>
                    <!-- End of Shop Sidebar -->
                </div>
                <!-- End of Shop Content -->
            </div>
        </div>
        <!-- End of Page Content -->
    </main>
    <!-- End of Main -->

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
</html>