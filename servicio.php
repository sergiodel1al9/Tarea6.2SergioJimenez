<?php

require_once('./include/DB.php');

$server = new SoapServer('http://localhost/Tarea6.2SergioJimenez/db_wsdl.wsdl');

$server->setClass('DB');

$server->handle();