<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit95178ce0edce34d0c11cfdb747e58aba
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Finetic\\ComposerTest\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Finetic\\ComposerTest\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit95178ce0edce34d0c11cfdb747e58aba::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit95178ce0edce34d0c11cfdb747e58aba::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit95178ce0edce34d0c11cfdb747e58aba::$classMap;

        }, null, ClassLoader::class);
    }
}
