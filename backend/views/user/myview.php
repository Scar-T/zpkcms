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
        <?= Html::a('修改', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id',
            [
                'attribute'=>'avatarTm',
                'value'=>$model->avatarTm,
                'format' => ['image',['width'=>'80','height'=>'80']],
            ],
            'username',
            // 'password',
            'role',
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
