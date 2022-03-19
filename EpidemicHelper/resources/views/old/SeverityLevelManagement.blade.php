<!DOCTYPE html>
<html>
  <head>
    <meta charset="ustf-8">
    <link rel="stylesheet" type="text/css" href="../css/general.css">
    <!-- <link rel="stylesheet" type="text/css" href="../css/bootstrap.css"> -->
    <title>防疫等級管理系統</title>
  </head>

  <body>

    <header class="head">
      <div class="logo">
        <img src="../icon/logo.png" width="200px">  <!-- 點擊可以跳回首頁 -->
      </div>
      <div class="module-pages">
        <button class="flight">航班</button>
        <button class="serverity-level">防疫等級</button>
        <button class="hotel">旅館</button>
      </div>
      <div class="login-logout">
        <button class="login-logout">登出</button> <!-- 1.登出後 2.跳回首頁 -->
      </div>
    </header>
       
    <h1>防疫等級管理系統</h1>
    <div class="main">
      <button class="addition">新增</button>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">防疫等級</th>
            <th scope="col">疾病名稱</th>
            <th scope="col">國家/區域</th>
            <th scope="col">發佈日期</th>
            <th scope="col">管理</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>第一級:注意(Watch)</td>
            <td>中東呼吸症候群冠狀病毒感染症</td>
            <td>阿拉伯聯合大公國</td>
            <td>2015-09-30</td>
            <td>
              <button class="update">修改</button>
              <button class="delete">刪除</button>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>第一級:注意(Watch)</td>
            <td>新型A型流感</td>
            <td>印度</td>
            <td>2021-08-13</td>
            <td>
              <button class="update">修改</button>
              <button class="delete">刪除</button>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>第二級:警示(Alert)</td>
            <td>茲卡病毒感染症</td>
            <td>印度</td>
            <td>2021-07-13</td>
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