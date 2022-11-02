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
    public function definition()
    {
        return [
            'postSummary' => $this->faker->words(10, true),
            'postText' => $this->faker->paragraphs(1, true),
            'postTitle' => $this->faker->words(5, true),
        ];
    }
}
