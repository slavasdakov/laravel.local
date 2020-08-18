<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\News;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class IndexController extends Controller
{
    public function index() {
        return view('admin.index');
    }

    public function create(Request $request) {

        if ($request->isMethod('post')) {
            //TODO сохранить данные
            $news = json_decode(file_get_contents('../storage/app/public/news.json'), true);
            $lastId = count(News::getNews())+1;
            $new = $request->except('_token');
            $new['id'] = $lastId;

            if(array_key_exists('isPrivate', $new)){
                $new['isPrivate'] = true;
            } else {
                $new['isPrivate'] = false;
            }


            $news[$lastId] = $new ;
           file_put_contents('../storage/app/public/news.json' , json_encode($news));


            $request->flash();

            return redirect()->route('admin.create');

        }

        //dump($request->old());
        return view('admin.create', [
            'categories' => Category::getCategories()
        ]);
    }

    public function test1() {

        return response()->download('1.jpg');
    }

        public function test2() {

        return response()->json(News::getNews())
            ->header('Content-Disposition', 'attachment; filename = "json.txt"')
            ->setEncodingOptions(JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

    }


}
