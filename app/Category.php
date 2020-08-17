<?php

namespace App;


class Category
{
    private static $categories = [
        1 => [
            'id' => 1,
            'title' => 'Спорт',
            'slug' => 'sport'
        ],
        2 => [
            'id' => 2,
            'title' => 'Политика',
            'slug' => 'politics'
        ],
    ];

    public static function getCategories() {
        return static::$categories;
    }

    public static function getCategoryIdByName($name) {
        $id = null;
        foreach (static::$categories as $category) {
            if ($category['slug'] == $name) {
                $id = $category['id'];
                break;
            }
        }
        return $id;
    }

    public static function getCategoryById($id) {
        return static::$categories[$id];
    }
}
