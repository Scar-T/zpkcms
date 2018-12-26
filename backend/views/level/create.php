<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Level */

$this->title = '添加会员等级';
$this->params['breadcrumbs'][] = ['label' => 'Levels', 'url' => ['index']];
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