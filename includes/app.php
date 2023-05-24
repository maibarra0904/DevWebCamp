<?php 

use Dotenv\Dotenv as Dot;
use Model\ActiveRecord;
require __DIR__ . '/../vendor/autoload.php';

// Añadir Dotenv
$dotenv = Dot::createImmutable(__DIR__);
$dotenv->safeLoad();

require 'funciones.php';
require 'database.php';

// Conectarnos a la base de datos
ActiveRecord::setDB($db);