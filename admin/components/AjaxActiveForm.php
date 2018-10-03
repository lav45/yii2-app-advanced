<?php

namespace admin\components;

use yii\base\Widget;
use yii\bootstrap\ActiveForm;

Widget::$autoIdPrefix = 'a';

class AjaxActiveForm extends ActiveForm
{
}