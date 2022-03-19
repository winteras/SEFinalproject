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
    <title>航班查詢</title>
    <style>
      section{
        padding: 30px;
      }
      form{
        display: flex;
        /* flex-direction: row; */
      }
      .form-div{
        display: flex;
        flex-direction: row;
        padding: 5px;
        text-align: center;
      }
    </style>
    
  </head>
   
  <body>


    <!-- 菜單 -->
    <div id="index_menu" class="relative"></div>   
    <section>
    <h1>航班搜尋</h1>

    <div class="queryform">
    <form action="signup" method="post">
      <div class="form-div">
        <div>目的地：</div>
          <select type="text" placeholder="請選擇目的地" required>
        <div>起程時間：</div>
          <input type="datetime-local" placeholder="去程日期/回程日期"required>

       <!-- 出發地: <select name="Departure">
          <option value="A">台灣</option>
          <option value="B">日本</option>
          <option value="C">美國</option>
          <option value="D">中國</option>
        </select> <nobr/>
       
       
        目的地: <select name="destination">
          <option value="A">台灣</option>
          <option value="B">日本</option>
          <option value="C">美國</option>
          <option value="D">中國</option>
        </select> <nobr/>
        去程回程日期: <input type="date" name="date"/><nobr/>
        -->
          <input type="submit" value="搜尋"/>
        </div>

        </form>
      </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">航空公司名稱</th>
          <th scope="col">班次編號</th>
          <th scope="col">城市縮寫</th>
          <th scope="col">城市中文</th>
          <th scope="col">表訂時間日期</th>
          <th scope="col">狀態</th>
          <th scope="col">防疫等級</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>中華航空</td>
          <td>CI 0501</td>
          <td>台北(桃園) -> 上海(浦東)</td>
          <td>TPE</td>
          <td><script type="text/javascript">
            var myDate = new Date();
            document.write(myDate.toLocaleString())
            </script></td>
          <td>on time</td>
          <td>第一級</td>

        <tr>
            <th scope="row">2</th>
            <td>中華航空</td>
            <td>CI 0501</td>
            <td>台北(桃園) -> 上海(浦東)</td>
            <td>TPE</td>
            <td><script type="text/javascript">
              var myDate = new Date();
              document.write(myDate.toLocaleString())
              </script></td>
            <td>on time</td>
            <td>第一級</td>

            <tr>
              <th scope="row">3</th>
              <td>中華航空</td>
              <td>CI 0501</td>
              <td>台北(桃園) -> 上海(浦東)</td>
              <td>TPE</td>
              <td><script type="text/javascript">
                var myDate = new Date();
                document.write(myDate.toLocaleString())
                </script></td>
              <td>on time</td>
              <td>第一級</td>

              <tr>
                <th scope="row">4</th>
                <td>中華航空</td>
                <td>CI 0501</td>
                <td>台北(桃園) -> 上海(浦東)</td>
                <td>TPE</td>
                <td><script type="text/javascript">
                  var myDate = new Date();
                  document.write(myDate.toLocaleString())
                  </script></td>
                <td>on time</td>
                <td>第一級</td>
              </tr>
      </tbody>
    </table>
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
</html>