<?php

$arr = [2,3,2,5,6,1,-2,3,14,12];
$count = count($arr);
for ($i = 0; $i < $count; $i++){
    for ($j = $i +1; $j < $count; $j++){

        if ($arr[$i] > $arr[$j]){
            $temp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $temp;

        }
    }
}

for ($i = 0; $i < $count; $i++){
    echo $arr[$i]." ";
}


