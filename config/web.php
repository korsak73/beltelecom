<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'name' => 'Белтелеком',
    'basePath' => dirname(__DIR__),
    'language' => 'ru-RU',
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
        '@moduleStat' => '@app/modules/statistics',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'hbwtp4YhugCpjvPbCAHurvQvUT28F-PN',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\Users',
            'enableAutoLogin' => true,
            'loginUrl'=>['auth/login'],
            'on afterLogin' => function($event) {
                app\models\Users::afterLogin($event->identity->id);
            }
        ],
        'formatter' => [
            'dateFormat'=>'dd.MM.yyyy',
            'datetimeFormat' => 'yyyy-MM-dd HH:mm:ss',
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'wadeshuler\sendgrid\Mailer',
            'viewPath' => '@app/mail',

            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => false,
            'apiKey' => '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',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        'urlManager' => [
//            'rules' => [
//                'articles/page/<page:\d+>' => 'articles/index',
//                'articles/' => 'articles/index',
//            ],
            'showScriptName' => false, //отключаем r=routes
            'enableStrictParsing' => true, //запретить стандартные URL если не соответствуют правилам
//            'enablePrettyUrl' => true, //отключаем index.php
            'rules' => array(
                '/' => 'site/index',
                'statistics/' => 'statistics/stat/index', //модуль статистики
            )
        ],
        'reCaptcha' => [
            'name' => 'reCaptcha',
            'class' => 'himiklab\yii2\recaptcha\ReCaptcha',
            'siteKey' => '6LeB87wUAAAAAHQzjWQpnbimyYerIgMztIGpp8Zq',
            'secret' => '6LeB87wUAAAAAIMX5ByLZo1dtpYDt2uPIOvtCRBj'
//            'siteKey' => '6Lfi87wUAAAAAD14Vwcjl9YR_CdsXMls5vs3efKQ',
//            'secret' => '6Lfi87wUAAAAADG65TQ_YpH4obrgMRzvWA3lQs9A'
        ],
        'assetManager' => [
            'class' => 'yii\web\AssetManager',
            'linkAssets' => false,
//            'bundles' => [
//                'yii\web\JqueryAsset' => [
//                    'sourcePath' => null,   // отключение дефолтного jQuery
//                    'js' => [
//                        '//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js', // добавление вашей версии
//                    ]
//                ],
//            ],
        ],
    ],
    'timeZone' => 'Europe/Minsk', //для правильного форматирования времени
    'modules' => [
        'gii' => [
            'class' => 'yii\gii\Module',
        ],
        'statistics' => [
            'class' => 'app\modules\statistics\StatModule',
//            'layout' =>'main',
        ],
        'admin' => [
            'class' => 'app\modules\admin\Module',
//            'layout' => 'admin',
//            'loginUrl'=>['auth/login']
        ],
        'gridview' =>  [
            'class' => '\kartik\grid\Module'
        ],
        'yii2images' => [
            'class' => 'rico\yii2images\Module',
            //be sure, that permissions ok
            //if you cant avoid permission errors you have to create "images" folder in web root manually and set 777 permissions
            'imagesStorePath' => 'uploads/store', //path to origin images
            'imagesCachePath' => 'uploads/cache', //path to resized copies
            'graphicsLibrary' => 'GD', //but really its better to use 'Imagick'
            'placeHolderPath' => '@webroot/uploads/store/no-image.png', // if you want to get placeholder when image not exists, string will be processed by Yii::getAlias
            'imageCompressionQuality' => 100, // Optional. Default value is 85.
        ],
//        'customMailViews' => [
//            'confirmChangeEmail' => '@app/mail/confirmChangeEmail' //in this case you have to create files confirmChangeEmail-html.php and confirmChangeEmail-text.php in mail folder
//        ],
    ],
    'controllerMap' => [
        'elfinder' => [
            'class' => 'mihaildev\elfinder\Controller',
            'access' => ['@'],
            'roots' => [
                [
                    'baseUrl'=>'@web',
                    'basePath'=>'@webroot',
                    'path' => 'uploads/global',
                    'name' => 'Global'
                ],
                [
                    'class' => 'mihaildev\elfinder\volume\UserPath',
                    'path' => 'public',
                    'name'  => 'Public'
                ],
//                [
//                    'path' => 'files/some',
//                    'name' => ['category' => 'my','message' => 'Some Name'] //перевод Yii::t($category, $message)
//                ],
//                [
//                    'path'   => 'files/some',
//                    'name'   => ['category' => 'my','message' => 'Some Name'], // Yii::t($category, $message)
//                    'access' => ['read' => '*', 'write' => 'UserFilesAccess'] // * - для всех, иначе проверка доступа в даааном примере все могут видет а редактировать могут пользователи только с правами UserFilesAccess
//                ]
            ],
            'watermark' => [
                'source'         => __DIR__.'/logo.png', // Path to Water mark image
                'marginRight'    => 5,          // Margin right pixel
                'marginBottom'   => 5,          // Margin bottom pixel
                'quality'        => 95,         // JPEG image save quality
                'transparency'   => 70,         // Water mark image transparency ( other than PNG )
                'targetType'     => IMG_GIF|IMG_JPG|IMG_PNG|IMG_WBMP, // Target image formats ( bit-field )
                'targetMinPixel' => 200         // Target image minimum pixel size
            ]
        ]
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        'allowedIPs' => ['127.0.0.1', '::1', '192.168.0.*', '192.168.178.20'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        'allowedIPs' => ['127.0.0.1', '::1', '192.168.0.*', '192.168.178.20'],
    ];
}

return $config;
