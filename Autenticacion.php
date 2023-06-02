<?php

if ($_POST['IniciarSesion']) {
    header("Cache-control: private");
    include("conexionbd.php");

    $usuario = trim($_POST['usuario']);
    $password = trim($_POST['contraseña']);

    $_SESSION['usuario'] = $usuario;

    $consulta = "SELECT RTRIM(US.USUARIO) AS USUARIO, RTRIM(US.CONTRASENA) AS CLAVE, RTRIM(VEN.NOMBRE) AS NOMBRE FROM CHOHOPRUEBA..USUARIO AS US
    INNER JOIN CHOHOPRUEBA..VENDEDORES AS VEN ON US.USUARIO = VEN.USUARIO 
    WHERE US.USUARIO = '$usuario' AND CONTRASENA = '$password'";

    $resul = odbc_exec($conexion, $consulta) or die(exit("Error al ejecutar consulta"));
    odbc_fetch_row($resul);

    $nombre = trim(odbc_result($resul, 'NOMBRE'));
    $usua = trim(odbc_result($resul, 'USUARIO'));
    $passw = trim(odbc_result($resul, 'CLAVE'));

    // Los pasamos a mayuscula
    $nombreUsuario = strtoupper($usua);
    $passwusuario = strtoupper($passw);
    $usuarioInput = strtoupper($usuario);
    $passwordInput = strtoupper($password);

    if ($nombreUsuario == $usuarioInput and $passwusuario == $passwordInput) {
        session_start();
        $_SESSION['usuario'] = $nombre;
?>      
        <script>
            alert("<?php echo utf8_encode("¡Bienvenid@!")?>");
            window.location.href = "./view/index.php";
        </script><?php
    } else { ?>
        <script>
            alert("Credenciales incorrectas");
            window.location.href = "./view/Login.php";
        </script>
    <?php } 
        
} else { ?>
    <script>
        alert("Ingreso Erroneo");
        window.location.href = "../view/Login.php";
    </script>
<?php } ?>