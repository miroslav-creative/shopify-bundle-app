<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaed7f7599db544eedd4616b2ad6e8d3c
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPShopify\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPShopify\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpclassic/php-shopify/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaed7f7599db544eedd4616b2ad6e8d3c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaed7f7599db544eedd4616b2ad6e8d3c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitaed7f7599db544eedd4616b2ad6e8d3c::$classMap;

        }, null, ClassLoader::class);
    }
}
