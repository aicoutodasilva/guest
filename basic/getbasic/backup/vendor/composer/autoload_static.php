<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit565cf6d4cbfb05ae9d65f6dd1cc51ded
{
    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Rah\\Danpu\\' => 
            array (
                0 => __DIR__ . '/..' . '/rah/danpu/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit565cf6d4cbfb05ae9d65f6dd1cc51ded::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}