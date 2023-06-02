<?php 
include("../conexionbd.php");
$cantidad = 20;

// insertar datos
for ($i = 1; $i <= $cantidad; $i++) {
    
    $NIT = trim($_POST['NIT']);
    $departamento = trim($_POST['departamento']);
    $ciudad = trim($_POST['ciudad']);
    $vendedor = trim($_POST['vendedor']);
    $numpedido = trim($_POST['numpedido']);
    
    // insert masivo
    $result = "INSERT INTO CHOHOPRUEBA..PEDIDOS (FECHA_PEDIDO,PREFIJO,NUM_PEDIDO,NIT,RAZON_SOCIA,VENDEDOR,DEPARTAMENTO,CIUDAD) 
    VALUES (GETDATE(), 'PE', $numpedido, '$NIT', '$razonSocial', '$vendedor','$departamento','$ciudad')";
    
    if ($resul) { ?>
        <script>
            alert("Todos los datos cargados con exito");
            window.location.href = "../view/index.php";
        </script>
    <?php } else { ?>
        <script>
            alert("No se pudo cargar");
            window.location.href="../view/index.php";; 
        </script>
    <?php } 
}?>