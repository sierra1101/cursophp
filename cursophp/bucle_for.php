<?php

    //ciclo for
    /*
    echo "Hola menor";
    echo "Hola menor";
    echo "Hola menor";
    echo "Hola menor";
    echo "Hola menor";
    echo "Hola menor";
    echo "Hola menor";
    echo "Hola menor";
    echo "Hola menor";
    echo "Hola menor";
    */

    // hola menor
    for ($i=0; $i<=10 ; $i++) {
        echo "Hola menor <br/>";
    }

    // numeros del 1 al 20
    for ($numero=1; $numero<=20; $numero++) {
        echo $numero . "<br/>";
    }

    // numeros del 1 al 30 de 2 en 2
    for ($numero=1; $numero<=20; $numero=$numero+2) {
        echo $numero . "<br/>";
    }


echo "-----------------------";

    // numeros del 1 al 30 de 2 en 2
    for ($numero=1; $numero<=20; $numero+=2) {
        echo $numero . "<br/>";
    }

