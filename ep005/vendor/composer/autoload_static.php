<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit18ac48f28c7ffdd9f5d3fe78a49e07d3
{
    public static $files = array (
        'dac9bcc25cdb7418d21d4b41fbeb9883' => __DIR__ . '/../..' . '/source/Config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'F' => 
        array (
            'Faker\\' => 6,
        ),
        'C' => 
        array (
            'CoffeeCode\\Paginator\\' => 21,
            'CoffeeCode\\DataLayer\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
        'CoffeeCode\\Paginator\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/paginator/src',
        ),
        'CoffeeCode\\DataLayer\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/datalayer/src',
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
