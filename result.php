<?php
    if(isset($_POST['submit'])){  
    $sideA = $_POST['sideA'];
    $sideB = $_POST['sideB'];
    $sideC = $_POST['sideC'];    
     } 
    if(!is_numeric($sideA) || !is_numeric($sideB) || !is_numeric($sideC)){
     
        $error_result = "�������� ������ ���� �������"; // �������������� ���������� � �������
    }
    
    $Cube = "������";
    $V = $sideA * $sideB * $sideC;    
    if($sideA == $sideB && $sideA == $sideC){
    $Cube = "The object is a cube";
    }
    else{
    $Cube = "The object is not a cube";
    }
    $result = $V;
    
    if(isset($error_result)) {
    echo "������: $error_result";
        }    
    else {
    echo "V = $result, $Cube";
    }
?>          
                     
    
