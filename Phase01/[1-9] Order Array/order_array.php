<?php

//input : 1 -> 2 -> 3 -> 4 -> 5
//output : 1 -> 5 -> 2 -> 4 -> 3

function OrderArray($arr = array()) {
    $output = array();
    $toggle = false;
    $element_cnt = count($arr);
    $left_counter = 0;
    $right_counter = 0;
    
    for($i=0;$i<$element_cnt;$i++) {
        if($toggle != true) {
            $output[] = $arr[$left_counter];
            $left_counter++;
            $toggle = true;
        } else {
            $output[] = $arr[$element_cnt - $right_counter - 1];
            $right_counter++;
            $toggle = false;
        }
    }
    
    return $output;
}

$input = array(1,2,3,4,5);
echo sprintf('input: %s ', implode(' ',$input));
$output = OrderArray($input);
echo sprintf('output: %s ', implode(' ',$output));

?>