<?php
/**
 * @var $this yii\web\View
 * @var $model admin\models\User
 */

use yii\helpers\Html;
use admin\components\AjaxActiveForm as ActiveForm;

?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model) ?>

    <?= $form->field($model, 'login')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_active')->checkbox() ?>

    <div class="form-group text-right">
        <?= Html::submitButton($model->getIsNewRecord() ? 'Create' : 'Update', ['class' => $model->getIsNewRecord() ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
