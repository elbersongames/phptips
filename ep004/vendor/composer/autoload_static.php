<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit18ac48f28c7ffdd9f5d3fe78a49e07d3
{
    public static $files = array (
        '548f69576dd3e84046278c01490a94af' => __DIR__ . '/../..' . '/source/Config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'C' => 
        array (
            'CoffeeCode\\Router\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
        'CoffeeCode\\Router\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/router/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit18ac48f28c7ffdd9f5d3fe78a49e07d3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit18ac48f28c7ffdd9f5d3fe78a49e07d3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
