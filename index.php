<?php 
    $mass = [1,2,3,4,5,6,7,8,9,0,10];
    echo 'Исходные данные: '.json_encode($mass);

    $min_i = $max_i = 0;   
    $min = $max = $mass[0] + $mass[1];
    for ($i = 0; $i < counts($mass); $i++){
        if ($i != counts($mass) - 1){
            if ($max < $mass[$i] + $mass[$i+1]){
                $max_i = $i;
                $max = $mass[$i] + $mass[$i+1];
            }            
        }
        if ($i != 0){
            if ($min > $mass[$i] + $mass[$i-1]){
                $min_i = $i;
                $min = $mass[$i] + $mass[$i+1];
            } 
        }

    }
    
    echo '<br>Ответ: '.json_encode($mass);
    echo '<br>Max: '.$max.'; position: '.$max_i;
    echo '<br>Max: '.$min.'; position: '.$min_i;

    function counts($mass){
        $i = 1;            
        while ($mass[$i].'' != ''){
            $i++;
        }
        return $i;
    }
?>