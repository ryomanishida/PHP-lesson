<!-- http://localhost:8888/practice.php -->

本学習の環境構築に利用したやつ
MAMP(まんぷ)・・・Web開発のパッケージソフトで、これを使うことでMacをWebサーバーとすることができる？
  Mac
  Apach webサーバーソフト
  Mysql
  PHP
  便利だが必要最低限の装備なので仕事では使えなそう


<!-- PHPについて -->
- コンパイルが不要
  Cのように一括コンパイルするのではなく、実行時に一行ずつコンパイルしている。
  メリット　コーディング後すぐに動作確認できる点。こうしたものをインタプリンタ言語というらしい。
　また、コンパイラ言語の方がスクリプト言語より速度が早いらしい
- 自動で型の調整をしてくれるのでシンプルに書ける
- web制作に特化
- WordPressをPHPを書いて編集できる


<!-- 配列 -->
<!-- <?php
$user = array(
  'name' => '龍馬',
  'age' => 24,
  'gender' => 'men'
);
?> -->


<!-- foreach -->
<?php
$animals = array('dog','cat','camel');
foreach($animals as $animal){
  echo $animal.' ';
}

$scores = array('数学' => 70, '英語' => 90, '国語' => 80);
foreach($scores as $key => $value){
  echo $key.'は'.$value.'点です。';
}


echo gettype($animals).'<br>';
echo gettype($animal).'<br>';
echo gettype($value).'<br>';
?>

<!-- 組み込み関数 -->
<?php
  $str = 'mojisuu';
  echo strlen($str);

  $animals = array('犬', '猫', 'ラクダ');
  echo count($animals);

  echo rand(10,14);
?>

<!-- form -->
<from action= "データの渡し先url" method= "getかpost">
  <input type="text" name="email">
  <textarea name="content"></textarea>
  <select name="age">
    <option value="未選択" >選択してください</option>
    <option value="20代">20代</option>
    <?php 
      for($i = 0; $i <= 20; $i++){
        echo "<option value={'$i'}>$i</option>";
      }
    ?>
  </select>
  <input type="submit" value="送信">
</from>
method ・・・getの場合は送信される値がURLに表示され、postの場合はURLに表示されない

>>値の受け取り
$_POST['値']・・・中身が連想配列になっている