<?php
//課題１
$name="長島壮汰";
if($name="長島壮汰"){
    echo"私はあなたの名前です";
}else{
    echo"あなたの名前ではありません";
}
echo "\n";

//課題２
$total=0;
for($i=0;$i<=10000;$i++){
    $total+=$i;
}
echo $total;
echo "\n";

//課題３
$fruits=array("apple","banana","melon","lemon","grape");

foreach($fruits as $fruit){
    echo $fruit;
    echo "\n";
}

//課題4
$start=1;
$end=100;
for($i = $start; $i <= $end; $i++){
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}