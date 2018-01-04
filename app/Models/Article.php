<?php

/**
 * Created by PhpStorm.
 * User: birjemin
 * Date: 15/12/2017
 * Time: 11:29 PM
 */
namespace App\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * Class Article
 * @package App\Models
 */
class Article extends Model
{
    protected $table = 'article';

    public $timestamps = false;
}