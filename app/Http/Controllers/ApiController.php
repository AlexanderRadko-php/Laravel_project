<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function articles($page = 1) {
        return response()->json(Article::query()->paginate(10));
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
