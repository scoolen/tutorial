<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitab944cae54862dc199b94df43e6ef740
{
    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Speakap\\Tests' => 
            array (
                0 => __DIR__ . '/..' . '/speakap/sdk/php/tests',
            ),
            'Speakap' => 
            array (
                0 => __DIR__ . '/..' . '/speakap/sdk/php/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitab944cae54862dc199b94df43e6ef740::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
