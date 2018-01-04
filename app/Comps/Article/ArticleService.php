<?php

/**
 * Created by PhpStorm.
 * User: birjemin
 * Date: 15/12/2017
 * Time: 11:30 PM
 */
namespace App\Comps\Article;


/**
 * Class ArticleService
 * @package App\Comps\Article
 */
class ArticleService
{
    private $articleRepository;

    /**
     * ArticleService constructor.
     */
    public function __construct()
    {
        $this->articleRepository = new ArticleRepository();
    }

    /**
     * @return ArticleRepository
     */
    public function getArticleRepository()
    {
        return $this->articleRepository;
    }
}