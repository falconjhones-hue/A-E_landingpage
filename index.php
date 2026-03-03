<?php
session_start();
include "generic/Autoload.php";

use generic\Controller;

define('BASE_URL', 'https://a-b-f574.onrender.com/');
$rota = $_GET["param"] ?? "landpage/home";
$controler = new Controller();
$controler->verificarChamadas($rota);