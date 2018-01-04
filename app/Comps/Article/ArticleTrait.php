<?php
/**
 * Created by PhpStorm.
 * User: birjemin
 * Date: 16/12/2017
 * Time: 12:42 AM
 */

namespace App\Comps\Article;


/**
 * Class ArticleTrait
 * @package App\Comps\Article
 */
trait ArticleTrait
{
    /**
     * @return ArticleModule
     */
    public static function getArticleModule()
    {
        return new ArticleModule();
    }

    /**
     * @return ArticleMapper
     */
    public static function getArticleMapper()
    {
        return new ArticleMapper();
    }
}