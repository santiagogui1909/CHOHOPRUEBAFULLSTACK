<?php

if ($_POST['crearTercero']) {
    include("../conexionbd.php");
    
    $nit = trim($_POST['nit']);
    $razon = trim($_POST['razonSocial']);
    $tipo = trim($_POST['tipo']);

    $resul = odbc_exec($conexion, "INSERT INTO CHOHOPRUEBA..TERCEROS (nit,razon_social, tipo, activo)
    VALUES ('$nit', '$razon', '$tipo', 'S')");

    if ($resul) { ?>
        <script>
            alert("Se creo correctamente");
            window.location.href = "../view/index.php";
        </script>
    <?php } else { ?>
        <script>
            alert("No se pudo crear");
            window.location.href="../view/index.php";; 
        </script>
        <?php } ?>
<?php } ?>