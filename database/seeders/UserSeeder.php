<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::factory()
            ->count(5)
            ->hasReports(5)
            ->create();

        User::factory()
            ->count(2)
            ->hasReports(10)
            ->create();
    }
}
