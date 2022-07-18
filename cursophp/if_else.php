<?php
//estructuras de control
    $n1 = 7;
    $n2 = 13;
    if($n1 > $n2){
        echo "$n1 es mayor a $n2";
    }
    else{
        echo "$n1 es menor a $n2";
    }
?>
<?php
//estructuras de control
    $n1 = 7;
    $n2 = 13;
    if($n1 > $n2){
        echo "$n1 es mayor a $n2";
    }
    elseif($n1 == $n2) {
        echo "$n1 es igual a $n2";
    }

    else{
        echo "$n1 es menor a $n2";
    }
?>