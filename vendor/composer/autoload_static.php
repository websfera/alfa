<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf1e63025d450fcca041bc2554e8af0e6
{
    public static $files = array (
        'd507e002f7fce7f0c6dbf1f22edcb902' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Models\\' => 11,
            'App\\Controllers\\' => 16,
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/models',
        ),
        'App\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/controllers',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Tracy\\Bar' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Bar/Bar.php',
        'Tracy\\BlueScreen' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/BlueScreen/BlueScreen.php',
        'Tracy\\Bridges\\Nette\\Bridge' => __DIR__ . '/..' . '/tracy/tracy/src/Bridges/Nette/Bridge.php',
        'Tracy\\Bridges\\Nette\\MailSender' => __DIR__ . '/..' . '/tracy/tracy/src/Bridges/Nette/MailSender.php',
        'Tracy\\Bridges\\Nette\\TracyExtension' => __DIR__ . '/..' . '/tracy/tracy/src/Bridges/Nette/TracyExtension.php',
        'Tracy\\Bridges\\Psr\\PsrToTracyLoggerAdapter' => __DIR__ . '/..' . '/tracy/tracy/src/Bridges/Psr/PsrToTracyLoggerAdapter.php',
        'Tracy\\Bridges\\Psr\\TracyToPsrLoggerAdapter' => __DIR__ . '/..' . '/tracy/tracy/src/Bridges/Psr/TracyToPsrLoggerAdapter.php',
        'Tracy\\Debugger' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Debugger/Debugger.php',
        'Tracy\\DefaultBarPanel' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Bar/DefaultBarPanel.php',
        'Tracy\\DeferredContent' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Debugger/DeferredContent.php',
        'Tracy\\DevelopmentStrategy' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Debugger/DevelopmentStrategy.php',
        'Tracy\\Dumper' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Dumper/Dumper.php',
        'Tracy\\Dumper\\Describer' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Dumper/Describer.php',
        'Tracy\\Dumper\\Exposer' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Dumper/Exposer.php',
        'Tracy\\Dumper\\Renderer' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Dumper/Renderer.php',
        'Tracy\\Dumper\\Value' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Dumper/Value.php',
        'Tracy\\FileSession' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Session/FileSession.php',
        'Tracy\\FireLogger' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Logger/FireLogger.php',
        'Tracy\\Helpers' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Helpers.php',
        'Tracy\\IBarPanel' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Bar/IBarPanel.php',
        'Tracy\\ILogger' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Logger/ILogger.php',
        'Tracy\\Logger' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Logger/Logger.php',
        'Tracy\\NativeSession' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Session/NativeSession.php',
        'Tracy\\OutputDebugger' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/OutputDebugger/OutputDebugger.php',
        'Tracy\\ProductionStrategy' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Debugger/ProductionStrategy.php',
        'Tracy\\SessionStorage' => __DIR__ . '/..' . '/tracy/tracy/src/Tracy/Session/SessionStorage.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf1e63025d450fcca041bc2554e8af0e6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf1e63025d450fcca041bc2554e8af0e6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf1e63025d450fcca041bc2554e8af0e6::$classMap;

        }, null, ClassLoader::class);
    }
}