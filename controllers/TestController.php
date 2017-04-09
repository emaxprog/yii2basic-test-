<?php
/**
 * Created by PhpStorm.
 * User: alexandr
 * Date: 09.04.17
 * Time: 16:53
 */

namespace app\controllers;


use app\models\ImageUpload;
use app\models\Test;
use yii\web\Controller;
use Yii;
use yii\web\UploadedFile;

class TestController extends Controller
{
    public function actionIndex()
    {
        $test = new Test();

        echo $test->property1;
        echo $test->property2;
        echo $test->foo();
    }

    public function actionSetImage()
    {
        $model = new ImageUpload();

        if (Yii::$app->request->isPost) {

            $article = $this->findModel($id);

            $file = UploadedFile::getInstance($model, 'image');

            $article->saveImage($model->uploadFile($file));

        }

        return $this->render('index', ['model' => $model]);
    }

}