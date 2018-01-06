<?php

/**
 * Created by PhpStorm.
 * User: birjemin
 * Date: 15/12/2017
 * Time: 11:29 PM
 */
namespace Https\Controllers\Article;


use App\Comps\Article\ArticleTrait;
use Https\Controllers\Controller;

/**
 * Class ArticleController
 * @package Https\Controller\Article
 */
class ArticleController extends Controller
{
    use ArticleTrait;

    /**
     * @return string
     */
    public function index()
    {
        $res = self::getArticleModule()->getList();
        $res = self::getArticleTransformer()->transformer($res);
        return renderJson(true, $res, '返回成功');
    }
}