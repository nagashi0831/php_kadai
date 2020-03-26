<?php
//課題1
function two($a){
    $result = $a*2;
    return $result;
}
echo two(3);
echo "\n";

//課題2
function f($a,$b){
    $result = $a + $b;
    return $result;
}
echo f(2,3);
echo "\n";

//課題3
function array_f($arr){
    $value = 1;
    foreach($arr as $a){
        $value = $value * $a;
    }
    return $value;
}
//array()に任意の数値を代入
echo array_f(array(1,3,5,10,10));
echo "\n";

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
//array()に任意の数値を代入
echo max_array(array(1,4,2,3,8,4));
echo "\n";

//課題5
$text = '<p>Test paragraph.</p>
<a href="#fragment">Other text</a>';
//タグを除去
echo strip_tags($text);
echo "\n";

$fruits = ["apple","orange","banana"];
//要素を追加
array_push($fruits,"melon","pineapple");
print_r($fruits);

$items1 = ['item1', 'item2', 'item3'];
$items2 = ['item4', 'item5'];
$items3 = ['item6', 'item7'];
//配列を結合
$item_merge = array_merge($items1, $items2, $items3);
print_r($item_merge);

echo "現在のUNIXタイムスタンプ".time();

//指定した日時のタイムスタンプを取得
$timestamp = mktime(0, 0, 0, 3, 25, 2020);
echo $timestamp;
echo "\n";

echo date( "2020/3/25");
//明日質問！！
