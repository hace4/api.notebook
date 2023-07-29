<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitee9f8f8757e574df783780b7dda652e2
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'modules\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'modules\\' => 
        array (
            0 => __DIR__ . '/../..' . '/modules',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'modules\\db\\CRUD' => __DIR__ . '/../..' . '/modules/db/CRUD.php',
        'modules\\db\\connect' => __DIR__ . '/../..' . '/modules/db/connect.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitee9f8f8757e574df783780b7dda652e2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitee9f8f8757e574df783780b7dda652e2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitee9f8f8757e574df783780b7dda652e2::$classMap;

        }, null, ClassLoader::class);
    }
}
