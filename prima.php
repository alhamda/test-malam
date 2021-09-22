<?php
    error_reporting(1);

    $result = '';
    $input = $_POST['input'];
    
    if(empty($input)){
        echo json_encode([
            'success' => false,
            'message' => 'Mohon lengkapi data terlebih dahulu',
        ]);
        die();
    }

    for($i=1; $i<=$input; $i++){

        $a = 0;
        for($x=1; $x<=$i; $x++){
            if($i % $x == 0){
                $a++;
            }
        }

        if($a == 2){
            $result .= $i.'<br>';
        }
        
    }

    echo json_encode([
        'success' => true,
        'result' => $result
    ]);

?>