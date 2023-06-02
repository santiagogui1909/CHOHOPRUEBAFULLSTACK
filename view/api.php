<?php 
    require '../Funciones/funciones.php';
    require "../conexionbd.php";
    $Func = new Funciones;

    echo $_SERVER['QUERY_STRING'];

    switch($_SERVER['REQUEST_METHOD']){
        case 'GET':

            if(isset($_GET['pedidos'])) {
                echo json_encode($Func->getOrders());
            } else if(isset($_GET['terceros'])){
                echo json_encode($Func->getThirds());
            } else {

            }
        break;
    }
?>