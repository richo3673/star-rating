<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7166440bd0403acff93adb19f7f50b28
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kelompok1\\StarRating\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kelompok1\\StarRating\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit7166440bd0403acff93adb19f7f50b28::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7166440bd0403acff93adb19f7f50b28::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7166440bd0403acff93adb19f7f50b28::$classMap;

        }, null, ClassLoader::class);
    }
}
