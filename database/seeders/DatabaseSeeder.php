<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {

        // passando qual class vai rodar no nosso comando
        $this->call([
            // UserSeeder::class,

        ]);

        // usando o model
        User::factory(40)->create();
        Category::factory(30)->create(); //vai rodar 5 vezes
        Task::factory(100)->create();

    }
}
