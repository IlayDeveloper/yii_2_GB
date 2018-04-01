<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\Product;

class TestController extends Controller
{
    public function actionIndex ()
    {
        $product = new Product();

        $product->id = 1;
        $product->name = 'iphone 7';
        $product->price = '50 000';
        $product->description = 'Хороший прихороший смартфон!';

        return $this->render('index', ['product' => $product]);
    }
}
