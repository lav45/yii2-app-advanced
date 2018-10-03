<?php
/**
 * @var $this yii\web\View
 * @var $dataProvider yii\data\ActiveDataProvider
 */

use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
use lav45\widget\AjaxCreate;

$this->title = 'User';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <?php AjaxCreate::begin(); ?>

    <div class="active-panel clearfix">
        <div class="pull-left">
            <h2 style="margin-top: 0;">
                <?= Html::encode($this->title) ?>
            </h2>
        </div>
        <div class="pull-right">
            <?= Html::button('<span class="glyphicon glyphicon-plus"></span>', [
                'data-href' => Url::toRoute(['create']),
                'class' => 'btn btn-success',
                'title' => 'Create',
            ]) ?>
        </div>
    </div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'login',
            'is_active:boolean',
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update} {delete}',
                'buttons' => [
                    'update' => function() {
                        return Html::button('<span class="glyphicon glyphicon-pencil"></span>', [
                            'title' => 'Update',
                            'class' => 'btn btn-xs btn-default',
                            'data-href' => Url::toRoute(['update', 'id' => func_get_arg(2)]),
                            'data-pjax' => '0',
                        ]);
                    },
                ]
            ],
        ],
    ]); ?>

    <?php AjaxCreate::end(); ?>

</div>
