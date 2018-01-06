<?php

/**
 * Created by PhpStorm.
 * User: birjemin
 * Date: 16/12/2017
 * Time: 1:34 AM
 */
namespace App\Transformer;


use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BaseTransformer
 * @package App\Transformer
 */
abstract class BaseTransformer
{
    /**
     * @param $model
     * @param $keys
     *
     * @return array
     */
    public function transformer($model, $keys = [])
    {
        //$model = $model->all();
        if ($model instanceof Model) {
            $model = [$model];
        }

        if ($model instanceof Collection) {
            $model = $model->all();
        }
        if (!is_array($model)) {
            return [];
        }
        return array_map(function (Model $model) use ($keys) {
            return $this->doTransformer($model, $keys);
        }, $model);
    }

    /**
     * @param Model $model
     * @param array $keys
     *
     * @return mixed
     */
    abstract function doTransformer(Model $model, $keys = []);
}