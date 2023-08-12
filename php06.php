<?php
//課題1
function double($number) {
    return $number * 2;
}
echo double(50);

//課題2
function sumab($a, $b){
    return $a + $b;
}
echo sumab(150, 200);

//課題3
function total($arr){
    $result = $arr[0]; 
    for ($i = 1; $i < count($arr); $i++) {
            $result *= $arr[$i];
    }
    return $result;
}
echo total(array(1, 3, 5 ,7, 9));

//課題4
function max_array($arr){
  $max_number = $arr[0];
  foreach($arr as $a){
    if($max_number < $a){
         $max_number = $a;
     }
  }
  return $max_number;
}
echo max_array(array(80, 56, 73, 101, 35));

//課題5「strip_tags」
$text = '<h1>strip_tags関数</h1>' . '<p>タグを取り除く</p>';
echo strip_tags($text);

//課題5「array_push」
$colors = ['blue', 'pink', 'red'];
array_push($colors, 'orange', 'green', 'yellow');
print_r($colors);

//課題5「array_merge」
$array1 = [1, 2, 3];
$array2 = [11, 22, 33];
$array3 = [111, 222, 333];
$array_123 = array_merge($array1, $array2, $array3);
print_r($array_123);

//課題5「time」
$timestamp1 = time();
echo date("Y/m/d", $timestamp1);

//課題5「mktime」
$timestamp2 = mktime(16,15,30, 8, 12, 2023);
echo $timestamp2;

//課題5「date」
echo date('Y年m月d日 H時i分s秒');