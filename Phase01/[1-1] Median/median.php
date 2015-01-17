<?php

function generate_input($min, $max, $length) {
    $output = array();
    
    for($i=0;$i<$length;$i++) {
        $output[] = mt_rand($min, $max);
    }
    
    return $output;
}

function sort_input($input = array() ) {
    $output = $input;
    sort($output);
    return $output;
}

function median($input = array() ) {
    $output = null;
    
    $even = (count($input) % 2 == 0) ? true : false ;
    if($even) {
        // Even
        $middle_idx = count($input) / 2;
        $output = ($input[$middle_idx-1]+$input[$middle_idx])/2;
    } else {
        // Odd
        $middle_idx = floor(count($input)/2);
        $output = $input[$middle_idx];
    }
    
    return $output;
}
?>

// Generate Input Data
<?php 

$input = generate_input(1,5,3);
echo sprintf('input: %s', implode(',',$input));

?>
// Sort Input Data
<?php

$data = sort_input($input);
echo sprintf('sort: %s', implode(',',$data) );

?>

//　Get Median
<?php
$median_output = median($data);
echo $median_output;
?>






