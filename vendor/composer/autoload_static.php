<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit37a9fbeab1b1b7170709c7f6c37dbc18
{
    public static $files = array (
        '5d75dcaa05b9b0e2030ccbc819aa9868' => __DIR__ . '/../..' . '/source/Config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'L' => 
        array (
            'League\\Plates\\' => 14,
        ),
        'C' => 
        array (
            'CoffeeCode\\Router\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'League\\Plates\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/plates/src',
        ),
        'CoffeeCode\\Router\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/router/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit37a9fbeab1b1b7170709c7f6c37dbc18::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit37a9fbeab1b1b7170709c7f6c37dbc18::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit37a9fbeab1b1b7170709c7f6c37dbc18::$classMap;

        }, null, ClassLoader::class);
    }
}
