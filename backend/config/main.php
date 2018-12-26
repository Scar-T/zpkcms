<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
       'admin' => [
            'class' => 'mdm\admin\Module',
             //'layout' => 'left-menu',//yii2-admin的导航菜单
            'mainLayout' => '@app/views/layouts/main.php', //自己的layout

       ],
    ],
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager', // 使用数据库管理配置文件
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'assetManager'=>[
            // 设置存放assets的文件目录位置
            'basePath'=>'backend/web/assets',
            // 设置访问assets目录的url地址
            'baseUrl'=>'backend/web/assets',
            'bundles'=>[
                'yii\web\JqueryAsset'=>[
                    'sourcePath'=>null,
                    'js'=>[]
                ],
            ],
        ],
       'i18n' => [
        'translations' => [
            '*' => [
                'class' => 'yii\i18n\PhpMessageSource',
                'basePath' => '@app/messages', // if advanced application, set @frontend/messages
                'sourceLanguage' => 'en',
                'fileMap' => [
                    //'main' => 'main.php',
                ],
            ],
        ],
    ],
    ],
     'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
             'site/*',//允许访问的节点，可自行添加
            'admin/*', // add or remove allowed actions to this list
            // '*/*',
        ],
        ],
    'params' => $params,
    'aliases' => [
        '@bower' => '@vendor/yidas/yii2-bower-asset/bower'
    ],
];
