<?php
function sec_session_start(){
    //$lifetime, $path, $domain, $secure, $httponly
    $secure = SECURE;
    $httponly = true;
    if(!isset($_SESSION)){
        $cookieParams = session_get_cookie_params();
        session_set_cookie_params($cookieParams["lifetime"], $cookieParams["path"], $cookieParams["domain"], $secure, $httponly);
        @session_regenerate_id(true);
        session_start();
    }
}

function login($username, $password) {
    $db = Db::getInstance();

    $sql = "SELECT * FROM ".DB_PREFIX."users WHERE username = :username";
    $prepared = $db->prepare($sql);
    $prepared->execute(array(
        "username"=>$username
    ));
    $result = $prepared->fetchAll(PDO::FETCH_ASSOC);

    $passwordFromPost = $password;

    if ($result) {
        $hashedPasswordFromDB = $result[0]['password'];
        if (password_verify($passwordFromPost, $hashedPasswordFromDB)) {
            $user_browser = $_SERVER['HTTP_USER_AGENT'];
            $_SESSION['app_id'] = '7sQZzci8LxsStc0o2qyjLiaL7ObZDh';
            $username = preg_replace("/[^a-zA-Z0-9_\-\/]+/","",$username);
            $_SESSION['username'] = $username;
            $_SESSION['login_string'] = hash('sha512',$hashedPasswordFromDB . $user_browser);
            $_SESSION['first_name'] = $result[0]['first_name'];
            $_SESSION['last_name'] = $result[0]['last_name'];
            $_SESSION['status'] = $result[0]['status'];
            $_SESSION['level'] = $result[0]['level'];
            $_SESSION['user_id'] = $result[0]['id'];

            return true;
        } else {
            echo "Your Login Name or Password is invalid";
        }
    } else {
        echo 'Username or password is invalid';
    }
}

function login_check() {
    $db = Db::getInstance();
    if (isset($_SESSION['user_id'],$_SESSION['login_string'], $_SESSION['status'])) {
        $login_string = $_SESSION['login_string'];
        $user_id =$_SESSION['user_id'];
        $user_browser = $_SERVER['HTTP_USER_AGENT'];

        $sql = "SELECT password FROM ".DB_PREFIX."users WHERE id = :id LIMIT 1";
        if ($prepared = $db->prepare($sql)) {
            $prepared->execute(array(
                "id"=>$user_id
            ));
            $result = $prepared->fetchAll(PDO::FETCH_ASSOC);

            $password = $result[0]['password'];
            $login_check = hash('sha512', $password . $user_browser);
            if ($prepared->rowCount() == 1) {
                if ($login_check == $login_string) {
                    $db->connection = null;
                    return true;
                } else {
                    $db->connection = null;
                    return false;
                }
            } else {
                $db->connection = null;
                return false;
            }
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function error($str){
    echo '<span class="alert alert-danger d-block" role="alert">'.$str.'</span>';
}
function success($str){
    echo '<span class="alert alert-success d-block" role="alert">'.$str.'</span>';
}
?>