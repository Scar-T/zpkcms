<?php

namespace backend\controllers;

use Yii;
use app\models\User;
use app\search\UserSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use common\models\UploadForm;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends Controller
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
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single User model.
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
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new User();

        if ($model->load(Yii::$app->request->post())) {
            $uploadedFile->file = UploadedFile::getInstance($model, 'avatar');
           if ($uploadedFile->file && $uploadedFile->validate()) {
                $filename=$uploadedFile->createImagePathWithExtension($uploadedFile->file->extension,'/uploads/user/headPic/');
                $fileThumbnailName=$uploadedFile->createImagePathWithExtension($uploadedFile->file->extension,'/uploads/user/headPicThumbnail/');
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
           
        }
        return $this->render('create', [
            'model' => $model,
        ]);
       
    }
    public function actionMyview(){
        $model=$this->findModel(yii::$app->user->identity->id);
            return $this->render('myview', [
                'model' => $model,
            ]);
    }
    /**
     * Updates an existing User model.
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
                $filename=$uploadedFile->createImagePathWithExtension($uploadedFile->file->extension,'/uploads/user/headPic/');
                $fileThumbnailName=$uploadedFile->createImagePathWithExtension($uploadedFile->file->extension,'/uploads/user/headPicThumbnail/');
                
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
    public function actionMymessage(){

        return $this->render('mymessage', [
            // 'model' => $model,
        ]);
    }
    /**
     * Deletes an existing User model.
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
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
