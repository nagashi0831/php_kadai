<?php
$height=201;
if($height<150){
    echo "150cm未満の方はご乗車になれません";
}else if($height>=200){
    echo "200cm以上の方はご乗車になれません";
}else{
    echo "ご乗車ありがとうございます";
}

$weekday="月曜";
switch($weekday){
    case"月曜":
        echo"可燃ごみの日です";
        break;
    case"水曜":
        echo"資源ごみの日です";
        break;
    default:
        echo"回収はありません";
        break;
}
$total=0;
echo $total;
for($i=0;$i<=100;$i++){
    $total+=$i;
}
echo $total;