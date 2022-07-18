
<?php
echo "Ciclo While";
echo "<br/>";
// ciclo while....
$numero = 0;
while( $numero < 10 ) {
    echo "<br/>";
    echo "El número actual es: " . $numero;
    $numero = $numero + 1;
}
echo "<br/>";
echo "Finalizo....";
//while do
?>

<?php
echo "Do While";
echo "<br/>";

$numero = 0;
do{
    echo $numero. "<br/>";
    $numero = $numero + 1;
}while($numero < 18);
?>