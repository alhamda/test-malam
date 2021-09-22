<?php

    $result = '';
    $input = $_POST['input'];
    
    if(empty($input)){
        echo json_encode([
            'success' => false,
            'message' => 'Mohon lengkapi data terlebih dahulu',
        ]);
        die();
    }

    for($i=0; $i<=$input; $i++){
        if($i % 2 != 0){
            $result .= $i.'<br>';
        }
    }

    echo json_encode([
        'success' => true,
        'result' => $result
    ]);

?>