<?php
/**
 * Created by PhpStorm.
 * User: birjemin
 * Date: 16/12/2017
 * Time: 1:44 AM
 */

namespace App\Comps\Article;


use App\Mapper\BaseMapper;
use App\Models\Article;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ArticleMapper
 * @package App\Comps\Article
 */
class ArticleMapper extends BaseMapper
{
    /**
     * @param Article $model
     * @param array $keys
     *
     * @return array
     */
    public function doMap(Model $model, $keys = [])
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