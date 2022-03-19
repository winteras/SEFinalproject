<!DOCTYPE html>
<html>
  <head>
    <meta charset="ustf-8">
    <link rel="stylesheet" type="text/css" href="../css/general.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
    <script src="https://combinatronics.com/LokiYuan/fn_FoolProof/master/Foolproof.js"></script>




    <title>防疫等級清單</title>
    
    <style>
      section{
        padding: 30px;
      }

    </style>

  </head>

  <!-- body -->
  <body>
  <!-- menu -->
  <div id="index_menu" class="relative"></div>   
  
  <section>
    <h1>防疫等級清單</h1>
    
<form action="" method="GET" class="input-group">
<input type="search" class="form-control" name="query" placeholder="Search">

</form>
    <div class="main">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">疾病名稱</th>
            <th scope="col">國家/區域</th>
            <th scope="col">疫情等級</th>
            <th scope="col">發佈日期</th>
          </tr>
        </thead>

        <tbody>
        @foreach ($sicks as $sick)
          <tr>
            <td >
                {{ $sick->count()}}
            </td>
            <td >
                {{ $sick->severity_level }}
            </td>
            <td >
                {{ $sick->country_name }}
            </td>
            <td >
                {{ $sick->alert_disease }}
            </td>
            <td >
                {{ $sick->year_id }}/{{ $sick->month_id }}/{{ $sick->day_id }}
            </td>
          </tr>    
        @endforeach
        </tbody>
      </table>  
    </div>
    </section>

    <!-- 載入很多東西 -->
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
                

  <!-- 分頁 -->
  <div>
      {{$sicks->links()}}
  </div>

</html>
