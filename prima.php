<?php

    $result = '';
    $input = $_POST['input'];
    
    for($i=0; $i<=$input; $i++){

        if($i==2){
            $result .= $i.'<br>';
            continue;
        }

        if($i % 2 == 0){
            $result .= $i.'<br>';
        }
    }

    echo $result;

?>