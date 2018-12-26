<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = '修改: ' . ' ' . $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="panel">

   	<div class="panel-heading">
		<span class="panel-title"><?= Html::encode($this->title) ?></span>
	</div>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>