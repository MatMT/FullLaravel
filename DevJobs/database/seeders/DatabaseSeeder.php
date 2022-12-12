<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Usuarios default
        $mati = User::create([
            'name' => 'Mati',
            'email' => 'mati@correo.com',
            'password' => Hash::make('1234'),
            'email_verified_at' => date('Y-m-d H:i:s'),
            'remember_token' => true,
            'rol' => 2
        ]);
        $mati->save();

        $user = User::create([
            'name' => 'usuario',
            'email' => 'usuario@correo.com',
            'password' => Hash::make('asdf'),
            'email_verified_at' => date('Y-m-d H:i:s'),
            'remember_token' => true,
            'rol' => 2
        ]);
        $user->save();

        $this->call(SalarioSeeder::class);
        $this->call(CategoriasSeeder::class);
    }
}
