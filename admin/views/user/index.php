<?php
/**
 * @var $this yii\web\View
 * @var $dataProvider yii\data\ActiveDataProvider
 */

use yii\grid\ActionColumn;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
use lav45\widget\AjaxCreate;

$this->title = 'User';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <?php AjaxCreate::begin(); ?>

    <div class="d-flex justify-content-between mb-3">
        <h2 class="m-0"><?= Html::encode($this->title) ?></h2>
        <?= Html::button('Create', [
            'data-href' => Url::toRoute(['create']),
            'class' => 'btn btn-outline-success',
            'title' => 'Create'
        ]) ?>
    </div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'login',
            'is_active:boolean',
            [
                'class' => ActionColumn::class,
                'template' => '{update} {delete}',
                'buttons' => [
                    'update' => static function() {
                        return Html::button('<i class="far fa-pencil"></i>', [
                            'title' => 'Update',
                            'class' => 'btn btn-sm btn-outline-secondary',
                            'data-href' => Url::toRoute(['update', 'id' => func_get_arg(2)]),
                            'data-pjax' => '0',
                        ]);
                    },
                    'delete' => static function($url) {
                        return Html::a('<i class="far fa-trash"></i>', $url, [
                            'class' => 'btn btn-sm btn-outline-secondary',
                            'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                            'data-method' => 'post',
                            'data-pjax' => '0',
                            'title' => 'Delete',
                        ]);
                    },
                ]
            ],
        ],
    ]); ?>

    <?php AjaxCreate::end(); ?>

</div>
