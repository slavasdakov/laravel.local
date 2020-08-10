<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('news.categoryNews');
    }
    public function economic(){
        return view('news.economicNews');
    }
    public function political(){
        return view('news.politicalNews');
    }
    public function important(){
        return view('news.importantNews');
    }
    public function sport(){
        return view('news.sportNews');
    }
}
