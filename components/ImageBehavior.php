<?php
/**
 * Created by PhpStorm.
 * User: alexandr
 * Date: 09.04.17
 * Time: 21:45
 */

namespace app\components;


use yii\base\Behavior;
use yii\web\UploadedFile;
use Yii;

class ImageBehavior extends Behavior
{
    public $imageFile;

    public function uploadFile(UploadedFile $file, $currentImage = null)
    {
        $this->deleteCurrentImage($currentImage);

        return $this->saveImage($file);
    }

    private function getFolder()
    {
        return Yii::getAlias('@web') . 'upload/';
    }

    private function generateFilename($file)
    {
        return strtolower(md5(uniqid($file->baseName)) . '.' . $file->extension);
    }

    public function deleteCurrentImage($currentImage)
    {
        if ($currentImage && $this->imageExists($currentImage)) {
            unlink($this->getFolder() . $currentImage);
        }
    }

    private function saveImage($file)
    {
        $filename = $this->generateFilename($file);

        $file->saveAs($this->getFolder() . $filename);

        return $filename;
    }

    private function imageExists($currentImage)
    {
        return (!empty($currentImage) && $currentImage != null) ? file_exists($this->getFolder() . $currentImage) : false;
    }
}