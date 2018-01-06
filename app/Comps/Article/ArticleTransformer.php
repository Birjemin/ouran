<?php
/**
 * Created by PhpStorm.
 * User: birjemin
 * Date: 16/12/2017
 * Time: 1:44 AM
 */

namespace App\Comps\Article;


use App\Transformer\BaseTransformer;
use App\Models\Article;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ArticleTransformer
 * @package App\Comps\Article
 */
class ArticleTransformer extends BaseTransformer
{
    /**
     * @param Article $model
     * @param array $keys
     *
     * @return array
     */
    public function doTransformer(Model $model, $keys = [])
    {
        // TODO: Implement doMap() method.
        $res = [
            'id'         => $model->id,
            'title'      => $model->title,
            'content'    => $model->content,
            'created_at' => $model->created_at,
        ];
        return $res;
    }
}