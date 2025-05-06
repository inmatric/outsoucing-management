<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class EmployeeContractSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('employee_contracts')->insert([
            [
                'employee_id'     => 1,
                'contract_number' => 'CNT-FT-001',
                'start_date'      => '2024-01-01',
                'end_date'        => '2024-12-31',
                'position'        => 'Manager',
                'location_id'     => 1,
                'working_hours'   => 'full-time',
                'salary'          => '10000000',
                'status'          => 'active',
                'contract_file'   => null,
                'created_at'      => now(),
                'updated_at'      => now(),
            ],
            [
                'employee_id'     => 1,
                'contract_number' => 'CNT-PT-002',
                'start_date'      => '2024-02-01',
                'end_date'        => '2024-08-01',
                'position'        => 'Assistant',
                'location_id'     => 1,
                'working_hours'   => 'part-time',
                'salary'          => '4000000',
                'status'          => 'active',
                'contract_file'   => null,
                'created_at'      => now(),
                'updated_at'      => now(),
            ],
            [
                'employee_id'     => 1,
                'contract_number' => 'CNT-SHIFT-003',
                'start_date'      => '2024-03-01',
                'end_date'        => '2024-09-01',
                'position'        => 'Operator',
                'location_id'     => 1,
                'working_hours'   => 'shift-based',
                'salary'          => '5000000',
                'status'          => 'active',
                'contract_file'   => null,
                'created_at'      => now(),
                'updated_at'      => now(),
            ]
        ]);
    }
}
