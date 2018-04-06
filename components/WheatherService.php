<?php
/**
 * Created by PhpStorm.
 * User: Tusya
 * Date: 06.04.2018
 * Time: 14:57
 */

namespace app\components;

use yii\helpers\ArrayHelper;

class WheatherService extends \yii\base\component
{
    /**
     * @var array
     */
    public $cities = [];

    public function getCurrentWheather($city)
    {
        if (ArrayHelper::isIn($city, $this->cities)){
            $degrees =  mt_rand(-50, +50);
            return ["Прогноз погоды в {$city}" => $degrees . ' градусов'];
        }
        return ['Ошибка на сервере' => 'Ваш город - ' . $city . ' - не поддерживается'];
    }
}