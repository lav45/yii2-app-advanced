<?php
/**
 * @var $this yii\web\View
 * @var $model admin\models\LoginForm
 */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Login';
?>
<div class="site-login">
    <div class="row justify-content-md-center mt-5">
        <div class="col col-md-4">

            <h1><?= Html::encode($this->title) ?></h1>

            <?php $form = ActiveForm::begin([
                'validateOnBlur' => false,
                'layout' => 'default',
            ]); ?>

                <?= $form->field($model, 'login')->input('text', ['placeholder' => 'login', 'autofocus' => 'autofocus'])->label(false) ?>

                <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'password'])->label(false) ?>

                <?= $form->field($model, 'rememberMe')->checkbox([
                    'class' => 'custom-control-input',
                    'label' => $model->getAttributeLabel('rememberMe'),
                    'template' => '<div class="custom-control custom-checkbox mb-3">{input}{beginLabel}{labelTitle}{endLabel}{hint}{error}</div>',
                    'labelOptions' => [
                        'class' => 'custom-control-label'
                    ],
                ]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-lg btn-primary btn-block', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
