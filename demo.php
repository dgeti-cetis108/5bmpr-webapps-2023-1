<?php
require_once 'config.inc.php';
require_once 'autoload.php';
use vendor\ControlEscolar\Alumno;
// require_once 'vendor/ControlEscolar/Alumno.php';
// crear un objeto de tipo Alumno (instanciar la clase Alumno)
$alumno = new Alumno();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php echo "Hola PHP"; ?>
        <?= "Hola PHP" ?>
    </h1>
</body>
</html>