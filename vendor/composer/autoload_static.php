<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbb85511a2c6046eca11ba034ef29ff3a
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitbb85511a2c6046eca11ba034ef29ff3a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbb85511a2c6046eca11ba034ef29ff3a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbb85511a2c6046eca11ba034ef29ff3a::$classMap;

        }, null, ClassLoader::class);
    }
}
