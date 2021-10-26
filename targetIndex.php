<?php

function targetIndex($array, $target) {
    $nearestValue = 0;
    $arrayLength = count($array);
    for ($n = 0; $n < $arrayLength; $n++) {        
        if (abs($target - $nearestValue) > abs( $target - $array[$n])) {
            $nearestValue = $array[$n]; // Update the value next to the Target
            $t = abs( $target - $array[$n]);
            $s = abs($target - $nearestValue);
        }
        if ($target < $nearestValue) {
            $nearestValue = $indexOfTarget +1;  // Update the value next to the Target
        }
        elseif ($target > $nearestValue) {
            $indexOfTarget = array_search($nearestValue, $array);
            $indexOfTarget = $indexOfTarget +1;
        }else {
            $indexOfTarget = array_search($nearestValue, $array);
        }        
    }
    echo "Index of Target = ".$indexOfTarget." Nearest value".$nearestValue;
}

$array = array(1,2,4,6,10);
// $target = 12;
// $target = 3;
// $target = 8;
// $target = 9;
// $target = 5;
$target = 2;
targetIndex($array, $target);

?>