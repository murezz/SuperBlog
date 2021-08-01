<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(3, 4)),
            'user_id' => mt_rand(1, 3),
            'slug' => $this->faker->slug(),
            'body' => $this->faker->paragraph(mt_rand(5, 10)),
        ];
    }
}
