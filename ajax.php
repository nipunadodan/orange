<?php
include_once('config.php');
include_once(INC_PATH.'dbconnect.php');
include_once(FUNCTIONS);
sec_session_start();
if(isset($_GET['process']) && $_GET['process'] !== ''){
    if(file_exists(MODULE_PATH.$_GET['process'].'.php')){
        include_once(MODULE_PATH.$_GET['process'].'.php');
    }else{
        echo '404: File not found';
    }
}else{
    echo '404: Process not Found';
}
?>