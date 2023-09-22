<?php require_once 'header.php'; ?>

<form action="registrar_alumno.php" method="post">
    <div>
        <label for="Nombres">Nombres</label>
        <input type="text" name="Nombres" id="Nombres">
    </div>
    <div>
        <label for="PrimerApellido">
            Primer Apellido
        </label>
        <input type="text" name="PrimerApellido" id="PrimerApellido">
    </div>
    <div>
        <label for="SegundoApellido">
            Segundo Apellido
        </label>
        <input type="text" name="SegundoApellido" id="SegundoApellido">
    </div>
    <div>
        <label for="NumeroDeControl">
            Número de Control
        </label>
        <input type="text" name="NumeroDeControl" id="NumeroDeControl">
    </div>
    <div>
        <label for="Curp">
            CURP
        </label>
        <input type="text" name="Curp" id="Curp">
    </div>
    <div>
        <label for="Generacion">
            Generación
        </label>
        <input type="text" name="Generacion" id="Generacion">
    </div>
    <div>
        <button type="submit">
            Registrar
        </button>
    </div>
</form>

<?php require_once 'footer.php'; ?>
