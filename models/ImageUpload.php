<?php
/**
 * Created by PhpStorm.
 * User: alexandr
 * Date: 09.04.17
 * Time: 21:09
 */

namespace app\models;


use yii\base\Model;
use yii\web\UploadedFile;
use Yii;

class ImageUpload extends Model
{
    public $image;

    public function uploadFile(UploadedFile $file)
    {
        $file->saveAs(Yii::getAlias('@web') . 'upload/' . $file->name);

        return $file->name;
    }

}