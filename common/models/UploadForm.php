<?php
namespace common\models;

use yii\base\Model;
use yii\web\UploadedFile;
use yii\helpers\Html;
use yii\imagine\Image;
use yii;

/**
 * UploadForm is the model behind the upload form.
 */
class UploadForm extends Model
{
    /**
     * @var UploadedFile|Null file attribute
     */
    public $file;
    public $fileDoc;
    public $fileVideo;
    /**
     * @return array the validation rules.
     */
    public function rules()
    {
          return [
            [['file'], 'file', 'extensions' => 'jpg,png,jpeg,bmp', 'mimeTypes' => 'image/jpg,image/png,image/jpeg,image/bmp',],
            [['fileDoc'],'file','extensions' => 'doc,docx,pdf,txt,pptx,ppt',],
            [['fileVideo'],'file','extensions' => 'flv,swf,mov,3gp,mp4,f4v','maxSize' => 800*1024*1024],
        ];
    }

  
    public function randomFilename() {
        return $this->randomNum();
    }

    public function createImagePathWithExtension($extension,$destDir="/uploads/backend/user/"){
        $datePart = date("YmdHis");
        return $destDir . $datePart.$this->randomFilename().'.'.$extension;
    }
    /**
    * 生成随机数
    */
    public  function randomNum($length=10)
    {
        $str = '';
        for($i = 0; $i < $length; $i++) {
            $str .= mt_rand(0, 9);
        }

        return $str;
    }

    public  function createThumbnail($filename, $thumbnailFilename, $thumbnailWidth, $thumbnailHeight)
    {
    	
        $absoluteFilename = Yii::$app->params['imageDirectoryBasePath'] . $filename;
        $absoluteThumbnail = Yii::$app->params['imageDirectoryBasePath'] . $thumbnailFilename;    
        $destPath = dirname($absoluteThumbnail);//echo $destPath;exit;
       
        // 创建图片子目录。
        if (!file_exists($destPath)) {
            if(false === mkdir($destPath, 0755, true)){
                throw new CHttpException(403, '没有图片目录操作权限 ');
            }       
        }
        Image::thumbnail( $absoluteFilename, $thumbnailWidth, $thumbnailHeight)->save(Yii::getAlias($absoluteThumbnail), ['quality' => 50]);
    }

    public function saveImage($uploadedFile, $filename){
        $destFile =yii::$app->params['imageDirectoryBasePath'] . $filename;
        $destPath = dirname($destFile);//echo $destPath;exit;
        
        // 创建图片子目录。
        if (!file_exists($destPath)) {
            if(false === mkdir($destPath, 0755, true)){
                throw new CHttpException(403, '没有图片目录操作权限 ');
            }       
        }

      $uploadedFile->saveAs($destFile);
    }

    public function deleteImage($filePath)
    {
        if (!empty($filePath)) {
            $originFile = Yii::$app->params['imageDirectoryBasePath'] . $filePath;
            if (file_exists($originFile)) {
                unlink($originFile);
            }
        }
    }

}