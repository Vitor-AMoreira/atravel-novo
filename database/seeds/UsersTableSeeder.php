<?php

use Illuminate\Database\Seeder;
use App\User; // Replace App\Models\User with your actual User model path

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'), // Always hash passwords!
            // Add other relevant fields here...
        ]);
    }
}
