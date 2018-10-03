<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model admin\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
            <h1><?= Html::encode($this->title) ?></h1>

            <p>Please fill out the following fields to login:</p>

            <?php $form = ActiveForm::begin(['layout' => 'default']); ?>

                <?= $form->field($model, 'login')
                    ->input('text', ['placeholder' => $model->getAttributeLabel('login'), 'autofocus' => true])
                    ->label(false) ?>

                <?= $form->field($model, 'password')
                    ->passwordInput(['placeholder' => $model->getAttributeLabel('password')])
                    ->label(false) ?>

                <div class="clearfix">
                    <div class="pull-left">
                        <?= $form->field($model, 'rememberMe')->checkbox() ?>
                    </div>
                    <div class="pull-right">
                        <div class="form-group text-right">
                            <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                        </div>
                    </div>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
