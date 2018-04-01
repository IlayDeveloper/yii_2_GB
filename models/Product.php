<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class Product extends Model
{
    public $id;
    public $name;
    public $price;
    public $description;

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'price' => 'Цена',
            'description' => 'Описание'
        ];
    }


}
