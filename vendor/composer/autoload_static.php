<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitea553513d7022b32e8476b81364992ea
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/nipunadodan/orange-core/classes',
    );

    public static $classMap = array (
        'Test' => __DIR__ . '/../..' . '/modules/Test.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitea553513d7022b32e8476b81364992ea::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitea553513d7022b32e8476b81364992ea::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInitea553513d7022b32e8476b81364992ea::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInitea553513d7022b32e8476b81364992ea::$classMap;

        }, null, ClassLoader::class);
    }
}
