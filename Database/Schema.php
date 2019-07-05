<?php


namespace DB;


use Core\App;

class Schema
{
    public function primaryKey($key = 'id', $length = 10)
    {
        if (App::get('dbConnection') == 'pgsql') {
            return sprintf(
                '%s  serial primary key',
                $key
            );

        }

        return sprintf(
            '%s INT(%s) UNSIGNED AUTO_INCREMENT PRIMARY KEY',
            $key,
            $length
        );

    }

}