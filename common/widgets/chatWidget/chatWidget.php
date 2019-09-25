<?php

namespace common\widgets\chatWidget;

use Yii;
use yii\base\Widget;

class chatWidget extends Widget
{
    public function init()
    {

        parent::init();
    }

    public function run()
    {
        if (Yii::$app->user->isGuest) {
            $username = 'guest' . time();
        } else {
            $username = Yii::$app->user->identity->username;
        }

        return $this->render('index', ['username' => $username]);
    }
}