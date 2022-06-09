<?php

$arr = [1,2,3,6,7,9,11,12,14,15,17,19,21,22,23,24,25,26,27];

function problemaRangos($array){

    $temporal = [];

    $resultado = [];

    for($i = 0; $i < sizeof($array); $i++){

        if($i == 0){
            
            $temporal[] = $array[$i];

        }else{

            if((abs($array[$i]) - abs($array[$i - 1])) == 1){

                $temporal[] = $array[$i];

                if($i == sizeof($array) - 1){
                    
                    $resultado[] = $temporal[0]."-".end($temporal);
                
                }
         
            }else{

                $resultado[] = (sizeof($temporal) == 1) ? $temporal[0] : $temporal[0]."-".end($temporal);

                $temporal = [];

                $temporal[] = $array[$i];

            }

        }

    }

    return implode(',',$resultado);
}

echo problemaRangos($arr);

?>