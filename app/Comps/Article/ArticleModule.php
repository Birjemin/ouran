<?php

/**
 * Created by PhpStorm.
 * User: birjemin
 * Date: 15/12/2017
 * Time: 11:30 PM
 */
namespace App\Comps\Article;


/**
 * Class ArticleModule
 * @package App\Comps\Article
 */
class ArticleModule
{
    private $articleService;

    /**
     * ArticleModule constructor.
     */
    public function __construct()
    {
        $this->articleService = new ArticleService();
    }

    /**
     * @return ArticleRepository
     */
    public function getList()
    {
        return $this->articleService->getArticleRepository()->getList();
    }
}