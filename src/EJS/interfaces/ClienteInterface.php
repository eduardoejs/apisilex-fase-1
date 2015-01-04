<?php
namespace EJS\interfaces;

use Silex\Application;

interface ClienteInterface {

    public function conectar(Application $app);
    public function setCliente(array $cliente);
    public function getCliente(Application $app);
    public function getClienteId(Application $app, $id);
} 