<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence($nbWords = 10, $variableNbWords = true);

        return [
            'title' => $title,
            'excerpt' => $this->faker->sentence($nbWords = 20, $variableNbWords = true),
            'body' => $this->faker->paragraph(3, false),
            'slug' => Str::slug($title),
            'category_id' => random_int(1, 10),
            'user_id' => random_int(1, 10),
            'published_at' => $this->faker->dateTime($max = 'now', $timezone = null)
        ];
    }
}
