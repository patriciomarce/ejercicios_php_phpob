<?php
require("../claseheredada.php");

$auto1 = new Auto(" "," "," ");
$auto1->setMarca(" Ford Fiesta");
$auto1->setModelo(" Kinetic Titanium");
$auto1->setColor(" Rojo");

echo "La marca del auto nro 1 es" . "<b>" . $auto1->getMarca()."</b>";
echo "<br>";
echo "El modelo del auto nro 1 es" . "<b>" . $auto1->getModelo()."</b>";
echo "<br>";
echo "El color del auto nro 1 es" . "<b>" . $auto1->getColor()."</b>";
echo "<br>";
echo "<br>";

$auto2 = new Auto(" "," "," ");
$auto2->setMarca(" Toyota");
$auto2->setModelo(" Corolla Cross");
$auto2->setColor(" Azul");

echo "La marca del auto nro 2 es" . '<b>' . $auto2->getMarca().'</b>';
echo "<br>";
echo "El modelo del auto nro 2 es" . '<b>' . $auto2->getModelo().'</b>';
echo "<br>";
echo "El color del auto nro 2 es" . '<b>' . $auto2->getColor().'</b>';
echo "<br>";

?>