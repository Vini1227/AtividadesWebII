<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Inicializa o Faker se precisar
        FakerFactory::create()->unique(true);

        // Chama os seeders para popular as tabelas
        $this->call([
            CategorySeeder::class,
            AuthorPublisherBookSeeder::class,
            UserBorrowingSeeder::class, // Novo seeder adicionado aqui
        ]);
    }
}
