<?php
/**
 * Created by PhpStorm.
 * User: birjemin
 * Date: 15/12/2017
 * Time: 11:11 PM
 */
use Illuminate\Database\Capsule\Manager as Capsule;

// Autoload 自动载入
require 'vendor/autoload.php';
require 'https/routes.php';

require 'https/register.php';

// Eloquent ORM
$capsule = new Capsule;
$capsule->addConnection(require 'app/Config/database.php');
$capsule->bootEloquent();

Flight::route('/', function(){
    echo 'hello world!';
});
Flight::start();