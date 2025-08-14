<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        User::factory()->create([
            'name' => 'Riki Reza',
            'username' => 'Riki Reza',
            'email' => 'rikireza@gmail.com',
            'password' => Hash::make('password111')        
        ]);

        User::factory(5)->create();
    }
}
