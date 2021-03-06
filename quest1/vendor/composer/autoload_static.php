<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit55f2a11540611d08bc76512c5be57a02
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit55f2a11540611d08bc76512c5be57a02::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit55f2a11540611d08bc76512c5be57a02::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit55f2a11540611d08bc76512c5be57a02::$classMap;

        }, null, ClassLoader::class);
    }
}
