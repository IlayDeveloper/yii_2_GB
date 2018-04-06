<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\models\Product;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $wheather array */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>

    <p>
        <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'name',
                'format' => 'raw',
                'value' => function(Product $model){
                    return Html::a($model->name, ["view?id={$model->id}"]);
                },
                'contentOptions' => []
            ],
            'price',
            'description',
            [
                'attribute' => 'created_at',
                'contentOptions' => ['class' => 'small'],
                'format' => 'datetime',
            ],
            'updated_at:datetime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?= \yii\widgets\DetailView::widget([
            'model' => $wheather
        ]
    ); ?>

    <?php Pjax::end(); ?>
</div>
