<?php

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
        // $this->call(UserSeeder::class);
        App\User::create([
            'name' => 'Ricardo Monroy',
            'email' => 'rmonroy.rodriguez@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Morr3179*'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        App\User::create([
            'name' => 'Ramirín',
            'email' => 'jorgeruiz@grafikosidea.com',
            'email_verified_at' => now(),
            'password' => Hash::make('idea@2020'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        App\User::create([
            'name' => 'Administrador',
            'email' => 'admin@servrena',
            'email_verified_at' => now(),
            'password' => Hash::make('admin@2020'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $this->call(InformationSeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(ServicesSeeder::class);
    }
}
