<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Articles') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h6>Форма создания</h6>
                    <form method="post" class="article-create-form" enctype="multipart/form-data" action="{{$article->id ? route('articles.post_update', ['id' => $article->id]) : route('articles.store')}}" class="change-form">
                        @csrf
                        <input type="text" name="name" value="{{$article->name}}">
                        <input type="text" name="slug" value="{{$article->slug}}">
                        <select type="text" name="category_id" value="{{$article->category}}">
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                        <input type="text" name="content" value="{{$article->content}}">
                        <input type="text" name="is_active" value="{{$article->is_active}}">
                        <input type="text" name="sort" value="{{$article->sort}}">
                        <input type="file" name="image" value="{{$article}}">
                        <input type="submit" class="button">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
