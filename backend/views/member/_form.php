<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model app\models\Member */
/* @var $form yii\widgets\ActiveForm */
?>

 <script src="<?php echo Yii::$app->request->hostInfo;?>/public/js/uploadPreview.js"></script>
 <script language="javascript" type="text/javascript" src="<?php echo yii::$app->request->hostInfo;?>/public/My97DatePicker/WdatePicker.js"></script>
<div class="panel-body form-controls-demo">

    <?php $form = ActiveForm::begin([
     'options' => ['class' => 'form-horizontal','enctype' =>'multipart/form-data'],
        'fieldConfig' => [
        'inputOptions' => ['class' => 'form-control'],
        'labelOptions'=>['class'=>'col-sm-2 control-label'],
        'template' => "{label}<div class='col-sm-10'>{input}{hint}{error}</div>",],
    ]); ?>
    <div class="form-group field-curriculum-coverUrl">
        <div class="col-sm-offset-2 col-sm-10" id="imgdiv">
            <img id="imgShow" height="100" src="<?= empty($model->avatar)? Yii::$app->request->hostInfo.'/public/images/user.jpg': Url::to(Yii::$app->request->hostInfo.$model->avatar);?>" />
        </div>
    </div>

    <?= $form->field($model, 'avatar')->fileInput() ?>
    <?php if ($model->isNewRecord) :?>
        <?= $form->field($model, 'username')->textInput(['maxlength' => 255]) ?>
        <?= $form->field($model, 'password')->passwordInput(['maxlength' => 255]) ?>
    <?php else:?>
    <div class="form-group field-user-username has-success">
        <label class="col-sm-2 control-label" for="user-username">用户名</label>
    <div class="col-sm-10">
        <label><?php echo $model->username;?></label><a href="javascript:void(0);" id="updatepw" data-pw="<?php echo $model->password;?>" data-val="1">修改密码</a>
    </div>
    </div>
    <div id="password" style="display: none;">
      <?= $form->field($model, 'password')->passwordInput(['maxlength' => 255]) ?>
    </div>
    <?php endif?>
    <?= $form->field($model, 'nickname')->textInput(['maxlength' => 255]) ?>


    <?= $form->field($model, 'sex')->radioList(['1'=>'男','2'=>'女']) ?>

    <?= $form->field($model, 'birthday')->textInput() ?>

    <?= $form->field($model, 'status')->radioList(['1'=>'正常','0'=>'禁用']) ?>


    <?= $form->field($model, 'email')->textInput(['maxlength' => 255]) ?>

   <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', '创建') : Yii::t('app', '保存修改'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<script type="text/javascript">
    init.push(function () {
        new uploadPreview({ UpBtn: "member-avatar", DivShow: "imgdiv", ImgShow: "imgShow" });

        $("#member-birthday").click(function(){
            WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})
        });

        $("#updatepw").click(function(){
            var val=$(this).attr("data-val");
            if (val==1) {
                $(this).html("取消密码修改");
                $(this).attr("data-val","2");
                $('#member-password').val("");
                $("#password").show();
            }else{
                 $(this).html("密码修改");
                $(this).attr("data-val","1");
                $("#password").hide();
                $('#member-password').val($(this).attr("data-pw"));
            }
        });
    });
</script>