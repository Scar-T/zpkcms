<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Member */

$this->title = '修改会员: ' . ' ' . $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Members', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="panel">

   	<div class="panel-heading">
		<span class="panel-title"><?= Html::encode($this->title) ?></span>
	</div>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>