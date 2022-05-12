<?php
    function timgiatri($array){
        for($i=0;$i<count($array);$i++){
            for($j = $i; $j<count($array);$j++){
                if($array[$i]<$array[$j]){
                    $temp = 0;
                    $temp = $array[$i];
                    $array[$i] = $array[$j];
                    $array[$j] = $temp;
                }
            }
        }
        return array_slice($array,0,5);
    }
// test case 2
    function timphantu($array){
        $tinh=[];
        for($i=0;$i<count($array);$i++){
            $tinh[$i] = 0;
            for($j=$i;$j<count($array);$j++){
                $tinh[$i]++;
            }
        }
        //show số lần nhiều nhất
        for($i=0;$i<count($array);$i++){
            if($tinh[$i] == 3){
                $layramang = '';
                $layramang = $array[$i];

                if($array[$i] === null){
                    $array[$i] = 'null';
                }
                if($array[$i] === true){
                    $array[$i] = 'true';
                }
                if($array[$i] == "hello"){
                    $array[$i] = 'hello';
                }
                if($array[$i] == "up"){
                    $array[$i] = 'up';
                }
                if($array[$i] == "down"){
                    $array[$i] = 'down';
                }
                if($array[$i] == "left"){
                    $array[$i] = 'left';
                }
                if($array[$i] == "right"){
                    $array[$i] = 'right';
                }
                if($array[$i] === false){
                    $array[$i] = 'false';
                }
                return $array[$i];
            }
        }
    }
?>