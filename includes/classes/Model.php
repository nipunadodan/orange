<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12/26/2018
 * Time: 12:29 PM
 */

namespace Model;


use Medoo\Medoo;

class Model extends Medoo{
    public function __construct(){
        $option = array(
            'database_type' => 'mysql',
            'database_name' => DB_NAME,
            'server' => DB_HOST,
            'username' => DB_USER,
            'password' => DB_PASSWORD,
            'prefix' => DB_PREFIX,
            'charset' => 'utf8'
        );
        parent::__construct($option);
    }
}