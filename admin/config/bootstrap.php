<?php

use yii\helpers\Html;

Yii::$container->set(\yii\widgets\Breadcrumbs::class, [
    'itemTemplate' => '<li class="breadcrumb-item">{link}</li>',
    'activeItemTemplate' => '<li class="breadcrumb-item active">{link}</li>',
]);

Yii::$container->set(\yii\grid\GridView::class, [
    'tableOptions' => ['class' => 'table table-hover mb-0'],
    'options' => ['class' => 'grid-view'],
    'layout' => '<div class="card">{items}</div><div class="clearfix mt-2">{pager}</div>',
    'pager' => [
        'options' => [
            'class' => 'pagination pull-right',
        ],
    ]
]);

Yii::$container->set(\yii\grid\DataColumn::class, [
    'headerOptions' => ['class' => 'text-nowrap'],
]);

Yii::$container->set(\yii\widgets\LinkPager::class, [
    'linkContainerOptions' => [
        'class' => 'page-item',
    ],
    'linkOptions' => [
        'class' => 'page-link',
    ],
    'disabledListItemSubTagOptions' => [
        'class' => 'page-link',
    ]
]);

Yii::$container->set(\yii\grid\ActionColumn::class, [
    'header' => 'Action',
    'headerOptions' => [
        'class' => 'text-center',
        'style' => 'width: 1px;'
    ],
    'contentOptions' => [
        'class' => 'text-center text-nowrap',
    ],
    'template' => '{update} {delete}',
    'buttons' => [
        'view' => function ($url) {
            return Html::a('<i class="far fa-eye"></i>', $url, [
                'class' => 'btn btn-outline-secondary btn-sm',
                'data-pjax' => '0',
                'title' => 'View',
            ]);
        },
        'update' => function ($url) {
            return Html::a('<i class="far fa-pencil"></i>', $url, [
                'class' => 'btn btn-outline-secondary btn-sm',
                'data-pjax' => '0',
                'title' => 'Update',
            ]);
        },
        'delete' => function ($url) {
            return Html::a('<i class="far fa-trash"></i>', $url, [
                'class' => 'btn btn-outline-secondary btn-sm',
                'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                'data-method' => 'post',
                'data-pjax' => '0',
                'title' => 'Delete',
            ]);
        },
    ]
]);

Yii::$container->set(\yii\grid\SerialColumn::class, [
    'headerOptions' => [
        'style' => 'width: 20px',
    ],
    'contentOptions' => [
        'class' => 'text-right',
    ]
]);

Yii::$container->set(\yii\data\Pagination::class, [
    'defaultPageSize' => 20,
    'pageSizeLimit' => [1, 100],
]);

Yii::$container->set(\yii\bootstrap4\ActiveForm::class, [
    'validateOnBlur' => false,
    'validateOnChange' => false,
    'errorSummaryCssClass' => 'alert alert-danger',
    'options' => [
        'autocomplete' => 'off'
    ],
    'layout' => 'horizontal',
]);

Yii::$container->set(\lav45\widget\AjaxCreate::class, [
    'optionsPjax' => [
        'linkSelector' => false,
        'formSelector' => false,
        'enablePushState' => false,
    ]
]);
