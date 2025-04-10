<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CooperationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cooperations::insert([
            [
                'company_name' => 'PT. Alpha Outsourcing',
                'start_date' => Carbon::parse('2024-01-01'),
                'end_date' => Carbon::parse('2024-12-31'),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'company_name' => 'CV. Beta Partner',
                'start_date' => Carbon::parse('2023-05-10'),
                'end_date' => Carbon::parse('2024-05-10'),
                'status' => 'inactive',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'company_name' => 'PT. Gamma Solusi',
                'start_date' => Carbon::parse('2024-03-01'),
                'end_date' => Carbon::parse('2025-02-28'),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
