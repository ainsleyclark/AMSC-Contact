<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd70cd8daa9ed796001a7a9601db069e0
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Inc\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Inc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/include',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd70cd8daa9ed796001a7a9601db069e0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd70cd8daa9ed796001a7a9601db069e0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
