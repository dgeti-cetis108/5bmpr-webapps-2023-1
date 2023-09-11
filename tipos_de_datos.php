<?php

// ¿como se define el tipo de dato en php?
// C# string cadena = "valor";
$cadena = "valor"; // por inferencia
// $cadena = 10; // esto es válido

$entero = 10;
$doble = 9.8;
$booleano = true;
$caracter = 'c';

var_dump($cadena);
var_dump($entero);
var_dump($doble);
var_dump($booleano);
var_dump($caracter);

$a = 9;
$b = $a;
$a++;
echo "b=".$b;

// Arrays (Matrices) basados en índices numéricos
// iniciar desde la posición hasta n 0..length-1
// Ej: Matriz para registrar preguntas (solo un tipo de dato cadena)
$pregunta1 = array("pregunta1?","resp1","resp2","resp3","resp2","Materia1");
$pregunta2 = ["pregunta2?","resp1","resp2","resp3","resp2","Materia1"];

// imprimir el nombre de la materia de la pregunta1?
echo "Materia de la pregutna1: ".$pregunta1[5];
echo "\n"; // solo funciona en la terminal
var_dump($pregunta1);

// Mixed arrays (matrices que admiten diferentes tipos de datos)
$mixed = [1, true, 10.8, "cadena"];
var_dump($mixed);

// internal arrays
$internal = [$pregunta1, $pregunta2, $mixed];
var_dump($internal);

// TODO: Associative Arrays