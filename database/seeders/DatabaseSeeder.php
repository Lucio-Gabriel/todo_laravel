<?php

namespace Database\Seeders;

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
            UserSeeder::class,
            CategorySeeder::class,
            TaskSeeder::class,
        ]);



    }
}
