<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8235f8d48bfc6fffeb13f8df30a1b7aa
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Rtx\\SolidPrinciple\\' => 19,
        ),
        'I' => 
        array (
            'Interfaces\\' => 11,
        ),
        'C' => 
        array (
            'Classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Rtx\\SolidPrinciple\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Interfaces\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Interfaces',
        ),
        'Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8235f8d48bfc6fffeb13f8df30a1b7aa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8235f8d48bfc6fffeb13f8df30a1b7aa::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8235f8d48bfc6fffeb13f8df30a1b7aa::$classMap;

        }, null, ClassLoader::class);
    }
}
