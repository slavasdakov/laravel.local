<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Category;

class CategoryController extends Controller
{
    public function index(){
        return view('news.categoryNews')->with('news', Category::getCategory());
    }

    public function show($categoryId){
        return view('news.CategoryOne')->with('news',News::getCategoryNews($categoryId));
    }

}
