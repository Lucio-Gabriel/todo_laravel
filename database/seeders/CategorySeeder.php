<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{

    public function run()
    {
        //
        Category::create([
            'title' => 'Categoria de teste',
            'color' => '#ff0000',
            'user_id' => 1
        ]);

    }
}
