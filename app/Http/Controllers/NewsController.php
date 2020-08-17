<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index() {
        return view('news.index')->with('news', News::getNews());
    }

    public function show($id) {
            return view('news.One')->with('news', News::getNewsId($id));
    }

    public function add() {
        return view('news.add');
    }

}
