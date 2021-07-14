<?php
include("Auto.php");

class Subclase extends Auto{

     function __construct($marca, $patente, $precio){
         parent::__construct($marca, $patente, $precio);
     }
}

$autito1 = new Subclase("Suzuki","YJS 745",900000);
echo "El autito nro 1 heredo la Subclase de marca: "  . "<b>" . $autito1->getMarca(). "</b>";
echo "<br>";
echo "El autito nro 1 heredo la Subclase de patente: "  . "<b>" . $autito1->getPatente(). "</b>";
echo "<br>";
echo "El autito nro 1 heredo la Subclase del precio: $" . "<b>" . $autito1->getPrecio(). "</b>";

echo "<br>";

$autito2 = new Subclase("Citroen","HXR 936",11000000);
echo "<br>";
echo "El autito nro 2 heredo la Subclase de marca: "  . "<b>" . $autito2->getMarca(). "</b>";
echo "<br>";
echo "El autito nro 2 heredo la Subclase de patente: "  . "<b>" . $autito2->getPatente(). "</b>";
echo "<br>";
echo "El autito nro 2 heredo la Subclase del precio: $" . "<b>" . $autito2->getPrecio(). "</b>";
echo "<br>";
echo "<br>";

?>