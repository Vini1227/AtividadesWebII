<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;    // Importe Author
use App\Models\Publisher; // Importe Publisher
use App\Models\Book;      // Importe Book
// Certifique-se que as imports de User e Borrowing também estão em UserBorrowingSeeder

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
  public function run() {
    $this->call([
        CategorySeeder::class,
        AuthorPublisherBookSeeder::class,
        UserBorrowingSeeder::class,
    ]);
}
}