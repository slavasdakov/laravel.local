<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
   public function index(){
       return view('news.news')->with('news', News::getNewsId(2));
   }
   public function show($id){
       return view('news.newsOne')->with('id',$id);
   }
}
