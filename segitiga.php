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
    
    for($i=0; $i<strlen($input); $i++){

        $zero = '';
        for($x=0; $x<$i+1; $x++){
            $zero .= '0';
        }

        $result .= $input[$i].$zero.'<br>';
    }

    echo json_encode([
        'success' => true,
        'result' => $result
    ]);

?>