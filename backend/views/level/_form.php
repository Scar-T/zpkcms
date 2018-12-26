<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Level */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="panel-body form-controls-demo">

    <?php $form = ActiveForm::begin([
     'options' => ['class' => 'form-horizontal','enctype' =>'multipart/form-data'],
        'fieldConfig' => [
        'inputOptions' => ['class' => 'form-control'],
        'labelOptions'=>['class'=>'col-sm-2 control-label'],
        'template' => "{label}<div class='col-sm-10'>{input}{hint}{error}</div>",],
    ]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'sort')->textInput() ?>

    <?= $form->field($model, 'score')->textInput() ?>

   <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', '创建') : Yii::t('app', '保存修改'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
