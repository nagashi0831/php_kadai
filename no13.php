<?php
function sum($max){
    $result=0;
    for($i=0;$i<=$max;$i++){
        $result+=$i;
    }
    return $result;
}
echo sum(1000);
$string="ABCDef";
echo strlen($string);

$array=array(1,2,3,4,5,6,7,8,9,10);
echo count($array);
$array2=array(1,4,5,3,8,9,6,7,9);
asort($array2);
print_r($array2);
arsort($array2);
print_r($array2);

?>