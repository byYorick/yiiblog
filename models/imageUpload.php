<?php
namespace app\models;



use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

class ImageUpload extends Model
{
    public $image;

    public function uploadFile(UploadedFile $file)
    {
      var_dump(Yii::getAlias('@web').'/'.'image/'.$file->name);die;

    $file->saveAs(Yii::getAlias('@webroot') .'/uploads/'. $file->name);
    }

}