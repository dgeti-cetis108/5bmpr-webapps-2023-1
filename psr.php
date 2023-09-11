<?php

// PSR: PHP Standards Recommendations
// PSR-1
// Cuando el archivo solo contenga código PHP
// no es necesario cerrar la etiqueta ? >

// Nombre de la clase con formato PascalCase ó StudlyCaps
class SmartPhone
{
    // Propiedades con formato PascalCase ó StudlyCaps
    public $Brand;
    public $Model;
    public $Weight;
    public $ScreenSize;
    public $Warranty;
    public $Price;

    // Métodos y argumentos con formato camelCase
    public function call(int $phoneNumber) {}
    public function takePicture() {}
}