<?php

namespace Incfile\MyBlog\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Incfile\MyBlog\Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'identifier' => Str::random(),
            'title' => $this->faker->sentence,
            'extra' => json_encode(['tests' => 'value']),
            'body' => $this->faker->paragraph,
            'slug' => \Illuminate\Support\Str::slug($this->faker->sentence),
        ];
    }
}
