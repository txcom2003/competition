<?php

function regen($old_regen_time, $old_hp) {
    $output = array('regen_time' => 0,
                    'hp' => 0,               
    );
    
    $now = time();
    $time_length = $now - $old_regen_time;
    $regen_time = 60*45;
    $regen_amount = floor($time_length / $regen_time);
    $output['hp'] = $old_hp + $regen_amount;
    if($output['hp'] > 100) {
        $output['hp'] = 100;
    }
    
    $output['regen_time'] = $old_regen_time + ($regen_time*$regen_amount);
    
    return $output;
    
}

?>

<?php 

    $old_regen_time = time() - (60*90) - 1;
    $old_hp = 100;
    $regen_data = regen($old_regen_time, $old_hp);
    
    echo sprintf('old_regen_dt:%s, regen_dt:%s , hp:%d',date('Y-m-d H:i:s', $old_regen_time),  date('Y-m-d H:i:s',$regen_data['regen_time']), $regen_data['hp']) ;

?>