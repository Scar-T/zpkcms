<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\search\LevelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '会员等级';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel">
    <div class="panel-heading">
        <span class="panel-title"><?= Html::encode($this->title) ?></span>
    </div>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="panel-body">
        <?= Html::a('添加等级', ['create'], ['class' => 'btn btn-success']) ?>
    </div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'name',
            'sort',
            'score',
            'createTime',
            // 'modifyTime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
