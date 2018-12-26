<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\search\MemberSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="member-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'password') ?>

    <?= $form->field($model, 'nickname') ?>

    <?= $form->field($model, 'role') ?>

    <?php // echo $form->field($model, 'sex') ?>

    <?php // echo $form->field($model, 'birthday') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'avatarTm') ?>

    <?php // echo $form->field($model, 'avatar') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'createTime') ?>

    <?php // echo $form->field($model, 'modifyTime') ?>

    <?php // echo $form->field($model, 'last_visit') ?>

    <?php // echo $form->field($model, 'userType') ?>

    <?php // echo $form->field($model, 'authkey') ?>

    <?php // echo $form->field($model, 'accessToken') ?>

    <?php // echo $form->field($model, 'remainder') ?>

    <?php // echo $form->field($model, 'integral') ?>

    <?php // echo $form->field($model, 'rank') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
