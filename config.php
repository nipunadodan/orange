<?php
define("SITE_NAME",'Orange V2');

//	Global settings

define("SITE_URL", DOMAIN.SITE_ROOT);
define("DOC_ROOT", dirname(realpath(__FILE__))."/");

define('CORE_PATH',DOC_ROOT.'vendor/nipunadodan/orange-core/');
include_once CORE_PATH.'config.php';

define("INC_PATH", DOC_ROOT."includes/");
define("INC_URL", SITE_URL."includes/");
define("INC_JS_URL", SITE_URL."includes/js/");
define("FUNCTIONS", INC_PATH."functions.php");

define("MODULE_PATH", DOC_ROOT."modules/");

define("PAGE_PATH", DOC_ROOT."pages/");
//define("PAGE_URL", SITE_URL."pages/");
define("PAGE_URL", SITE_URL."?page=");

define("RESOURCES_PATH", DOC_ROOT."resources/");
define("RESOURCES_URL", SITE_URL."resources/");

define("TEMPLATE", 'orange');
define("TEMPLATE_PATH", DOC_ROOT."templates/".TEMPLATE."/");
define("TEMPLATE_URL", SITE_URL."templates/".TEMPLATE."/");

define("SECURE", false);
define("PRODUCTION", false);

if(!PRODUCTION){
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}

include_once DOC_ROOT.'env.php';