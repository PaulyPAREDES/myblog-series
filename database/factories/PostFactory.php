<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    protected $model =Post::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->title(),
            'poster' =>'posts/'.fake()->image('public/storage/posts',640, 480, null,false),
            'status'=>fake()->randomElement([1,2]),
            'content' => fake()->paragraph(),
            //'category_id' => Category::factory(),    
            'category_id' => Category::all()->random()->id,
            'user_id' => Category::all()->random()->id,
            //'user_id' => User::factory()
        ];

    }
}
