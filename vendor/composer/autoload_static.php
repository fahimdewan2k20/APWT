<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0e3fc6dc5afc1fefb79b0f81ed7b0b4b
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit0e3fc6dc5afc1fefb79b0f81ed7b0b4b::$classMap;

        }, null, ClassLoader::class);
    }
}