<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'user' => [
            'identityClass' => 'common\models\Member',
            'enableAutoLogin' => true,
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
    ],
    'params' => $params,
];
