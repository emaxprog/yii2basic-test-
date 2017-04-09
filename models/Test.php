<?php
/**
 * Created by PhpStorm.
 * User: alexandr
 * Date: 09.04.17
 * Time: 16:54
 */

namespace app\models;


use app\components\MyBehavior;
use yii\base\Model;

class Test extends Model
{
    public $name = 'TestModel';

    const EVENT_USER_REGISTERED = 'User registered';

    public function userRegistered()
    {
        $this->trigger(self::EVENT_USER_REGISTERED);
    }

    public function behaviors()
    {
        return [
            [
                'class' => MyBehavior::className()
            ]
        ];
    }
}