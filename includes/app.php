<?php 
require 'Db.php';
require __DIR__ . '/../vendor/autoload.php';


use Model\General;
General::setDB($db);