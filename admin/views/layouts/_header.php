<?php
/* @var $this \yii\web\View */

use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\bootstrap4\Modal;

$modal_footer = '<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>'.
    Html::beginForm(['/site/logout'], 'post') .
    Html::submitButton('Logout', ['class' => 'btn btn-primary']) .
    Html::endForm();

$modal = Modal::begin([
    'title' => 'Ready to Leave?',
    'closeButton' => ['label' => '<i class="fal fa-times"></i>'],
    'footer' => $modal_footer
]);

echo 'Select "Logout" below if you are ready to end your current session.';

Modal::end();

NavBar::begin([
    'brandLabel' => 'Admin',
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar-expand-lg navbar-dark bg-dark',
    ],
]);

echo Nav::widget([
    'activateItems' => true,
    'activateParents' => true,
    'encodeLabels' => false,
    'options' => ['class' => 'navbar-nav ml-auto'],
    'items' => Yii::$app->params['menu'],
]);

echo Nav::widget([
    'options' => ['class' => 'navbar-nav ml-auto'],
    'items' => [
        [
            'encode' => false,
            'label' => '<i class="far fa-sign-out-alt"></i> Logout',
            'linkOptions' => [
                'data' => [
                    'toggle' => 'modal',
                    'target' => '#' . $modal->id,
                ]
            ]
        ]
    ],
]);

NavBar::end();
