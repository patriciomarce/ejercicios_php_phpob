<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad unidad2 php</title>
</head>
<body align="center">
<h1 align="center">Bienvenidos al sistema</h1>
<br>
<br>



<?php 



$nombre = "Patricio";
$apellido = "Balena";
$edad = 37;
$hobbie = "Jugar al futbol";
$editor = "Visual Studio Code";
$sistema_operativo = "Windows 10";




echo "<b style= margin-left:-70px;>Nombre:</b> <b>$nombre</b>  <br>"; 
echo "<b style= margin-left:-75px;>Apellido:</b> <b>$apellido</b> <br>";
echo "<b style= margin-left:-125px;>Edad:</b> <b>$edad</b> <br>";
echo" <b style= margin-left:-28px;>Hobbie:</b> <b>$hobbie</b> <br> ";
echo "<b style= margin-left:130px;>Editor de código preferido:</b> <b>$editor</b> <br> ";
echo "<b style= margin-left:25px;>Sistema operativo:</b> <b>$sistema_operativo</b>";

$datos_personales= [
         [  
         "Nombre" => "Ruben",
         "Apellido" => "Fernandez",
         "Edad" => 45,
         "Hobbie" => "Escuchar musica",
         "Editor de código preferido" => "NotePad++",
         "Sistema_operativo" => "Linux"
         ],

        [         
            "Nombre" => "Hector",
            "Apellido" => "Perez",
            "Edad" => 55,
            "Hobbie" => "Cantar",
            "Editor de código preferido" => "Phpstorn",
            "Sistema_operativo" => "Linux"
        ],
        
        [         
            "Nombre" => "Ezequiel",
            "Apellido" => "Peralta",
            "Edad" => 60,
            "Hobbie" => "Andar en bicicleta",
            "Editor de código preferido" => "Visual Studio code",
            "Sistema_operativo" => "Windows10"
        ]
        
];


$persona_cuatro = [
    "Nombre" => "Marcelo",
    "Apellido" => "Lopez",
    "Edad" => 28,
    "Hobbie" => "Correr",
    "Editor de código preferido" => "Sublime text",
    "Sistema_operativo" => "Windows server"
];

$persona_cinco = [
    "Nombre" => "Federico",
    "Apellido" => "Werberg",
    "Edad" => 40,
    "Hobbie" => "Juego de mesa",
    "Editor de código preferido" => "Php sorn",
    "Sistema_operativo" => "Windows 8"
];



echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

for($i=0;$i<count($datos_personales);$i++){
    print_r($datos_personales[$i]); 
    echo "<br>";
}

echo "<br>";

echo "<br>";

foreach($persona_cuatro as $personas => $datos){

    echo "<b>$personas</b>" . ": " . $datos . "<br>";
}

echo "<br>";

foreach($persona_cinco as $personas => $datos){

    echo "<b>$personas</b>" . ": " . $datos . "<br>";
}

?>
</body>
</html>


