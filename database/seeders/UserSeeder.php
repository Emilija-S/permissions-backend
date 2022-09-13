<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Ana Z',
            'email' => 'anaz@gmail.com',
            'password' => '11222@@ggnggg'
        ]);
        User::create([
            'name' => 'Nikola B',
            'email' => 'nikolab@gmail.com',
            'password' => '2233fgfgg'
        ]);
        User::create([
            'name' => 'Riste M',
            'email' => 'ristem@gmail.com',
            'password' => '11222@@eeege2222gnggg'
        ]);
    }
}
