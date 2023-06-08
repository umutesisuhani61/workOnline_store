<?php

namespace Database\Seeders;

use App\Category as AppCategory;
use Illuminate\Database\Seeder;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       
        Category::create([
            'name' => 'Books',
            'lft' => 1,
            'rgt' => 10,
        ]);
        Category::create([
            'name' => 'Pens',
            'lft' => 10,
            'rgt' => 20,
        ]);
        Category::create([
            'name' => 'Student',
            'lft' => 20,
            'rgt' => 30,
        ]);
        
        Category::create([
            'name' => 'Store',
            'lft' => 30,
            'rgt' => 40,
        ]);
        
        
       
    }
}
