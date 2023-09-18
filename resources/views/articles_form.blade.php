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
                    <form method="post" action="{{route('articles.store')}}">
                        @csrf
                        <input type="text" name="name">
                        <input type="text" name="slug">
                        <select type="text" name="category">
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category}}</option>
                            @endforeach
                        </select>
                        <input type="text" name="image">
                        <input type="text" name="content">
                        <input type="text" name="is_active">
                        <input type="text" name="sort">
                        <input type="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
