<?php

declare(strict_types=1);

namespace Orange;

use Medoo\Medoo;

final class Db extends Medoo
{
    public function __construct()
    {
        $option = [
            'database_type' => 'mysql',
            'database_name' => DB,
            'server' => DB_HOST,
            'username' => DB_USER,
            'password' => DB_PASSWORD,
            'prefix' => DB_PREFIX,
            'charset' => 'utf8',
        ];
        parent::__construct($option);
    }
}
