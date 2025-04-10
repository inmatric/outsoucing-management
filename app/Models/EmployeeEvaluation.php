<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeEvaluation extends Model
{
    /** @use HasFactory<\Database\Factories\EmployeeEvaluationFactory> */
    use HasFactory;
    protected $table ='employeeevaluation';
    protected $fillable = [
        'id_employee',
        'evaluation_date',
        'information',
    ];
    
}