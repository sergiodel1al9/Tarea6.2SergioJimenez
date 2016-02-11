<?php

require_once("./include/DB.php");
// Ruta a WSDLDocument
require_once("WSDLDocument.php");

$uri = 'http://localhost/Tarea6.2SergioJimenez/';

$url = "http://localhost/Tarea6.2SergioJimenez/servicio.php";

$wsdl = new WSDLDocument("DB", $url, $uri);

echo $wsdl->saveXml();
?>
