<?php
//operador
    $a = 5 ==5.0;
    var_dump($a);
?>
<?php

//operador identico
    $a = 5 ===5.0;
    var_dump($a);
?>

<?php
//operador desigualdad
    $a = 5 != 7;
    //$a = 5 <> 7;
    var_dump($a);
?>

<?php
//operador comparacion
    $a = 5 >= 5;
    //<menor que,< mayor que,
    var_dump($a);
?>

<?php
//spaaceship
    $a = 5 <=> 5;
    var_dump($a);
?>

<?php
//not
    $a = !(5>10);
    var_dump($a);
?>

<?php
//and
    $a = 5 > 3 && 4 < 10;
    var_dump($a);
?>

<?php
//or
    $a = 5 > 3 ||  4 < 10;
    var_dump($a);
?>