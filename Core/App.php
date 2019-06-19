<?php

namespace Core;

use Exception;

/**
 * the class class stores the settings of the application
 *
 */

Class App
{
    protected static $registry;

    /**
     * @param $key
     * @param $value
     */
    public static function bind($key, $value)
    {
        static::$registry[$key] = $value;

    }

    /**
     * @param $key
     * @return mixed
     * @throws Exception
     */
    public static function get($key)
    {
        if (!array_key_exists($key, static::$registry)) {

            throw new Exception("No {$key} is found in the list", 1);

        }
        return static::$registry[$key];

    }

}