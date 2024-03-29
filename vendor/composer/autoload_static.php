<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite76fa73568ab299b71b33f6fc88ca26d
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wyj\\Avatar\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wyj\\Avatar\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite76fa73568ab299b71b33f6fc88ca26d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite76fa73568ab299b71b33f6fc88ca26d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite76fa73568ab299b71b33f6fc88ca26d::$classMap;

        }, null, ClassLoader::class);
    }
}
