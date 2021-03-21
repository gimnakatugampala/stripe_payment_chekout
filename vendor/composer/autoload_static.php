<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit92eade9ed92c67c35083f33c56653873
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit92eade9ed92c67c35083f33c56653873::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit92eade9ed92c67c35083f33c56653873::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit92eade9ed92c67c35083f33c56653873::$classMap;

        }, null, ClassLoader::class);
    }
}
