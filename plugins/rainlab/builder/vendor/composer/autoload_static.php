<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit434d8702040af7d79ac0fa1efa8093a1
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit434d8702040af7d79ac0fa1efa8093a1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit434d8702040af7d79ac0fa1efa8093a1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
