<!DOCTYPE html>
<html>
  <head>
    <meta charset="ustf-8">
    <link rel="stylesheet" type="text/css" href="../css/general.css">
    <!-- <link rel="stylesheet" type="text/css" href="../css/bootstrap.css"> -->
    
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/navbars/">


    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <header class="head">
      <div class="logo">
        <img src="../icon/logo.png" width="200px">  <!-- 點擊可以跳回首頁 -->
      </div>
      <div class="module_pages">
        <div class="dropdown">
          <button class="dropbtn">航班</button>
          <div class="dropdown-content">
            <a href="C:\xampp\htdocs\SE_Finalproject\EpidemicHelper\resources\views\Flightadd.html">航班資訊</a>
          </div>
        </div>



         <div class="dropdown">
          <button class="dropbtn">防疫等級</button>
          <div class="dropdown-content">
            <a href="#">防疫等級清單</a>
          </div>
        </div>

        <div class="dropdown">
          <button class="dropbtn">旅館</button>
          <div class="dropdown-content">
            <a href="#">北部旅館</a>
            <a href="#">中部旅館</a>
            <a href="#">南部旅館</a>
          </div>
        </div>
      </div>
      <div class="login_logout">
        <button>登出</button> <!-- 1.登出後 2.跳回首頁 -->
      </div> 

    </header>

    <title>旅館新增</title>
    <h1>旅館新增</h1>
    <h4>在此新增旅館</h4>
        <br />
        

        <div class="queryform">
        <form action="signup" method="post">
            旅館名稱: <input type="text" placeholder="請輸入旅館名稱..." name="hotel" required/><br/>
            <label>旅館區域
              <select name="Level" maxlength ="3" required></label>
              <option value="">區域</option>
              <option value="1">北部旅館</option>
              <option value="2">中部旅館</option>        
              <option value="3">南部旅館</option>
              </select><br/>
            旅館網址: <input type="url" name="url" required /><br/>
        
            <br />
            <input type="submit" value="送出"/><input type="reset" value="取消"/><br/>
            </form>
          </div>

          <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>