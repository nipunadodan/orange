<?php
session_start();
include_once 'config.php';
require 'vendor/autoload.php';
include_once CORE_PATH.'includes/db_conn.php';
include_once INC_PATH.'functions.php';

include_once 'template/header.php';
include_once 'template/content.php';
include_once 'template/footer.php';
