
<?php 

class Funciones {

	public function maxOrder() {
		require "../conexionbd.php";
		return $Dat = odbc_exec($conexion, "SELECT MAX(NUM_PEDIDO) AS PEDIDO FROM CHOHOPRUEBA..PEDIDOS");	
	}

	public function costumers() {
		require "../conexionbd.php"; 
        $Da = "SELECT NIT , RAZON_SOCIAL FROM CHOHOPRUEBA..terceros WHERE TIPO = 'cliente' AND ACTIVO = 'S' ";
		$Dat = odbc_exec($conexion, $Da);
		while ($Dos = odbc_fetch_array($Dat)) { $arr[] = $Dos; }
		return $arr;
	}

	// api

	public function getOrders() {
		require "../conexionbd.php"; 
        $Da = "SELECT * FROM CHOHOPRUEBA..pedidos";
		$Dat = odbc_exec($conexion, $Da);
		while ($Dos = odbc_fetch_array($Dat)) { $arr[] = $Dos; }
		return $arr;
	}

	public function getThirds() {
		require "../conexionbd.php"; 
        $Da = "SELECT * FROM CHOHOPRUEBA..terceros";
		$Dat = odbc_exec($conexion, $Da);
		while ($Dos = odbc_fetch_array($Dat)) { $arr[] = $Dos; }
		return $arr;
	}

}
?>