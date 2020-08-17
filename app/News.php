<?php

namespace App;


class News
{
    private static $news = [
        1 => [
            'id' => 1,
            'title' => 'Новость 1',
            'text' => 'А у нас новость 1 и она очень хорошая!',
            'isPrivate' => false,
            'category' => 1
        ],

        2 => [
            'id' => 2,
            'title' => 'Новость 2',
            'text' => 'А у нас новость2 и она очень хорошая!',
            'isPrivate' => true,
            'category' => 1
        ],
        3 => [
            'id' => 3,
            'title' => 'Новость 3',
            'text' => 'А у нас новость 3 и она очень хорошая!',
            'isPrivate' => false,
            'category' => 2
        ],

        4 => [
            'id' => 4,
            'title' => 'Новость 4',
            'text' => 'А у нас новость4 и она очень хорошая!',
            'isPrivate' => true,
            'category' => 2
        ],


    ];
    public static function getNewsByCategoryName($name) {
        $id = Category::getCategoryIdByName($name);
        $news = [];
        foreach (static::$news as $item) {
            if ($item['category'] == $id) {
                $news[] = $item;
            }
        }
        return $news;
    }


    public static function getNews()
    {
        return static::$news;
    }

    public static function getNewsId($id)
    {
        return static::$news[$id];
    }

}
