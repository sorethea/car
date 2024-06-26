<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit268e7d8027673c012323c60eb1578739
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sorethea\\Car\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sorethea\\Car\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit268e7d8027673c012323c60eb1578739::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit268e7d8027673c012323c60eb1578739::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit268e7d8027673c012323c60eb1578739::$classMap;

        }, null, ClassLoader::class);
    }
}
