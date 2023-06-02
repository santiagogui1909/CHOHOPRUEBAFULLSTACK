<?php

$usuario= "sa";
$clave= "123456789";
$connection_string = 'DRIVER={SQL Server};SERVER=SANTIAGO\SQLEXPRESSS;DATABASE=CHOHOPRUEBA';

  if(!$conexion=odbc_connect($connection_string, $usuario, $clave)){
    die('Error al conectarse a la base de datos');
  }
  
  return $conexion; 

?>