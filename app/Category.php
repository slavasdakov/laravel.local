<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   private static $category = [
       [
           'id' => 1,
           'category' => 'sport'

       ],
       [
           'id' => 2,
           'category' => 'politic'
       ],
       [
           'id' => 3,
           'category' => 'economic'
       ]
   ];
    public static function getCategory()
    {
        return static::$category;
    }

}
