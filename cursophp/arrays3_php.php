<?php
//arrays 2parte
    $color = array("rojo","verde","azul","amarillo");
    array_splice($color,2);
    echo "<pre>";
    var_dump($color);
?>
<?php
//arrays contar numeros
    $numeros = array(1,2,3,4,5,6);
    echo array_search(5,$numeros);   
    
?>
<?php
//fusionar elementos de los arrays 
    $nu1 =array (1, 2,3);
    $nu2 =array (4, 5, 6) ;
    $nu3 = array (7, 8, 9);
    $final = array_merge($nu1,$nu2,$nu3);
    echo "<pre>";
    var_dump($final);
?>
<?php
//ordenar elementos de los arrays 
    $nu1 =array (4, 2,1);
    $nu2 =array (7, 5, 6) ;
    $nu3 = array (9, 8, 3);
    $final = array_merge($nu1,$nu2,$nu3);
    asort($final);
    echo "<pre>";
    var_dump($final);
?>