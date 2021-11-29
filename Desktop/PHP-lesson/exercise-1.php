<html>
  <head><title>演習</title></head>
  <body>
    <?php
      // $date = $_POST['date'];
      // $date = new DateTime($date);
      // echo $date->format('Y/m/dは<b>l</b>です');

// 　for　と　continue　を使用して1から50までの数字の偶数を縦に表示してください。
      // for($i = 1; $i <= 50; $i++){
      //   if($i % 2 != 0){
      //     continue;
      //   }else{
      //     echo $i.'<br>';
      //   }
      // }


// for と continue を使用して1から50までの数字の奇数を縦に表示してください。
      // for($i = 1; $i <= 50; $i++){
      //   if($i % 2 == 0){
      //     continue;
      //   }else{
      //     echo $i.'<br>';
      //   }
      // }

// 連想配列
      $s_agency = [
        'usa' => 'nasa',
        'rosia' => 'roscosmos',
        'japan' => 'jaxa',
        'china' => 'cnsa',
        'indian' => 'isro'
      ];
      $s_agency['usa'] = 'spaceX';

      echo '1番目は' . $s_agency['usa'] . 'です<br>';
      echo '3番目は' . $s_agency['japan'] . 'です<br>';
      echo '4番目は' . $s_agency['china'] . 'です<br>';

      var_dump($s_agency);

      unset($s_agency['usa']);
      var_dump($s_agency);

// 連想配列のループ

    ?>
  </body>
</html>