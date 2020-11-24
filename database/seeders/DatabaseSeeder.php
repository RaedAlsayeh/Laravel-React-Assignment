<?php

namespace Database\Seeders;

use App\Models\Expense;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Raed Alsayeh',
            'email' => 'raed.sayeh@hotmail.com',
            'password' => \bcrypt('password'),


        ]);
        User::create([
            'name' => 'khaled',
            'email' => 'khaled.sayeh@hotmail.com',
            'password' => \bcrypt('password'),


        ]);
        $this->call([
            ExpenseSeeder::class,

        ]);
    }
}
