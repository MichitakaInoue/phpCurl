<?php
ini_set('log_errors','on');  //ログを取るか
ini_set('error_log','php.log');  //ログの出力ファイルを指定



switch ($_GET['action']) {
  case 'show':
      $city = 'Sapporo'; // 札幌市
      $api_key = "1de0e8d859cb5c1799276bacfe97d31c";  // xxxに自分のAPI Keyを入力。

      $url = "http://api.openweathermap.org/data/2.5/weather?units=metric&q=".$city."&APPID=".$api_key;

      $conn = curl_init();
      curl_setopt($conn, CURLOPT_URL, $url);
      $res = curl_exec($conn);
      curl_close($conn);

      // 返り値の表示
      // echo $res;
      $data = json_encode($res);


      echo '観測点：'.$data['name']. '</br>';
      echo '時刻：'.date('Y/m/d H:i:s', $data['dt']). '<br>';
      echo '温度：'.$data->main->temp. '℃<br>';
      echo '湿度：'.$data->main->humidity. '%<br>';
      echo '気圧：'.$data->main->pressure. 'hPa<br>';
  break;

  case 'up':
      echo 'up';
  break;

  case 'down':
    echo 'down';
  break;

  case 'left':
    echo 'left';
  break;

  case 'right':
    echo 'right';
  break;



  default:
    // code...
    break;
}




// switch ($_GET) {
//   case 'show':
//     echo "{$show}だよ"
//     break;
//
//   default:
//     // code...
//     break;
// }

?>
