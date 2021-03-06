<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1121b43fba2ff92d175833951f6b7d93
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1121b43fba2ff92d175833951f6b7d93::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1121b43fba2ff92d175833951f6b7d93::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1121b43fba2ff92d175833951f6b7d93::$classMap;

        }, null, ClassLoader::class);
    }
}
