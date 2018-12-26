<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\search\MemberSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '会员列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel">
    <div class="panel-heading">
        <span class="panel-title"><?= Html::encode($this->title) ?></span>
    </div>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="panel-body">
        <?= Html::a('添加会员', ['create'], ['class' => 'btn btn-success']) ?>
    </div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            array(
                'format' => 'raw',
                'attribute' => 'avatarTm',
                'label'=>'头像',
                'value'=>function($filterModel){
                    return Html::img(yii::$app->request->hostInfo.$filterModel->avatarTm, ['width' =>30]);
                },
            ),            
            'username',
            // 'password',
            'nickname',
            // 'role',
            'sex',
            // 'birthday',
            'status',
            // 'avatarTm',
            // 'avatar',
            'email:email',
            // 'createTime',
            // 'modifyTime',
            // 'last_visit',
            // 'userType',
            // 'authkey',
            // 'accessToken',
            'remainder',
            'integral',
            // 'rank',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
