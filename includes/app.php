<?php
require 'funciones.php';
require 'config/database.php';
require 'globales.php';
require __DIR__.'/../vendor/autoload.php';

//Conectarnos a la base de datos
$db = conectarBD();
use Models\ActiveRecord;
ActiveRecord::setDB($db);