<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitcae9f82c9e9a797cba524b72e0ffafef
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

        spl_autoload_register(array('ComposerAutoloaderInitcae9f82c9e9a797cba524b72e0ffafef', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitcae9f82c9e9a797cba524b72e0ffafef', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitcae9f82c9e9a797cba524b72e0ffafef::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
