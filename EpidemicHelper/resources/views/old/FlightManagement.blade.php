<!DOCTYPE html>
<html>
  <head>
    <meta charset="ustf-8">
    <link rel="stylesheet" type="text/css" href="../../resources/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../resources/css/general.css"> 
    <title>航班管理系統</title>
  </head>
  
  <body>
    <header class="head">
      <div class="logo">
        <img src="../icon/logo.png" width="200px">  <!-- 點擊可以跳回首頁 -->
      </div>
      <div class="head-right">
        <div class="dropdown">
          <button class="dropbtn">航班</button>
          <div class="dropdown-content">
            <a href="C:\xampp\htdocs\SE_Finalproject\EpidemicHelper\resources\views\Flightsearch.html">航班資訊</a>
          </div>
          <button class="dropbtn">防疫等級</button>
          <div class="dropdown-content">
            <a href="#">防疫等級清單</a>
          </div>
          <button class="dropbtn">旅館資訊</button>
          <div class="dropdown-content">
            <a href="#">台北/新北/基隆 旅館</a>
            <a href="#">桃園/新竹/台中 旅館</a>
            <a href="#">台南/高雄 旅館</a>
          </div>
        </div>
        <div class="login_logout">
          <button>登出</button> <!-- 1.登出後 2.跳回首頁 -->
        </div>
      </div>  
    </header>
    
    <h1>航班管理系統</h1>
    <div class="main">
      <div class="container">
        <div class="addition">
          <button class="addition">新增</button>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">航空公司名稱</th>
              <th scope="col">航班編號</th>
              <th scope="col">出發 -> 目的城市</th>
              <th scope="col">目的地城市縮寫</th>
              <th scope="col">表定時間</th>
              <th scope="col">狀態</th>
              <th scope="col">防疫等級</th>
              <th scope="col">管理</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>中華航空</td>
              <td>CI0501</td>
              <td>台北(桃園) -> 上海(浦東)</td>
              <td>TPE</td>
              <td>12/10</td>
              <td>on time</td>
              <td>第一級</td>
              <td>
                <button class="update">修改</button>
                <button class="delete">刪除</button>
              </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>中華航空</td>
              <td>CI0501</td>
              <td>台北(桃園) -> 上海(浦東)</td>
              <td>TPE</td>
              <td>12/10</td>
              <td>on time</td>
              <td>第一級</td>
              <td>
                <button class="update">修改</button>
                <button class="delete">刪除</button>
              </td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>中華航空</td>
              <td>CI0505</td>
              <td>台北(桃園) -> 上海(浦東)</td>
              <td>TPE</td>
              <td>12/10</td>
              <td>arrived</td>
              <td>第一級</td>
              <td>
                <button class="update">修改</button>
                <button class="delete">刪除</button>
              </td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>中華航空</td>
              <td>CI0505</td>
              <td>台北(桃園) -> 上海(浦東)</td>
              <td>TPE</td>
              <td>12/10</td>
              <td>arrived</td>
              <td>第一級</td>
              <td>
                <button class="update">修改</button>
                <button class="delete">刪除</button>
              </td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>中華航空</td>
              <td>CI0505</td>
              <td>台北(桃園) -> 上海(浦東)</td>
              <td>TPE</td>
              <td>12/10</td>
              <td>arrived</td>
              <td>第一級</td>
              <td>
                <button class="update">修改</button>
                <button class="delete">刪除</button>
              </td>
            </tr>
            <tr>
              <th scope="row">6</th>
              <td>中華航空</td>
              <td>CI0505</td>
              <td>台北(桃園) -> 上海(浦東)</td>
              <td>TPE</td>
              <td>12/10</td>
              <td>arrived</td>
              <td>第一級</td>
              <td>
                <button class="update">修改</button>
                <button class="delete">刪除</button>
              </td>
            </tr>
            <tr>
              <th scope="row">7</th>
              <td>中華航空</td>
              <td>CI0505</td>
              <td>台北(桃園) -> 上海(浦東)</td>
              <td>TPE</td>
              <td>12/10</td>
              <td>arrived</td>
              <td>第一級</td>
              <td>
                <button class="update">修改</button>
                <button class="delete">刪除</button>
              </td>
            </tr>
            <tr>
              <th scope="row">8</th>
              <td>中華航空</td>
              <td>CI0505</td>
              <td>台北(桃園) -> 上海(浦東)</td>
              <td>TPE</td>
              <td>12/10</td>
              <td>arrived</td>
              <td>第一級</td>
              <td>
                <button class="update">修改</button>
                <button class="delete">刪除</button>
              </td>
            </tr>
            <tr>
              <th scope="row">9</th>
              <td>中華航空</td>
              <td>CI0505</td>
              <td>台北(桃園) -> 上海(浦東)</td>
              <td>TPE</td>
              <td>12/10</td>
              <td>arrived</td>
              <td>第一級</td>
              <td>
                <button class="update">修改</button>
                <button class="delete">刪除</button>
              </td>
            </tr>
            <tr>
              <th scope="row">10</th>
              <td>中華航空</td>
              <td>CI0505</td>
              <td>台北(桃園) -> 上海(浦東)</td>
              <td>TPE</td>
              <td>12/10</td>
              <td>arrived</td>
              <td>第一級</td>
              <td>
                <button class="update">修改</button>
                <button class="delete">刪除</button>
              </td>
            </tr>
          </tbody>

          <!-- <tfoot>
            <tr>
              <td>
                <rowgroup rowspan>
                  更新日期:
                </rowgroup>
              </td>
            </tr>
          </tfoot> -->
        </table>    
      </div>
    </div>

    <nav aria-label="Page navigation example">
      <ul class="pagination">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>
    </nav>
    <!-- <div class="pages">
      <a href="" class="previous-page">上一頁</a>
      <a href="page1">1</a>
      <a href="page2">2</a>
      <a href="page3">3</a>
      <a href="" class="next-page">下一頁</a>
    </div> -->
  </body>
</html>