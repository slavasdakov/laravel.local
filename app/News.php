<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Static_;

class News extends Model
{
    private static $news = [
        [
            'id' => 1,
            'title' => 'Новость 1',
            'text' => 'Новость №1'

        ],
        [
            'id' => 2,
            'title' => 'Новость 2',
            'text' => 'Новость №2'
        ]
    ];

    public static function getNews()
    {
        return static::$news;
    }

    public static function getNewsId($id)
    {
        foreach (static::getNews() as $news){
            if ($news['id'] = $id){
                return $news;
            }
        } return null;
    }

}

/*
 *
        for($i=0; $i <= count(static::$news); $i++){
        if(static::$news[$i]['id'] == static::$news[$i][$id] ){
            return static::$news[$i];
        }
        }
        return null;
 */
