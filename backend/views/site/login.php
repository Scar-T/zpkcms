<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\web\Request;
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */
$this->title = '登录-后台管理系统';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <div class="row">
    <div class="logo"><img src="<?php echo Yii::$app->request->hostInfo;?>/public/images/logo.png"></div>
        <div class="frame">
            <?php $form = ActiveForm::begin([
                'id' =>'login-form',
                'layout' => 'horizontal',
                'fieldConfig' => [
                    'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
                    'horizontalCssClasses' => [
                        'label' => 'col-sm-3',
                        'offset' => 'col-sm-offset-4',
                        'wrapper' => 'col-sm-8',
                        'error' => '',
                        'hint' => '',
                    ],
                ],
            ]); ?>
                <?= $form->field($model, 'username')->label('用  户:') ?>
                <?= $form->field($model, 'password')->passwordInput()->label('密  码:') ?>
                 <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="col-sm-6 captcha">{input}</div><div class="col-sm-6 logincaptcha">{image}</div>',
                ])->label('验证码:') ?>
                <?= $form->field($model, 'rememberMe')->checkbox() ?>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-10">
                        <?= Html::submitButton('立即登陆', ['class' => 'btn btn-default', 'name' => 'login-button']) ?>
                    </div>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
<script type="text/javascript">

</script>          