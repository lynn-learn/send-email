<?php 

$cabecera = "From: lynn learn <lynn.m.learn@gmail.com>";
$ok = mail( 'lynn.m.learn@gmail.com', "Mensaje de prueba",'mensaje', $cabecera );
if($ok){echo 'fine';}else{echo 'no sent';}

?>
