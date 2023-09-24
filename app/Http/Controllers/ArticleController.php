<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('articles', ['articles' => Article::query()->with('category')->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles_form', ['categories' => Category::query()->get(), 'article'  => new Article()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $path = '';

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images');
        }

        $article = new Article();

        $article->name = $request->string('name');
        $article->slug = $request->string('slug');
        $article->category_id = $request->integer('category_id');
        $article->image = $path;
        $article->content = $request->string('content');
        $article->is_active = $request->integer('is_active');
        $article->sort = $request->integer('sort');
        $article->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('articles_form', ['article' => Article::query()->where('id', '=', $id)->first(),
            'categories' => Category::query()->get()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $path = '';

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images');
        }

        $article = Article::query()->where('id', '=', $id)->first();
        $article->name = $request->string('name');
        $article->slug = $request->string('slug');
        $article->category_id = $request->integer('category_id');
        $article->image = $path;
        $article->content = $request->string('content');
        $article->is_active = $request->integer('is_active');
        $article->sort = $request->integer('sort');
        $article->save();

        return redirect(route('articles.index'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
