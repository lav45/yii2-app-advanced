<?php
/**
 * @var $this yii\web\View
 * @var $model admin\models\User
 */

use yii\helpers\Html;

$this->title = 'Update User: ' . $model->login;

?>
<div class="user-update">

    <h2><?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
