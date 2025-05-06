<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('employee_contracts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained('employees')->onDelete('cascade');
            $table->string('contract_number', 100);
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->string('position', 100);
            $table->foreignId('location_id')->constrained('locations')->onDelete('cascade');
            $table->enum('working_hours', ['full-time', 'part-time', 'shift-based']);
            $table->string('salary', 255);
            $table->enum('status', ['active', 'expired'])->default('active');
            $table->string('contract_file', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('employee_contracts');
    }
};
