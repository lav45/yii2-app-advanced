<?php

namespace admin\components;

use yii\base\Widget;
use yii\bootstrap4\ActiveForm;

Widget::$autoIdPrefix = 'a';

class AjaxActiveForm extends ActiveForm
{
}