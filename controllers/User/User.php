<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12/26/2018
 * Time: 12:43 PM
 */

namespace User;

use Model\Model;

class User extends Model{
    private $table = "users";
    private $fillable = [
        "users.id",
        "users.first_name",
        "users.last_name",
        "users.username",
        "users.password",
        "users.level",
        "users.status",
        "users.created_by",
        "users.created",
        "users.updated"
    ];

    public function login($username, $password){

        $user = parent::select($this->table, $this->fillable, [
            "username" => $username
        ]);

        $passwordFromPost = $password;

        if ($user) {
            $hashedPasswordFromDB = $user[0]['password'];
            if (password_verify($passwordFromPost, $hashedPasswordFromDB) && $user[0]['status'] != 10) {
                $user_browser = $_SERVER['HTTP_USER_AGENT'];
                $_SESSION['app_id'] = '7sQZzci8LxsStc0o2qyjLiaL7ObZDh';
                $username = preg_replace("/[^a-zA-Z0-9_\-\/]+/","",$username);
                $_SESSION['username'] = $username;
                $_SESSION['login_string'] = hash('sha512',$hashedPasswordFromDB . $user_browser);
                $_SESSION['first_name'] = $user[0]['first_name'];
                $_SESSION['last_name'] = $user[0]['last_name'];
                $_SESSION['status'] = $user[0]['status'];
                $_SESSION['level'] = $user[0]['level'];
                $_SESSION['user_id'] = $user[0]['id'];

                return true;
            } else {
                //error ( "You&rsquo;ve entered invalid credentials" );
                return false;
            }
        } else {
            //error ('Not a valid user');
            return false;
        }
    }

    public function login_check() {
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

    public function getUserBySubInstId($id){
        return parent::select($this->table, $this->fillable, [
            "users.sub_inst_id" => $id
        ]);
    }
}
