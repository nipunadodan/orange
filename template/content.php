<?php
if (isset($_GET['page']) && $_GET['page']) {
    $page_path = PAGE_PATH . $_GET['page'] . '.php';
    if (file_exists($page_path)) {
        echo '<div id="content">';
        include_once(PAGE_PATH.$_GET['page'] . '.php');
        echo '</div>';
    } else {
        include_once(PAGE_PATH.'404.php');
    }
} else {
    echo '<div id="content">';
    include_once(PAGE_PATH . 'home.php');
    echo '</div>';
}
