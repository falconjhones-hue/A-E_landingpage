<?php
session_start();
include "generic/Autoload.php";

use generic\Controller;

define('BASE_URL', 'http://localhost/A-B/');
$rota = $_GET["param"] ?? "landpage/home";
$controler = new Controller();
$controler->verificarChamadas($rota);