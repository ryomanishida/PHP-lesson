<!-- http://localhost:8888/practice.php -->

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