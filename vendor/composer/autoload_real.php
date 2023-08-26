<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd5f5b9be5dd1cf58656f3ee822136756
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitd5f5b9be5dd1cf58656f3ee822136756', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd5f5b9be5dd1cf58656f3ee822136756', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitd5f5b9be5dd1cf58656f3ee822136756::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
