<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc33fb7aaed3957a1411b2faab270488d
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc33fb7aaed3957a1411b2faab270488d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc33fb7aaed3957a1411b2faab270488d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
