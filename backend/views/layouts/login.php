<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <!-- Get jQuery from Google CDN -->
<!--[if !IE]> -->
    <script type="text/javascript"> window.jQuery || document.write('<script src="<?php echo Yii::$app->request->hostInfo;?>/public/js/jquery-1.8.3.min.js">'+"<"+"/script>"); </script>
<!-- <![endif]-->
<!--[if lte IE 9]>
    <script type="text/javascript"> window.jQuery || document.write('<script src="<?php echo Yii::$app->request->hostInfo;?>/public/js/jquery-1.8.3.min.js">'+"<"+"/script>"); </script>
<![endif]-->
</head>
<body class="login">
    <?php $this->beginBody() ?>
    <div class="wrap">
        <div class="container">
        <?= $content ?>
        </div>
    </div>

  <!--   <footer class="footer">
        <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer> -->

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
