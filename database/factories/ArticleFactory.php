<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $fakeText = fake()->text(50);
        $intNotZero = fake()->randomDigitNotZero();
        $categories_id = Category::query()->get('id')->toArray();
//        foreach ($categories_id as $key => $category_id) {
//            $cat_id = $category_id['id'];
//            dd($cat_id);
//        }
        return [
            'name' => $fakeText,
            'slug' => Str::slug($fakeText),
            'category_id' => fake()->randomElement($categories_id)['id'],
            'image' => fake()->image(),
            'content' => $fakeText,
            'is_active' => fake()->randomElement([0, 1]),
            'sort' => $intNotZero
        ];
    }
}
