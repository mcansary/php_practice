<?php
//課題1
$name = "りさ";
if ($name == "りさ") {
    echo "私は" . $name . "です";
} else {
    echo $name . "ではありません";
}

//課題2
$total = 0;
echo $total;
for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;

//課題3
$fruits = array("peach", "banana", "apple", "strawberry", "orange");
foreach($fruits as $fruit){
    echo $fruit;
    echo "\n";
}

//課題4
$start = 1;
$end = 100;
for($i = $start; $i <= $end; $i++){
    if($i % 5 == 0){
        echo $i;
    }
}