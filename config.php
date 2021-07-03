<?php

declare(strict_types=1);

//  Global settings
session_start();
define('DOC_ROOT', dirname(realpath(__FILE__)).'/');
include_once DOC_ROOT.'env.php';
const SITE_URL = DOMAIN . SITE_ROOT;
const VERSION = 'v2.2.0.005';

const INC_PATH = DOC_ROOT . 'includes/';
const INC_URL = SITE_URL . 'includes/';
const INC_JS_URL = SITE_URL . 'includes/js/';
const FUNCTIONS = INC_PATH . 'functions.php';

const MODULE_PATH = DOC_ROOT . 'modules/';
const PROCESSES_PATH = DOC_ROOT . 'processes/';

const PAGE_PATH = DOC_ROOT . 'pages/';
//define("PAGE_URL", SITE_URL."pages/");
const PAGE_URL = SITE_URL . '?page=';

const RESOURCES_PATH = DOC_ROOT . 'resources/';
const RESOURCES_URL = SITE_URL . 'resources/';

const TEMPLATE = 'default';
const TEMPLATE_PATH = DOC_ROOT . 'templates/' . TEMPLATE . '/';
const TEMPLATE_URL = SITE_URL . 'templates/' . TEMPLATE . '/';
