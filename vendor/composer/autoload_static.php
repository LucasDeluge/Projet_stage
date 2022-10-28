<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit23820c1eac9c1770c48099f6225b4bfe
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit23820c1eac9c1770c48099f6225b4bfe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit23820c1eac9c1770c48099f6225b4bfe::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit23820c1eac9c1770c48099f6225b4bfe::$classMap;

        }, null, ClassLoader::class);
    }
}