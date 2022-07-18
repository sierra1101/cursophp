<?php
//arrays varible almacena mas de un dato
    $numeros[0]='uno';
    $numeros[1]='dos';
    $numeros[2]='tres';
    $numeros[3]='cuatro'; 
    echo $numero[1];
?>
<?php
//arrays varible almacena mas de un dato
    $numeros = array(1,2,3,4,5) ;
    echo $numero[1];
?>
<?php
//arrays asociativos
    $edad = array(
        'juan'=>11,
        'pedro'=>20,
        'david' => 35
    ) ;
    echo "<pre>";
    var_dump($edad);
    echo "<pre>";
?>
<?php
//arrays operaciones
    $numeros = [1,2,3,4,5,6,7,8];
    $suma = array_sum($numeros);
    echo $suma;
?>
<?php
//arrays 2parte
    $numeros = array(1,2,3,4,5,6,7,8);
    $numeros[] = 100;
    echo "<pre>";
    var_dump($numeros);
?>