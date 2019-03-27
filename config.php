<?php
define("SITE_NAME",'Orange V2');

//	Global settings
define("DOMAIN", "http://localhost/");
define("SITE_ROOT", "nsd/orange/");

define("SITE_URL", DOMAIN.SITE_ROOT);
define("DOC_ROOT", dirname(realpath(__FILE__))."/");

define("INC_PATH", DOC_ROOT."includes/");
define("INC_URL", SITE_URL."includes/");
define("INC_JS_URL", SITE_URL."includes/js/");
define("FUNCTIONS", INC_PATH."functions.php");

define("MODULE_PATH", DOC_ROOT."modules/");

define("PAGE_PATH", DOC_ROOT."views/");
//define("PAGE_URL", SITE_URL."views/");
define("PAGE_URL", SITE_URL."?page=");

define("RESOURCES_PATH", DOC_ROOT."resources/");
define("RESOURCES_URL", SITE_URL."resources/");

define("TEMPLATE", 'orange');
define("TEMPLATE_PATH", DOC_ROOT."templates/".TEMPLATE."/");
define("TEMPLATE_URL", SITE_URL."templates/".TEMPLATE."/");

define("DB_HOST", "localhost");
define("DB_NAME", "orange");
define("DB_USER", "nipuna");
define("DB_PASSWORD", "nipuna123");
define("DB_PREFIX", "o_");

define("SECURE", false);
define("PRODUCTION", false);

date_default_timezone_set('Asia/Colombo'); //set your timezone here

if(!PRODUCTION){
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}

require 'vendor/autoload.php';

// Using Medoo namespace in addition to native PDO implementation
use Medoo\Medoo;

$database = new Medoo([
    // required
    'database_type' => 'mysql',
    'database_name' => DB_NAME,
    'server' => DB_HOST,
    'username' => DB_USER,
    'password' => DB_PASSWORD,
    'prefix' => DB_PREFIX,
]);
?>
