        <!-- 菜單 --> 
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <!-- logo -->
                <nav class="navbar navbar-light bg-light">
                    <a class="navbar-brand" href="../public">
                        <img src="../resources/icon/logo.png" height="30" class="d-inline-block align-top" alt="">
                    </a>
                </nav>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item active">
                            <a class="nav-link" href="../public">首頁</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                航班資訊
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href=" flightSearch.blade.php">航班查詢</a></li>
                                <li><a class="dropdown-item" href="../resources/views/flightManagement.blade.php">航班管理</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                防疫等級資訊
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">防疫等級清單</a></li>
                                <li><a class="dropdown-item" href="../resources/views/severityLevelManagement.blade.php">防疫等級管理</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                防疫旅館資訊
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="../resources/views/hotel.blade.php">台北/新北/基隆旅館</a></li>
                                <li><a class="dropdown-item" href="../resources/views/hotel.blade.php">桃園/新竹/台中旅館</a></li>
                                <li><a class="dropdown-item" href="../resources/views/hotel.blade.php">台南/高雄旅館</a></li>
                                <li><a class="dropdown-item" href="../resources/views/hotelManagement.blade.php">旅館管理</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>