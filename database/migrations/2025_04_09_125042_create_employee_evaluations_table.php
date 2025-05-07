<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employee_evaluations', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('id_attendance');
            // $table->unsignedBigInteger('id_work');
            $table->string('employee_name');
            $table->string('evaluation_date');
            $table->string('information');
            $table->timestamps();
            // $table->foreignId('employee_id')->constrained('employees')->onDelete('cascade');
            // $table->foreignId('location_id')->constrained('locations')->onDelete('cascade');
            // $table->foreignId('work_id')->constrained('works')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_evaluations');
    }
};