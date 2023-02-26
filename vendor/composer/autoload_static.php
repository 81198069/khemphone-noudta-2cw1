<?php


namespace Composer\Autoload;

class ComposerStaticInitbad9a95ee00214fd34d993f30b62523e
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbad9a95ee00214fd34d993f30b62523e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbad9a95ee00214fd34d993f30b62523e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
