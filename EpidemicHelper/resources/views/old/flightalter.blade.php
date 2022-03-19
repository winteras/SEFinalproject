<!DOCTYPE html>
<html>
  <head>
    <meta charset="ustf-8">
    <link rel="stylesheet" type="text/css" href="../css/general.css">
    <!-- <link rel="stylesheet" type="text/css" href="../css/bootstrap.css"> -->
  </head>
   
  <body>

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

    <title>航班修改</title>
    <h1>航班修改</h1>
    <h4>在此修改航班</h4>
        <br />
        

        <div class="queryform">
        <form action="signup" method="post">
            航班: <input type="text" name="flight"  pattern="[a-zA-Z0-9]{6}" required /> <br/>
            機場: <input type="text" name="airport" pattern="[a-zA-Z]{3}" required/><br/>
            時間: <input type="datetime-local" name="time"required /><br/>
            <label>防疫等級
              <select name="Level" maxlength ="3" required></label>
              <option value="">級別</option>
              <option value="1">第一級</option>
              <option value="2">第二級</option>        
              <option value="3">第三級</option>
              </select>
            
            <br />
            <input type="submit" value="送出"/><input type="reset" value="取消"/><br/>
            </form>
          </div>
  </body>
</html>