<!DOCTYPE html>
<html>
  <head>
    <meta charset="ustf-8">
    <link rel="stylesheet" type="text/css" href="../css/general.css">
    <!-- <link rel="stylesheet" type="text/css" href="../css/bootstrap.css"> -->
    <title>防疫等級清單</title>
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

    <form id="form1" method="GET" action="">
<div class="login_form">
    <div class="login_label">疫情查詢</div>

    <select class="form-select" name="country"><!--name不能改-->
        <option selected>選擇國家</option>
        @foreach($country as $article)
                      <option value={{ $article->country_id}}>
                            {{ $article->country_name}}
                      </option>
                @endforeach
    </select>
    <div class="btn_group">
        <button type="submit" class="btn btn-primary btn_login">查詢</button>
    </div>

       
    <h1>防疫等級清單</h1>
    <div class="main">
      <table class="table">
        <thead>
          <tr>
            
            <th scope="col">防疫等級</th>
            <th scope="col">疾病名稱</th>
            <th scope="col">國家/區域</th>
            <th scope="col">發佈日期</th>

          </tr>
        </thead>
        <tbody>
       



        @foreach ($sicks as $sick)

                                    <tr>
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
                                        </td>
                                        <td >
                                            {{ $sick->year_id }}
                                        </td>
                                        <td >
                                            {{ $sick->month_id }}
                                        </td>
                                        <td >
                                            {{ $sick->day_id }}
                                        </td>  
                                        @endforeach

<!--
        @foreach($sicks as $article)  
          <tr>
          <td>{{$article->severity_level}}</td>
          <td>{{$article->alert_disease}}</td>
         
            <td> {{ $article->severity_level_id }}</td>
            <td>{{ $article->country_id }}</td>
            <td>{{ $article->year_id }}/{{ $article->month_id }}/{{ $article->day_id }}</td>
</tr>
          
         @endforeach
         
-->
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