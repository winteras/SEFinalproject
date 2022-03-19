<!DOCTYPE html>
<html>
  <head>
    <meta charset="ustf-8">
    <link rel="stylesheet" type="text/css" href="../css/general.css">
    <!-- <link rel="stylesheet" type="text/css" href="../css/bootstrap.css"> -->
    <title>防疫等級清單</title>
  </head>

  <body>

  <h1>防疫等級清單</h1>
    <div class="main">
      <table class="table">
        <thead>
          <tr>
            
            <th scope="col">飯店名稱</th>
            <th scope="col">區域</th>
            <th scope="col">網址</th>
            

          </tr>
        </thead>
        <tbody>
                                @foreach ($hotels as $hotel)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $hotel->hotel_name }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        {{ $hotel->city_name }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            
                                            <a href={{ $hotel->hotel_link }} target="_blank">{{ $hotel->hotel_link }}</a>
                                        </td>

                                       
                                @endforeach
                                </tbody>
                                        </body>
                                        </table>    
    </div>
</html>