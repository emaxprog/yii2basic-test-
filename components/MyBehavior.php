<?php
/**
 * Created by PhpStorm.
 * User: alexandr
 * Date: 09.04.17
 * Time: 16:51
 */

namespace app\components;


use app\models\Test;
use yii\base\Behavior;

class MyBehavior extends Behavior
{
    public $property1 = 'prop1';
    public $property2 = 'prop2';

    public function foo()
    {
        echo 'methodFoo';
    }

    public function events()
    {
        return [
            Test::EVENT_USER_REGISTERED => 'register'
        ];
    }

    public function register()
    {

    }
}