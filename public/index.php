<?php

require_once __DIR__.'/../bootstrap.php';

use Symfony\Component\HttpFoundation\Response;

$array = require_once 'arrayClientes.php';

$cliente = new \EJS\classes\Cliente();
$cliente->setCliente($array);
$cliente->getCliente($app);

$app->mount('/clientes', $cliente->conectar($app));

$app->run();