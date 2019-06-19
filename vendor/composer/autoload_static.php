<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit20b4581933533de1691bf5eab3056b81
{
    public static $files = array (
        'de28ca0b04f99e53c5b6abd848f9627a' => __DIR__ . '/../..' . '/library/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DB\\' => 3,
        ),
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'Actions\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DB\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Database',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Core',
        ),
        'Actions\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Actions',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit20b4581933533de1691bf5eab3056b81::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit20b4581933533de1691bf5eab3056b81::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}