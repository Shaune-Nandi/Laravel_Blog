<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Post_Description' => $this->faker->paragraphs(2),
            
            'Post_Created_By' => User::factory(),

            /* 'Post_Created_By' => Post::factory()
                ->count(2)
                ->for(User::factory())
                ->create() */

        ];
    }
}
