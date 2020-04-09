<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Category::create([
            'categoryName' => 'Marketing'
        ]);

        Category::create([
            'categoryName' => 'Business'
        ]);

        Category::create([
            'categoryName' => 'Finance'
        ]);

        Category::create([
            'categoryName' => 'Entrepreneurship'
        ]);

        Category::create([
            'categoryName' => 'Science'
        ]);

        Category::create([
            'categoryName' => 'Biography'
        ]);
    }
}
