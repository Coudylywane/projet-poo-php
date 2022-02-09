<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8f900a57ce897801899e89e737540482
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Doctrine\\Common\\Collections\\' => 28,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Doctrine\\Common\\Collections\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/collections/lib/Doctrine/Common/Collections',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8f900a57ce897801899e89e737540482::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8f900a57ce897801899e89e737540482::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}