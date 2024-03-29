<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit54847d6030d29731b0e767d050d22a36
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Workerman\\MySQL\\' => 16,
            'Workerman\\' => 10,
        ),
        'G' => 
        array (
            'Google\\Protobuf\\' => 16,
            'GPBMetadata\\Google\\Protobuf\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Workerman\\MySQL\\' => 
        array (
            0 => __DIR__ . '/..' . '/workerman/mysql/src',
        ),
        'Workerman\\' => 
        array (
            0 => __DIR__ . '/..' . '/workerman/workerman',
        ),
        'Google\\Protobuf\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf',
        ),
        'GPBMetadata\\Google\\Protobuf\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/protobuf/src/GPBMetadata/Google/Protobuf',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit54847d6030d29731b0e767d050d22a36::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit54847d6030d29731b0e767d050d22a36::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit54847d6030d29731b0e767d050d22a36::$classMap;

        }, null, ClassLoader::class);
    }
}
