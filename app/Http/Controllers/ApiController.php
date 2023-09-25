<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ApiController extends Controller
{
    public function articles($page = 1) {
        return response()->json(Article::query()->paginate(10));

//        Здесь будет подключение моего API
//        return response()->json(Article::query()->paginate(10))

//        Если я хочу получить данные со своего api

//        https://htmlbook.ru/samhtml/tablitsy/zagolovok-tablitsy
//        $client = new Client([
////            Весь ресурс
////            http://httpbin.org/v1/charitysearch
//            // Base URI is used with relative requests
////            Здесь мой сайт, с которого я получаю данные
////            'base_uri' => 'http://httpbin.org',
//            // You can set any number of default request options.
////            'timeout'  => 2.0,
//        ]);
//        Здесь то, что после url сайта
//        В данном случае
//        $responce = $client->post('/v1/charitysearch');
//        $data = json_decode($responce);
    }
    public function categories() {
        return response()->json(Category::query()->get());
    }
    public function category($id) {
        return response()->json(Article::query()->where('category_id', '=', $id)->get());
    }
    public function article($slug) {
        return response()->json(Article::query()->where('slug', '=', $slug)->get());
    }
}
