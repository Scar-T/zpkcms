<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Message */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="message-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'uid')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'despatcher')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'type')->textInput() ?>

    <?= $form->field($model, 'content
内容
content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'createTime')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
