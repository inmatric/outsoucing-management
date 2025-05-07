<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeEvaluation extends Model
{
    /** @use HasFactory<\Database\Factories\EmployeeEvaluationFactory> */
    use HasFactory;
    protected $table ='employee_evaluations';
    protected $fillable = [
        'employee_name',
        'evaluation_date',
        'information',
        // "id_attendance",
        // "id_work",
        
    ];
    
}