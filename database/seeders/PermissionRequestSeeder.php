<?php


namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;


class PermissionRequestSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('permission_requests')->insert([
            [
                'employee_id' => 1,
                'izin_type' => 'cuti',
                'description' => 'Mengambil cuti tahunan',
                'start_date' => '2025-04-15',
                'status' => 'pending',
                'submitted_at' => Carbon::now(),
                'approved_by' => null,
                'approved_at' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employee_id' => 2,
                'izin_type' => 'sakit',
                'description' => 'Demam dan butuh istirahat',
                'start_date' => '2025-04-10',
                'status' => 'disetujui',
                'submitted_at' => Carbon::now()->subDays(2),
                'approved_by' => 1,
                'approved_at' => Carbon::now()->subDay(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'employee_id' => 3,
                'izin_type' => 'dinas',
                'description' => 'Perjalanan dinas ke luar kota',
                'start_date' => '2025-04-12',
                'status' => 'ditolak',
                'submitted_at' => Carbon::now()->subDays(3),
                'approved_by' => 2,
                'approved_at' => Carbon::now()->subDays(2),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
