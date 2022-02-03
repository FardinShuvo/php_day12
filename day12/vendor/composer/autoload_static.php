<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit49708357bc9fac2026c8e52521cd69e8
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit49708357bc9fac2026c8e52521cd69e8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit49708357bc9fac2026c8e52521cd69e8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit49708357bc9fac2026c8e52521cd69e8::$classMap;

        }, null, ClassLoader::class);
    }
}
