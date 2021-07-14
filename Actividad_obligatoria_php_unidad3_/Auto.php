<?php
class Auto{ 
    
    private $marca;
    private $modelo; 
    private $color;
    private $patente;
    private $precio;

    public function setMarca($marca){ 
        $this->marca = $marca;
    }
    
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function setColor($color){
        $this->color = $color;
    }
 
    public function getMarca(){
        return $this->marca;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function getColor(){
        return $this->color;
    }

    public function getPatente(){
        return $this->patente;
    }

    public function getPrecio(){
        return $this->precio;
    }

    function __construct($marca, $patente, $precio){
        $this->marca = $marca; 
        $this->patente = $patente; 
        $this->precio = $precio;
    }

}
?>