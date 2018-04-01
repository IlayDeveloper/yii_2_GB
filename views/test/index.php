<?php
/**
 * Created by PhpStorm.
 * User: Tusya
 * Date: 01.04.2018
 * Time: 21:30
 * @var $this \yii\web\view
 * @var $product \app\models\Product
 *
 */
use \yii\widgets\DetailView;
?>
<h1>Магазин смартфонов</h1>

<?=DetailView::widget(['model' => $product]);?>



