<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit113aa6f48300210152e47d56e3735559
{
    public static $files = array (
        '1d5a77609116b3a7d9f7b9e9c18687a5' => __DIR__ . '/../..' . '/model/User.php',
    );

    public static $classMap = array (
        'ACore' => __DIR__ . '/../..' . '/controller/Acore.php',
        'ACoreAdmin' => __DIR__ . '/../..' . '/controller/ACoreAdmin.php',
        'Account' => __DIR__ . '/../..' . '/pages/account.php',
        'AccountController' => __DIR__ . '/../..' . '/controller/AccountController.php',
        'Analytics' => __DIR__ . '/../..' . '/pages/analytics.php',
        'Cases' => __DIR__ . '/../..' . '/pages/cases.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Course' => __DIR__ . '/../..' . '/pages/course.php',
        'CourseEdit' => __DIR__ . '/../..' . '/pages/courseEdit.php',
        'DirectoryController' => __DIR__ . '/../..' . '/controller/DirectoryController.php',
        'Funnel' => __DIR__ . '/../..' . '/pages/funnel.php',
        'FunnelController' => __DIR__ . '/../..' . '/controller/FunnelController.php',
        'FunnelEdit' => __DIR__ . '/../..' . '/pages/funnelEdit.php',
        'Login' => __DIR__ . '/../..' . '/pages/login.php',
        'LoginController' => __DIR__ . '/../..' . '/controller/LoginController.php',
        'Main' => __DIR__ . '/../..' . '/pages/main.php',
        'NewProject' => __DIR__ . '/../..' . '/pages/newProject.php',
        'Project' => __DIR__ . '/../..' . '/pages/project.php',
        'Registration' => __DIR__ . '/../..' . '/pages/registration.php',
        'SmallPlayer' => __DIR__ . '/../..' . '/pages/smallPlayer.php',
        'UrlController' => __DIR__ . '/../..' . '/controller/UrlController.php',
        'VideoController' => __DIR__ . '/../..' . '/controller/VideoController.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit113aa6f48300210152e47d56e3735559::$classMap;

        }, null, ClassLoader::class);
    }
}
