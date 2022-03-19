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

    <!-- 查詢區塊 -->
    <form id="form1" method="GET" action="">
    <div class="login_form row">
        <div class="login_label">航班查詢</div>
        <!-- 查詢欄位 -->
        <select class="form-select" name="airport"><!--name不能改-->
            <option selected>選擇目的地</option>
                    @foreach($airport as $article)
                        <option value={{ $article->airport_id}}>
                                {{ $article->airport_name}}
                        </option>
                    @endforeach
        </select>
        <input type="text" name="year" required><!--name不能改-->
        <input type="text" name="month" required>
        <input type="text" name="day" required>

        <div class="btn_group">
            <button type="submit" class="btn btn-primary btn_login">查詢</button>
        </div>
    <!--
        @foreach($sicks as $sick)
            疫情名稱 :{{ $sick->severity_level }}  
                <p> 疫情等級 :{{ $sick->alert_disease }} </p>
        @endforeach
    -->

       
<br>

<!--
    @foreach($sicks as $sick)
        疫情名稱 :{{ $sick->severity_level }}  
            <p> 疫情等級 :{{ $sick->alert_disease }} </p>
        
       
@endforeach
-->

    



    </div>
    </form>

    <div class="row">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">疫情名稱</th>
          <th scope="col">疫情等級</th>
          <th scope="col">發布日期</th>
        </tr>
      </thead>
      <tbody>
      @foreach($severitys as $severity)
        <tr>    
          <td>{{ $severity->severity_level }}</td>
          <td>{{ $severity->alert_disease }}</td>
          <td>{{ $severity->year_id }}/{{ $severity->month_id}}/{{ $severity->day_id}}</td>              
    </tr>
    @endforeach
       

      </tbody>
    </table>

<table class="table">
      <thead>
        <tr>

          <th scope="col">航空公司</th>
          <th scope="col">班次編號</th>
          <th scope="col">起飛日期</th>
          <th scope="col">起飛時間</th>
          <th scope="col">狀態</th>
        
        </tr>
      </thead>
<!--模板
      <th scope="col">#</th>
          <th scope="col">航空公司</th>
          <th scope="col">班次編號</th>
          <th scope="col">城市縮寫</th>
          <th scope="col">城市中文</th>
          <th scope="col">表訂時間日期</th>
          <th scope="col">狀態</th>
          <th scope="col">防疫等級</th>
          <th scope="col">疾病名稱</th>

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
          <td>肺炎</td>

    -->


      <tbody>

      @foreach($flights as $article)
     

        <tr>
          <td>{{ $article->company_name}}</td>
          <td>{{ $article->airplane_id }}</td>
          <td>{{ $article->year_id}}/{{ $article->month_id}}/{{ $article->day_id}}</td>
          <td>{{ $article->time_id}}</td>
          <td>{{ $article->status}}</td>
    </tr>
          @endforeach 
      </tbody>
    </table>
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
 
</html>