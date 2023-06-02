<?php

if ($_POST['crearTercero']) {
    include("../conexionbd.php");
    
    $NIT = trim($_POST['NIT']);
    $departamento = trim($_POST['departamento']);
    $ciudad = trim($_POST['ciudad']);
    $vendedor = trim($_POST['vendedor']);
    $numpedido = trim($_POST['numpedido']);

    // se consulta el nombre del tercero ya creado por medio del nit para luego ser insertado en pedidos
    $resul = odbc_exec($conexion, "SELECT RAZON_SOCIAL FROM CHOHOPRUEBA..TERCEROS WHERE ACTIVO = 'S' AND TIPO = 'cliente' AND NIT = '$NIT'");
    $razonSocial = odbc_result($resul,'RAZON_SOCIAL');

    $resul = odbc_exec($conexion, "INSERT INTO CHOHOPRUEBA..PEDIDOS (FECHA_PEDIDO,PREFIJO,NUM_PEDIDO,NIT,RAZON_SOCIA,VENDEDOR,DEPARTAMENTO,CIUDAD) 
    VALUES (GETDATE(), 'PE', $numpedido, '$NIT', '$razonSocial', '$vendedor','$departamento','$ciudad')");

    if ($resul) { ?>
        <script>
            alert("Se creo correctamente el pedido");
            window.location.href = "../view/index.php";
        </script>
    <?php } else { ?>
        <script>
            alert("No se pudo crear");
            window.location.href="../view/index.php";; 
        </script>
        <?php } ?>
<?php } ?>