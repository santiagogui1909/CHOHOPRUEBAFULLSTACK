<?php 
    session_destroy(); 
    $_SESSION['usuario'] = "";
?>

<script>
	alert("¡Sesión cerrada!");
	window.location='Login.php'
</script>