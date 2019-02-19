<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6c142eca93ae6e362ca9adcf4c5815d5
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
        '22d287673fb05a9ac9f86bf3b35680f2' => __DIR__ . '/..' . '/appbolaget/dd/src/dd.php',
        'c54c1e352893e3d8c94af4f1df1cd8f3' => __DIR__ . '/..' . '/appbolaget/dd/src/Dumper.php',
        'a5678475996ced6f4774ffdad364dba4' => __DIR__ . '/..' . '/appbolaget/dd/src/HtmlDumper.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\VarDumper\\' => 28,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6c142eca93ae6e362ca9adcf4c5815d5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6c142eca93ae6e362ca9adcf4c5815d5::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
