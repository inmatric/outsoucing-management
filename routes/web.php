<?php

use App\Http\Controllers\EmployeeEvaluationController;
use App\Http\Controllers\ProductController;
use App\Models\EmployeeEvaluation;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', [ProductController::class, 'test']);
Route::get('/employeeevaluation', [EmployeeEvaluationController::class, 'index']);
Route::get('/employeeevaluation/create', [EmployeeEvaluationController::class, 'create'])->name('employeeevaluation.create');
Route::get('/employeeevaluation/index', [EmployeeEvaluationController::class, 'index'])->name('employeeevaluation.index');
Route::get('/employeeevaluation/edit', [EmployeeEvaluationController::class, 'edit'])->name('employeeevaluation.edit');
Route::get('/employee/{id}/absensi', [EmployeeEvaluationController::class, 'showAbsensi'])->name('employee.absensi');
Route::get('/employee/{id}/datakerja', [EmployeeEvaluationController::class, 'showDataKerja'])->name('employee.datakerja');

Route::post('/employeeevaluation', [EmployeeEvaluationController::class, 'store'])->name('employeeevaluations.store');


Route::prefix('v1')->group(function () {
    Route::prefix('products')->controller(ProductController::class)->group(function () {
        Route::get('/', 'index');           // GET /api/v1/products
        Route::post('/', 'store');          // POST /api/v1/products
        Route::get('{id}', 'show');         // GET /api/v1/products/{id}
        Route::put('{id}', 'update');       // PUT /api/v1/products/{id}
        Route::delete('{id}', 'destroy');   // DELETE /api/v1/products/{id}
    });
});