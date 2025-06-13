<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Book;
use App\Models\Author;
use App\Models\Category;
use App\Models\Publisher;

class BookFactory extends Factory
{
    protected $model = Book::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'author_id' => Author::factory(),
            'category_id' => \App\Models\Category::inRandomOrder()->first()->id,
            'publisher_id' => Publisher::factory(),
            'published_year' => $this->faker->year
        ];
    }
}

