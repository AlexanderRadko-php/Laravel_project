<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="cat_table">
                        <tr>
                            <th>ID категории</th>
                            <th>Название категории</th>
                            <th>Slug категории</th>
                        </tr>
                        @foreach($categories as $category)
                            <tr>
                                <td class="id_column">{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->slug}}</td>
{{--                                <td>{{$category->created_at}}</td>--}}
{{--                                <td>{{$category->updated_at}}</td>--}}
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
