<header class="header header-border">
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
                <a href="gamer_signup.php">Signup as Gamer</a>
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
                    <?php
                    if (isset($_SESSION['userid'])) {
                        $customer_id = $_SESSION['userid'];
                        $fetch_customer = $db_handle->runQuery("select * from gamer where id = '$customer_id'");
                        ?>
                        <a class="login inline-type d-flex ls-normal" href="gamer_profile.php">
                            <i class="w-icon-account d-flex align-items-center justify-content-center br-50"></i>
                            <span class="d-flex flex-column justify-content-center ml-3 d-xl-show">Welcome
                                    <b class="d-block font-weight-bold ls-25"><?php echo $fetch_customer[0]['full_name_cn'];?></b>
                                </span>
                        </a>
                        <a class="login inline-type d-flex ls-normal ml-5" href="logout.php">
                            <i class="w-icon-logout d-flex align-items-center justify-content-center br-50"></i>
                            <span class="d-flex flex-column justify-content-center ml-3 d-xl-show">
                                    <b class="d-block font-weight-bold ls-25">Logout</b>
                                </span>
                        </a>
                        <?php
                    } else{
                        ?>
                        <a class="login inline-type d-flex ls-normal" href="login.php">
                            <i class="w-icon-account d-flex align-items-center justify-content-center br-50"></i>
                            <span class="d-flex flex-column justify-content-center ml-3 d-xl-show">Sign In
                                    <b class="d-block font-weight-bold ls-25">Account</b>
                                </span>
                        </a>
                        <?php
                    }
                    ?>
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

    <div class="header-bottom sticky-content fix-top sticky-header">
        <div class="container">
            <div class="inner-wrap">
                <div class="header-left flex-1">
                    <div class="dropdown category-dropdown has-border" data-visible="true">
                        <a href="#" class="category-toggle" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="true" data-display="static"
                           title="Browse Categories">
                            <i class="w-icon-category"></i>
                            <span>All Games</span>
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
                                                <li><a href="gamer.php">英雄聯盟</a></li>
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
                <div class="header-right">
                    <a href="#" class="d-xl-show"><i class="w-icon-map-marker mr-1"></i>Track Order</a>
                    <a href="#"><i class="w-icon-sale"></i>Daily Deals</a>
                </div>
            </div>
        </div>
    </div>
</header>