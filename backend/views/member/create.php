<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Member */

$this->title = '添加会员';
$this->params['breadcrumbs'][] = ['label' => 'Members', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel">

   	<div class="panel-heading">
		<span class="panel-title"><?= Html::encode($this->title) ?></span>
	</div>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>