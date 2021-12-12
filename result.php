<?php
    if(isset($_POST['submit'])){  
    $sideA = $_POST['sideA'];
    $sideB = $_POST['sideB'];
    $sideC = $_POST['sideC'];    
     } 
    if(!is_numeric($sideA) || !is_numeric($sideB) || !is_numeric($sideC)){
     
        $error_result = "Операнды должны быть числами"; // инициализируем переменную с ошибкой
    }
    
    $Cube = "Ничего";
    $V = $sideA * $sideB * $sideC;    
    if($sideA == $sideB && $sideA == $sideC){
    $Cube = "The object is a cube";
    }
    else{
    $Cube = "The object is not a cube";
    }
    $result = $V;
    
    if(isset($error_result)) {
    echo "Ошибка: $error_result";
        }    
    else {
    echo "V = $result, $Cube";
    }
?>          
                     
    
