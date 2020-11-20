<?php


function selection_sort($data)
{
    for ($i = 0; $i < count($data); $i++){
        $min = $i;
        for ($j = $i + 1; $j < count($data); $j++) {
            if ($data[$j] < $data[$min]){
                $min = $j;
        }

        }
        $data = swap_positions($data,$i, $min);
    }
   return $data;
}

function swap_positions($data1, $left, $right){
    $backup = $data1[$right];
    $data1[$right] = $data1[$left];
    $data1[$left]  = $backup;
    return $data1;
}

$arr = array(1,9,4.5,6.6,5.7,-4.5);
echo "Original Array :\n";
echo implode(',',$arr);
echo "\nSorted Array :\n";
echo implode(',',selection_sort($arr)).PHP_EOL;

