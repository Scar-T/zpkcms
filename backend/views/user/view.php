<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('添加管理', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('修改', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id',
            [
                'attribute'=>'avatarTm',
                'value'=>$model->avatarTm,
                'format' => ['image',['width'=>'50','height'=>'50']],
            ],
            'username',
            // 'password',
            // 'role',
            'sex',
            'birthday',
            'status',
            // 'avatarTm',
            // 'avatar',
            'email:email',
            'createTime',
            'modifyTime',
            'last_visit',
            // 'userType',
            // 'authkey',
            // 'accessToken',
            // 'remainder',
        ],
    ]) ?>

</div>
