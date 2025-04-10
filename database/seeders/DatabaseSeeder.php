<?php

namespace Database\Seeders;

use App\Models\User;
use CooperationSeeder;
use Database\Seeders\CooperationSeeder as SeedersCooperationSeeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ProductSeeder::class);
        $this->call(SeedersCooperationSeeder::class);
        $this->call(LocationTypeSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(LocationSeeder::class);
    }
}
