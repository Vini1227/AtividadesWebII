<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Borrowing;
use App\Models\Book;

class UserBorrowingSeeder extends Seeder {
    public function run() {
        // Garanta que existam livros antes de criar empréstimos
        if (Book::count() == 0) {
            $this->command->error('Nenhum livro encontrado. Execute AuthorPublisherBookSeeder primeiro.');
            return;
        }

        User::factory(10)->create()->each(function ($user) {
            // Pega um livro aleatório (garantindo que existe)
            $book = Book::inRandomOrder()->first();
            
            if ($book) {
                Borrowing::factory()->create([
                    'user_id' => $user->id,
                    'book_id' => $book->id,
                    'borrowed_at' => now()->subDays(rand(1, 30)),
                    'returned_at' => rand(0, 1) ? now()->addDays(rand(1, 15)) : null,
                ]);
            }
        });
    }
}