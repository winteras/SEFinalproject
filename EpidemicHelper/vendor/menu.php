<section id="menu">    
    <!-- 上面的header -->
        <header id="header">
            <div class="header-top"></div>
            <div class="container main-menu">
                <div class="row align-items-center justify-content-between d-flex">
                    <div id="logo">
                        <a href="index.php"><img src="" alt="" title="" /></a>
                    </div>
                    <nav id="nav-menu-container">
                        <ul class="nav-menu">
                            <li><a href="index.blade.php" class="smooth-scroll">首頁</a></li>
                            <li><a href="#services" class="smooth-scroll">航班資訊</a></li>
                            <li><a href="hotel.blade.php">旅館資訊</a></li>
                            <li><a href="#custom-packages">防疫等級資訊</a></li>
                            <?php 
                                if(isset($_SESSION['login'])){
                            ?>
                            <li><a href="./vendor/login/logout.php">LogOut</a>

                            </li>
                        <?php }else{ ?>
                            <li><a href="./vendor/login/login.php">登入</a>

                            </li>

                            </li>
                        <?php } ?>
                            </li>
                        </ul>
                    </nav><!-- #nav-menu-container -->
                </div>
            </div>
        </header><!-- #header -->
    </section>