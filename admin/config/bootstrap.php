<?php

use lav45\widget\AjaxCreate;
use yii\bootstrap4\ActiveForm;
use yii\data\Pagination;
use yii\grid\ActionColumn;
use yii\grid\DataColumn;
use yii\grid\GridView;
use yii\grid\SerialColumn;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use yii\widgets\LinkPager;

Yii::$container->set(Breadcrumbs::class, [
    'itemTemplate' => '<li class="breadcrumb-item">{link}</li>',
    'activeItemTemplate' => '<li class="breadcrumb-item active">{link}</li>',
]);

Yii::$container->set(GridView::class, [
    'tableOptions' => ['class' => 'table table-hover mb-0'],
    'options' => ['class' => 'grid-view'],
    'layout' => '<div class="card">{items}</div><div class="mt-2 d-flex justify-content-between">{pager}</div>',
    'pager' => [
        'options' => [
            'class' => 'pagination',
        ],
    ]
]);

Yii::$container->set(DataColumn::class, [
    'headerOptions' => ['class' => 'text-nowrap'],
]);

Yii::$container->set(LinkPager::class, [
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

Yii::$container->set(ActionColumn::class, [
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
        'view' => static function ($url) {
            return Html::a('<i class="far fa-eye"></i>', $url, [
                'class' => 'btn btn-outline-secondary btn-sm',
                'data-pjax' => '0',
                'title' => Yii::t('yii', 'View'),
            ]);
        },
        'update' => static function ($url) {
            return Html::a('<i class="far fa-pencil"></i>', $url, [
                'class' => 'btn btn-outline-secondary btn-sm',
                'data-pjax' => '0',
                'title' => Yii::t('yii', 'Update'),
            ]);
        },
        'delete' => static function ($url) {
            return Html::a('<i class="far fa-trash"></i>', $url, [
                'class' => 'btn btn-outline-secondary btn-sm',
                'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                'data-method' => 'post',
                'data-pjax' => '0',
                'title' => Yii::t('yii', 'Delete'),
            ]);
        },
    ]
]);

Yii::$container->set(SerialColumn::class, [
    'headerOptions' => [
        'style' => 'width: 20px',
    ],
    'contentOptions' => [
        'class' => 'text-right',
    ]
]);

Yii::$container->set(Pagination::class, [
    'defaultPageSize' => 20,
    'pageSizeLimit' => [1, 100],
]);

Yii::$container->set(ActiveForm::class, [
    'validateOnBlur' => false,
    'validateOnChange' => false,
    'errorSummaryCssClass' => 'alert alert-danger',
    'options' => [
        'autocomplete' => 'off'
    ],
    'layout' => 'horizontal',
]);

Yii::$container->set(AjaxCreate::class, [
    'optionsPjax' => [
        'linkSelector' => false,
        'formSelector' => false,
        'enablePushState' => false,
    ]
]);
