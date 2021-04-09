<?php

    $array = array();

    for($i = 0; $i <= 4; $i++)
    {
        array_push($array,  rand (1, 10));
    }         

    echo "Array:" , '<pre>' , var_dump($array) , '</pre>';

    $resul = array_sum ($array) / 5;

    if($resul == 6)
    {
        echo "El promedio es igual a 6";
    }
    else if($resul < 6)
    {
        echo "El promedio es menor a 6";
    
    }
    else if($resul > 6)
    {
          echo "El promedio es mayor a 6";
    }  

?>