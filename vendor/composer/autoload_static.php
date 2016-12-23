<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5c1a9aaf3206311a821f5612f0c04900
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Translation\\' => 30,
            'Simplon\\Mysql\\' => 14,
        ),
        'K' => 
        array (
            'Khill\\Lavacharts\\' => 17,
        ),
        'C' => 
        array (
            'Carbon\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation',
        ),
        'Simplon\\Mysql\\' => 
        array (
            0 => __DIR__ . '/..' . '/simplon/mysql/src',
        ),
        'Khill\\Lavacharts\\' => 
        array (
            0 => __DIR__ . '/..' . '/khill/lavacharts/src',
        ),
        'Carbon\\' => 
        array (
            0 => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5c1a9aaf3206311a821f5612f0c04900::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5c1a9aaf3206311a821f5612f0c04900::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}