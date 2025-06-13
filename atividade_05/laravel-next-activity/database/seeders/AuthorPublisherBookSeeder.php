<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Publisher;
use App\Models\Book;
use App\Models\Category;

class AuthorPublisherBookSeeder extends Seeder {
    public function run() {
        // Crie autores e editoras primeiro
        Author::factory(50)->create();
        Publisher::factory(10)->create();

        // Crie livros (garantindo que há categorias)
        if (Category::count() == 0) {
            $this->call(CategorySeeder::class);
        }

        Book::factory(200)->create();
    }
}

