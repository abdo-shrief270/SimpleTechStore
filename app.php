<?php
ob_start();

define("PATH",__DIR__."/");
define("URL","http://localhost:8080/lec/TechStore/");
define("APATH",__DIR__."/admin/");
define("AURL","http://localhost:8080/lec/TechStore/admin/");
define("DB_SERVERNAME","localhost");
define("DB_USERNAME","root");
define("DB_PASSWORD","");
define("DB_NAME","techstore");

require_once(PATH."vendor/autoload.php");

use TeachStore\Classes\Request;
use TeachStore\Classes\Session;
use TeachStore\Classes\Validation\Validator;

$request=new Request;
$session=new Session;
$validator=new Validator;