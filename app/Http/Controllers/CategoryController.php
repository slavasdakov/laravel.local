<?php

namespace App\Http\Controllers;

use App\Category;
use App\News;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        return view('news.categories')->with('categories', Category::getCategories());
    }

    public function show($name) {
        return view('news.category')->with('news', News::getNewsByCategoryName($name));
    }

}
