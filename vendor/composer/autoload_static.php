<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit37454edbd646445639c5327c4a59e6f4
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit37454edbd646445639c5327c4a59e6f4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit37454edbd646445639c5327c4a59e6f4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit37454edbd646445639c5327c4a59e6f4::$classMap;

        }, null, ClassLoader::class);
    }
}