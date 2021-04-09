<?php

echo "Hola Mundo!";
echo "<br>";
echo "Esto funciona de maravilla!";

$nombre = "Juan";
echo "<br>" . $nombre;

$nombre = "Ahora soy Pepe";
echo "<br>" . $nombre;

echo "<br>\nOculto un caracter especial"; // Con comillas simples no oculta caracteres especiales

$nombre = 276;
if($nombre =="276")
{
	echo "<br>El numero es correcto";	
}

$nombre = "Concateno " . "una cadena"; //Concateno cadenas con operador .
echo "<br>" . $nombre;

echo "<br>";
$vec = array(1,2,"3",4);
var_dump($vec);

echo "<br>";
foreach($vec as $item)
{
	echo $item.  "<br>";
}

$vector_asoc = array("uno" => 1); // Puedo acceder por nombre 
echo $vector_asoc["uno"];

array_push($vec, "19");
var_dump($vec);

?>