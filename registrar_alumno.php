<?php
require_once 'header.php';
use vendor\ControlEscolar\Alumno;
// recoger los valores del formulario
if (isset($_POST['Nombres']) and
    isset($_POST['PrimerApellido']) and
    isset($_POST['SegundoApellido']) and
    isset($_POST['NumeroDeControl']) and
    isset($_POST['Curp']) and
    isset($_POST['Generacion']))
    {
        // crear el objeto de tipo alumno
        $alumno = new Alumno();
        $alumno->Nombres = $_POST['Nombres'];
        $alumno->PrimerApellido = $_POST['PrimerApellido'];
        $alumno->SegundoApellido = $_POST['SegundoApellido'];
        $alumno->NumeroDeControl = $_POST['NumeroDeControl'];
        $alumno->Curp = $_POST['Curp'];
        $alumno->Generacion = $_POST['Generacion'];
        var_dump($alumno);
    } else {
        header('Location: .');
        exit();
    }

?>



<?php require_once 'footer.php'; ?>