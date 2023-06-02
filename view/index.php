<?php
session_start();
error_reporting(0);

if (isset($_SESSION['usuario'])) {
    require '../Funciones/funciones.php';
    require "../conexionbd.php";
    $Func = new Funciones;

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../CSS/style.css" rel="stylesheet" />
        <title>CHOHO PEDIDOS</title>
    </head>

    <body>

        <article class="header">
            <h1>¡Bienvenidos a Choho Pedidos!</h1>
            <a href="closeSesion.php"><img class="cerrarSesion" src="../image/cerrar-sesion.png" alt="cerrar_sesion"></a>
        </article>

        <section class="containerHome">
            <section class="">
                <form class="forms" method="POST" action='../Funciones/crearPedido.php'>
                    <h2>Cargar nuevo pedido
                        <select class="selectClient" name="NIT" required>
                            <option value="">Selecciona un cliente</option>
                            <?php foreach ($Func->costumers() as $pers) {
                                echo '<option value="' . $pers['NIT'] . '">' . $pers['RAZON_SOCIAL'] . '</option>';
                            }
                            ?>
                        </select>

                        <section class="formOrders">
                            <label class="labelInput">Departamento
                                <input class='inputsOrders' type="text" name='departamento' placeholder='Departamento' required>
                            </label>

                            <label class="labelInput">Ciudad
                                <input class='inputsOrders' type="text" name='ciudad' placeholder='Ciudad' required>
                            </label>
                        </section>

                        <section class="formOrders">
                            <label class="labelInput">Vendedor
                                <input class='inputsOrders' type="text" placeholder='<?php echo $_SESSION['usuario']; ?>' disabled>
                            </label>

                            <label class="labelInput">Numero Pedido
                                <input class='inputsOrders' type="text" placeholder=<?php echo utf8_decode(odbc_result($Func->maxOrder(), 'PEDIDO'))+1; ?> disabled>
                            </label>

                            <input class='inputsOrders' type="hidden" name="vendedor" value='<?php echo $_SESSION['usuario']; ?>'>
                            <input class='inputsOrders' type="hidden" name='numpedido' value=<?php echo utf8_decode(odbc_result($Func->maxOrder(), 'PEDIDO'))+1; ?>>

                        </section>

                        <section class="btnCreateOrder">
                            <input type="submit" value="Crear" name='crearTercero'>
                        </section>
                </form>
            </section>
            <article class="sectionInfo">
                <img src="../image/chohoimagen.png" alt="choho">
                <button class='btnCreateThird' onclick="showModal(1)">Crear Un Tercero</button>
            </article>
        </section>

        <div id="sectionModal"></div>

        <footer>&copy; Prueba Choho 2023 / Santiago Guillen R</footer>

        <script src="../Js/main.js"></script>
    </body>

    </html>

<?php } else { ?>
    <script languaje "JavaScript">
        alert("Debes iniciar sesion primero")
        window.location.href = "Login.php";
    </script>
<?php } ?>