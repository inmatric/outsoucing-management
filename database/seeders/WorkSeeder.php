<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('work')->insert([
            [
                'id' => 1,
                'employee_id' => 1,
                'work_type' => 'Development',
                'task' => 'Create API endpoint',
                'work_detail' => 'Develop new REST API endpoints for user management',
            ],
            [
                'id' => 2,
                'employee_id' => 2,
                'work_type' => 'Design',
                'task' => 'UI redesign',
                'work_detail' => 'Redesign dashboard interface for better user experience',
            ],
            [
                'id' => 3,
                'employee_id' => 3,
                'work_type' => 'Testing',
                'task' => 'Bug fixing',
                'work_detail' => 'Identify and fix critical bugs in payment module',
            ],
            [
                'id' => 4,
                'employee_id' => 1,
                'work_type' => 'Documentation',
                'task' => 'API documentation',
                'work_detail' => 'Create comprehensive documentation for new API features',
            ],
        ]);
    }
}
