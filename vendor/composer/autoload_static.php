<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita0ef030ca085355b3b4a00e7f9da30be
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dillonsmart\\Helpers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dillonsmart\\Helpers\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita0ef030ca085355b3b4a00e7f9da30be::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita0ef030ca085355b3b4a00e7f9da30be::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita0ef030ca085355b3b4a00e7f9da30be::$classMap;

        }, null, ClassLoader::class);
    }
}