<?php
/**
 * Created by PhpStorm.
 * User: alexandr
 * Date: 09.04.17
 * Time: 13:10
 */

namespace app\controllers;


use app\models\Post;
use yii\web\Controller;

class PostController extends Controller
{
    public function actionIndex()
    {
        $posts = Post::find()->all();

        return $this->render('index', [
            'posts' => $posts,
        ]);
    }
}