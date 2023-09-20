<?php

namespace vendor\ControlEscolar;

class Asignatura
{
    public $Id;
    public $Nombre;
    public $PlanDeEstudio;
    public $Semestre;
    public $HorasTotales;
    public $HorasSemanaMes;
    public $Creditos;
    public $Tipo;
}

// enum TipoDeAsignatura
// {
//     case Modulo;
//     case Submodulo;
//     case Asignatura;
// }