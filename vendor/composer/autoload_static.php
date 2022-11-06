<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit113aa6f48300210152e47d56e3735559
{
    public static $files = array (
        '1d5a77609116b3a7d9f7b9e9c18687a5' => __DIR__ . '/../..' . '/model/User.php',
    );

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
        'ACore' => __DIR__ . '/../..' . '/controller/ACore.php',
        'ACoreAdmin' => __DIR__ . '/../..' . '/controller/ACoreAdmin.php',
        'Account' => __DIR__ . '/../..' . '/pages/Account.php',
        'AccountController' => __DIR__ . '/../..' . '/controller/AccountController.php',
        'Analytics' => __DIR__ . '/../..' . '/pages/Analytics.php',
        'Cases' => __DIR__ . '/../..' . '/pages/Cases.php',
        'ClientsController' => __DIR__ . '/../..' . '/controller/ClientsController.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Course' => __DIR__ . '/../..' . '/pages/Course.php',
        'CourseController' => __DIR__ . '/../..' . '/controller/CourseController.php',
        'CourseEdit' => __DIR__ . '/../..' . '/pages/CourseEdit.php',
        'EmailController' => __DIR__ . '/../..' . '/controller/EmailController.php',
        'Funnel' => __DIR__ . '/../..' . '/pages/Funnel.php',
        'FunnelController' => __DIR__ . '/../..' . '/controller/FunnelController.php',
        'FunnelEdit' => __DIR__ . '/../..' . '/pages/FunnelEdit.php',
        'Login' => __DIR__ . '/../..' . '/pages/Login.php',
        'LoginController' => __DIR__ . '/../..' . '/controller/LoginController.php',
        'Main' => __DIR__ . '/../..' . '/pages/Main.php',
        'MessengerController' => __DIR__ . '/../..' . '/controller/MessengerController.php',
        'PHPMailer\\PHPMailer\\Exception' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/Exception.php',
        'PHPMailer\\PHPMailer\\OAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/OAuth.php',
        'PHPMailer\\PHPMailer\\OAuthTokenProvider' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/OAuthTokenProvider.php',
        'PHPMailer\\PHPMailer\\PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/PHPMailer.php',
        'PHPMailer\\PHPMailer\\POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/POP3.php',
        'PHPMailer\\PHPMailer\\SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/SMTP.php',
        'PopupController' => __DIR__ . '/../..' . '/controller/PopupController.php',
        'Project' => __DIR__ . '/../..' . '/pages/Project.php',
        'SmallPlayer' => __DIR__ . '/../..' . '/pages/SmallPlayer.php',
        'SortController' => __DIR__ . '/../..' . '/controller/SortController.php',
        'StatisticsController' => __DIR__ . '/../..' . '/controller/StatisticsController.php',
        'UrlController' => __DIR__ . '/../..' . '/controller/UrlController.php',
        'UserPlayer' => __DIR__ . '/../..' . '/pages/userPlayer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit113aa6f48300210152e47d56e3735559::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit113aa6f48300210152e47d56e3735559::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit113aa6f48300210152e47d56e3735559::$classMap;

        }, null, ClassLoader::class);
    }
}
