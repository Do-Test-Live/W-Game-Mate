<header class="header">
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
                    </ul>
                </nav>
            </div>
            <div class="header-right ml-4">
                <div class="account align-items-center d-sm-show">
                        <a class="login inline-type d-flex ls-normal" href="gamer_profile.php">
                            <i class="w-icon-account d-flex align-items-center justify-content-center br-50"></i>
                            <span class="d-flex flex-column justify-content-center ml-3 d-xl-show">Welcome
                                    <b class="d-block font-weight-bold ls-25"><?php
                                        if (isset($_SESSION['userid'])) {
                                        $id = $_SESSION['userid'];
                                        $role = $_SESSION['role'];
                                        if($role == 'gamer'){
                                            $fetch_customer = $db_handle->runQuery("select * from gamer where id = '$id'");
                                            echo $fetch_customer[0]['full_name_cn'];
                                        } else{
                                            $fetch_customer = $db_handle->runQuery("select * from user where id = '$id'");
                                            echo $fetch_customer[0]['first_name'];
                                        }
                                        ?></b>
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

    <div class="header-bottom sticky-content fix-top sticky-header has-dropdown">
        <div class="container">
            <div class="inner-wrap">
                <div class="header-left flex-1">
                    <div class="dropdown category-dropdown show-dropdown" data-visible="true">
                        <a href="#" class="category-toggle text-white" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="true" data-display="static"
                           title="All Departments">
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
                                        <i class="w-icon-toy"></i>訂單
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="w-icon-basketball"></i>錢包
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="w-icon-heartbeat"></i>優惠券
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="w-icon-camera"></i>我要做陪玩
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="w-icon-furniture"></i>個人資料
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="w-icon-kettle"></i>設置
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="w-icon-kettle"></i>聯繫客服
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="w-icon-kettle"></i>登出
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
                    <a href="gamer_signup.php" class="d-xl-show"><i class="w-icon-account mr-1"></i>註冊成為陪玩師</a>
                    <a href="#"><i class="w-icon-sale"></i>Special Offers</a>
                </div>
            </div>
        </div>
    </div>
</header>