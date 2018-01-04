<?php
/**
 * Created by PhpStorm.
 * User: birjemin
 * Date: 15/12/2017
 * Time: 11:35 PM
 */

namespace App\Comps\Article;


use App\Models\Article;
use App\Repository\BaseRepository;

/**
 * Class ArticleRepository
 * @package App\Comps\Article
 */
class ArticleRepository extends BaseRepository
{
    /**
     * @return Article
     */
    public function model()
    {
        // TODO: Implement model() method.
        return Article::class;
    }

    public function getList()
    {
        return $this->model()
            ::get();
    }
}