<?php

require_once __DIR__ . '/../config/bootstrap.php';

use EJS\Controller\ClienteController;

$array = require_once __DIR__ . '/../src/EJS/ArrayData/ArrayClientesJSON.php';

$cliente = new ClienteController();
$cliente->setCliente($array);
$cliente->getCliente($app);

$app->mount('/clientes', $cliente->connect($app));

$app->run();