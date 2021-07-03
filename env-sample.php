<?php

declare(strict_types=1);

const SITE_NAME = 'Orange';
const SITE_TAGLINE = 'Lightweight PHP framework';
$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . "://{$_SERVER['HTTP_HOST']}/";
define('DOMAIN', $url);
const SITE_ROOT = 'nsd/orange/';
const SITE_URL = DOMAIN . SITE_ROOT;

const DB_HOST = 'localhost';
const DB = 'orange';
const DB_USER = 'nipuna';
const DB_PASSWORD = 'nipuna123';
const DB_PREFIX = 'o_';

const APP_ID = ''; //set your unique app id here

const SECURE = false;
const PRODUCTION = false;

if (! PRODUCTION) {
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', '0');
    ini_set('display_startup_errors', '0');
}

date_default_timezone_set('Asia/Colombo'); //set your timezone here

const OPEN_WEATHER = 'xxxx';
