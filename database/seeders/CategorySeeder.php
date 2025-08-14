<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Seeder Category Seperti Di Tinker
        Category::create([
            'nama' => 'Web programming',
            'color' => 'bg-red-200',
            'slug' => 'web-programming'
        ]);  
        Category::create([
            'nama' => 'Web Design',
            'color' => 'bg-purple-200',
            'slug' => 'web-design'
        ]);  
        Category::create([
            'nama' => 'Artificial Intelegent',
            'color' => 'bg-blue-200',
            'slug' => 'ai'
        ]);  
    }
}
