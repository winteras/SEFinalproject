<?php session_start(); ?>
<!DOCTYPE html>
<html>

<?php 
    /*
    $directory = "img/hotels";
    $images = glob($directory . "/*.jpg");

    foreach($images as $image)
    {
    echo $image;
    }
    */

    $directory = "img/hotels";
    //$hotel_img = glob($directory . "/*.jpg");
    $hotel_img = "img/hotels/hotel_1.jpg";
/*
    function displayHotelImg(){
    global $hotel_img;
    for ($i=0; $i<count($hotel_img); $i++) {
        // if（count($hotel_img)<count($hotel))
        echo "<img src='".$hotel_img[$i]."'>" . "<br>";
    }
    
    }

displayHotelImg();*/

?>


<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> 旅館資訊</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="./img/favicon.ico" />

    <!--Normalise CSS-->
    <link rel="stylesheet" type="text/css" href="libs/normalize.css">

    <!-- Font awesome 5.9-->
    <link rel="stylesheet" href="libs/fontawesome/css/all.css">

    <!--Bootstrap-->
    <link rel="stylesheet" href="./libs/bootstrap.min.css">

    <!--Material Design for Bootstrap -->
    <link rel="stylesheet" href="libs/mdb.min.css">

    <link rel="stylesheet" href="./libs/carousel/owl.carousel.css">

    <!--Style css-->
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" href="css/homestyle.css">

    <!--Media Query -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <style>
      section{
        padding: 30px;
      }
    </style>
</head>

<body>

    <!-- 菜單 -->
    <div id="index_menu" class="relative"></div>

    <!-- 飯店資訊區塊 -->
    <section id="trending" class="p-5">
        <h2 class="mb-5 font-weight-bold text-center">防疫旅館資訊</h2>

        <!-- 一橫列旅館 -->
        <div class="container">
            <div class="row">
            
            @foreach ($hotels as $hotel)
                <!-- 一間旅館的card -->
                <div class="col-md-4 mb-5">
                    <div class="card">
                        <!-- 飯店圖片 -->
                        <!--<img class="card-img-top" src="./img/trending/img01.jpeg" alt="Card image cap"/>-->
                        

                        <?php
                            $rand = rand(1,40);
                            $hotel_image = "img/hotels/hotel_" .  strval($rand) . ".jpg";
                        ?>

                        <img class="card-img-top" src="<?php echo $hotel_image; ?>" alt="Card image cap"/>

                        <!-- Card內容 -->
                        <div class="card-body">
                            <h4 class="card-title"><a>{{ $hotel->hotel_name }}</a></h4> <!-- 標題 -->
                            <p class="card-text">{{ $hotel->city_name }}</p> <!-- 小標 -->
                            <a href="{{ $hotel->hotel_link }}" class="btn btn-info float-right">查看更多</a> <!-- 按鈕 -->
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

        </div>

    </section>




    <!-- JQuery -->
    <script type="text/javascript" src="libs/jquery-3.4.1.min.js"></script>

    <!--Bootstrap JS-->
    <script src="libs/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="libs/mdb.min.js"></script>

    <!--Popper JS-->
    <script src="libs/popper.min.js"></script>

    <script src="libs/carousel/owl.carousel.min.js"></script>

    <!--Custom JS -->
    <script src="js/custom.js"></script>

    <!--Extra JS Libraries-->
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>


    <!-- 載入區塊 --> 
    <script>
        $(function () {
            $("#index_menu").load("vendor/indexMenu.php"); // 載入菜單
        });   
    </script>

</body>
<div>
      {{$hotels->links()}}
  </div>
</html>
