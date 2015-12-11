<?php

namespace app\components;

use yii\base\Component;
use yii\base\BootstrapInterface;
use yii\web\Session;

class langManager extends Component implements BootstrapInterface
{
    public function bootstrap($app)
    {
        $session = new Session;
        $session->open();

        if (isset($session['lang'])){
            $app->language = $session['lang'];
            return;
        }
        $app->language = 'ru';
    }
}