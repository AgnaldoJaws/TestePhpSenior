<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaf1bd593507f26f4d281613bfe96a4b5
{
    public static $files = array (
        '2c102faa651ef8ea5874edb585946bce' => __DIR__ . '/..' . '/swiftmailer/swiftmailer/lib/swift_required.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaf1bd593507f26f4d281613bfe96a4b5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaf1bd593507f26f4d281613bfe96a4b5::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}