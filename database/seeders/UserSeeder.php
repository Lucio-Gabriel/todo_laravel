<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    public function run()
    {
        //metodo rodar
        User::create([
            'name' => 'Usuario de teste',
            'email' => 'usarioteste@gmail.com',
            'password' => Hash::make('12345')
        ]);
    }
}
