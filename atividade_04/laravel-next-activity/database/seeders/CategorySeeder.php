<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder {
    public function run() {
        $categories = [
            'Ficção Científica', 'Fantasia', 'História', 
            'Tecnologia', 'Romance', 'Suspense'
        ];

        foreach ($categories as $name) {
            Category::firstOrCreate(['name' => $name]);
        }
    }
}