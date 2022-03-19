<!DOCTYPE html>
<html>
  <head>
    <meta charset="ustf-8">
    <link rel="stylesheet" type="text/css" href="../css/general.css">
    <!-- <link rel="stylesheet" type="text/css" href="../css/bootstrap.css"> -->
    <title>旅館管理系統</title>
  </head>
  
  <body>

    <header class="head">
      <img src="../icon/logo.png" width="200px">  <!-- 點擊可以跳回首頁 -->
      <div class="module-pages">
        <button class="flight">航班</button>
        <button class="serverity-level">防疫等級</button>
        <button class="hotel">旅館</button>
        <button class="login-logout">登出</button> <!-- 1.登出後 2.跳回首頁 -->
      </div>
    </header>
       
    <h1>旅館管理系統</h1>
    <div class="main">
      <button class="addition">新增</button>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">圖片網址</th>
            <th scope="col">旅館名稱</th>
            <th scope="col">旅館超連結</th>
            <th scope="col">管理</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>圖片網址</td>
            <td>名稱</td>
            <td>http://...</td>
            <td>
              <button class="update">修改</button>
              <button class="delete">刪除</button>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>圖片網址</td>
            <td>名稱</td>
            <td>http://...</td>
            <td>
              <button class="update">修改</button>
              <button class="delete">刪除</button>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>圖片網址</td>
            <td>名稱</td>
            <td>http://...</td>
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

    <div class="pages">
      <a href="" class="previous-page">上一頁</a>
      <a href="">1</a>
      <a href="">2</a>
      <a href="">3</a>
      <a href="" class="next-page">下一頁</a>
    </div>

  </body>
</html>