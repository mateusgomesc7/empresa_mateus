<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite557700d1f3a4f4838c9169f0f14653a
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sts\\' => 4,
        ),
        'C' => 
        array (
            'Core\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sts\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/sts',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite557700d1f3a4f4838c9169f0f14653a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite557700d1f3a4f4838c9169f0f14653a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
