<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'author' => 3,
            'title' => $this->faker->sentence(mt_rand(2,8)),
            'news_content' => $this->faker->paragraphs(mt_rand(5,10), true)
        ];
    }
}
