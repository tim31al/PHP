<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit04d658b595a6d16205cf6b0932ad0d24
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'AlexRedis\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'AlexRedis\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'AlexRedis\\Report' => __DIR__ . '/../..' . '/src/Report.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit04d658b595a6d16205cf6b0932ad0d24::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit04d658b595a6d16205cf6b0932ad0d24::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit04d658b595a6d16205cf6b0932ad0d24::$classMap;

        }, null, ClassLoader::class);
    }
}
