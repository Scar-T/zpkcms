<?php

namespace backend\controllers;

use Yii;
use app\models\Member;
use app\search\MemberSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use common\models\UploadForm;
/**
 * MemberController implements the CRUD actions for Member model.
 */
class MemberController extends Controller
{
    public function behaviors()
    {
        return [
            // 'verbs' => [
            //     'class' => VerbFilter::className(),
            //     'actions' => [
            //         'delete' => ['post'],
            //     ],
            // ],
        ];
    }

    /**
     * Lists all Member models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MemberSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Member model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Member model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Member();

        if ($model->load(Yii::$app->request->post())) {
            $uploadedFile->file = UploadedFile::getInstance($model, 'avatar');
            if ($uploadedFile->file && $uploadedFile->validate()) {
                $filename=$uploadedFile->createImagePathWithExtension($uploadedFile->file->extension,'/uploads/member/headPic/');
                $fileThumbnailName=$uploadedFile->createImagePathWithExtension($uploadedFile->file->extension,'/uploads/member/headPicThumbnail/');
                $model->avatar = $filename;
                $model->avatarTm= $fileThumbnailName;
            }
            $model->role=1;
            $model->createTime = date('Y-m-d H:i:s');
            $model->modifyTime = $model->createTime;
            $model->password = Yii::$app->security->generatePasswordHash($model->password);
            if ($model->save()) {
                if ($uploadedFile->file && $uploadedFile->validate()){
                    $uploadedFile->saveImage($uploadedFile->file,$filename);
                    $size_src=getimagesize(Yii::$app->request->hostInfo.$model->avatar);
           
                    $w=$size_src['0'];
                    $h=$size_src['1'];
                    $max=160;
                    if($w > $h){
                      $w=$max;
                      $h=$h*($max/$size_src['0']);
                     }else{
                           $h=$max;
                           $w=$w*($max/$size_src['1']);
                     }
                    $w=number_format($w, 0);
                    $h=number_format($h, 0);
                    $uploadedFile->createThumbnail($filename,$fileThumbnailName,$w,$h);
                }
                return $this->redirect(['view', 'id' => $model->id]);
            }
            
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Member model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $oldavatar = $model->avatar;
        $oldThum =$model->avatarTm;
        $oldPwd=$model->password;
        if ($model->load(Yii::$app->request->post())) {
             $uploadedFile = new UploadForm();
            $uploadedFile->file = UploadedFile::getInstance($model, 'avatar');
            if ($uploadedFile->file && $uploadedFile->validate()){
                $filename=$uploadedFile->createImagePathWithExtension($uploadedFile->file->extension,'/uploads/member/headPic/');
                $fileThumbnailName=$uploadedFile->createImagePathWithExtension($uploadedFile->file->extension,'/uploads/member/headPicThumbnail/');
                
                $model->avatar = $filename;
                $model->avatarTm= $fileThumbnailName;
                $uploadedFile->deleteImage($oldavatar);
                $uploadedFile->deleteImage($oldThum);
            }else {
                $model->avatar = $oldavatar;
                $model->avatarTm= $oldThum;
            }

             if ($oldPwd != $model->password) {
                $model->password = Yii::$app->security->generatePasswordHash($model->password);
             }else{
                $model->password=$oldPwd;
             }
            if ($model->save()) {
                 if ($uploadedFile->file && $uploadedFile->validate()){
                    $uploadedFile->saveImage($uploadedFile->file,$filename);
                    $size_src=getimagesize(Yii::$app->request->hostInfo.$model->avatar);
           
                    $w=$size_src['0'];
                    $h=$size_src['1'];
                    $max=160;
                    if($w > $h){
                      $w=$max;
                      $h=$h*($max/$size_src['0']);
                     }else{
                           $h=$max;
                           $w=$w*($max/$size_src['1']);
                     }
                    $w=number_format($w, 0);
                    $h=number_format($h, 0);
                    $uploadedFile->createThumbnail($filename,$fileThumbnailName,$w,$h);
                }
                return $this->redirect(['view', 'id' => $model->id]);
            }
            
        }
        return $this->render('update', [
            'model' => $model,
        ]);
        
    }

    /**
     * Deletes an existing Member model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Member model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Member the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Member::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
