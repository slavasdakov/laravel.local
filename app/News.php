<?php

namespace App;


use Faker\Provider\File;
use Illuminate\Support\Facades\Storage;

class News
{


    public static function getNewsByCategoryName($name) {
        $id = Category::getCategoryIdByName($name);
        $news = [];
        foreach (json_decode( file_get_contents('../storage/app/public/news.json'), true) as $item) {
            if ($item['category'] == $id) {
                $news[] = $item;
            }
        }
        return $news;
    }


    public static function getNews()
    {
        $news = json_decode( file_get_contents('../storage/app/public/news.json'), true);
        return $news;
    }

    public static function getNewsId($id)
    {
        $news =  $news = json_decode( file_get_contents('../storage/app/public/news.json'), true);
        return $news[$id];
    }

}
//$slava = file_get_contents('../storage/app/public/news.json');

//json_decode( file_get_contents('../storage/app/public/news.json'), true);
//dump($a);

