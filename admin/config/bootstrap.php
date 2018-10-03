<?php

Yii::$container->set('yii\grid\GridView', [
    'pager' => [
        'options' => [
            'class' => 'pagination pull-right',
        ],
    ],
    'tableOptions' => [
        'class' => 'table table-hover'
    ],
    'options' => [
        'class' => 'panel panel-default'
    ],
    'layout' => "{items}{pager}",
]);

Yii::$container->set('yii\grid\DataColumn', [
    'headerOptions' => ['class' => 'text-nowrap'],
]);

Yii::$container->set('yii\grid\ActionColumn', [
    'header' => 'Action',
    'headerOptions' => [
        'class' => 'text-center col-md-1',
    ],
    'contentOptions' => [
        'class' => 'text-center text-nowrap',
    ],
    'buttonOptions' => [
        'class' => 'btn btn-default btn-xs',
    ]
]);

Yii::$container->set('yii\grid\SerialColumn', [
    'headerOptions' => [
        'style' => 'width: 20px',
    ],
    'contentOptions' => [
        'class' => 'text-right',
    ]
]);

Yii::$container->set('yii\data\Pagination', [
    'defaultPageSize' => 20,
    'pageSizeLimit' => [1, 100],
]);

Yii::$container->set('yii\bootstrap\ActiveForm', [
    'validateOnBlur' => false,
    'validateOnChange' => false,
    'errorSummaryCssClass' => 'alert alert-danger',
    'options' => [
        'autocomplete' => 'off'
    ],
    'layout' => 'horizontal',
]);

Yii::$container->set('lav45\widget\AjaxCreate', [
    'optionsPjax' => [
        'linkSelector' => false,
        'formSelector' => false,
        'enablePushState' => false,
    ]
]);
