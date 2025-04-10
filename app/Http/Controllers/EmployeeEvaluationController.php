<?php

namespace App\Http\Controllers;

use App\Models\EmployeeEvaluation;
use Illuminate\Http\Request;

class EmployeeEvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employeeevaluations = EmployeeEvaluation::all();
        return view ('employeeevaluation.index', compact('employeeevaluations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employeeevaluation.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_employee' => 'required',
            'evaluation_date' => 'required|date',
            'performance_score' => 'required|numeric|min:0|max:100',
            'information' => 'required',
        ]);
        EmployeeEvaluation::create($request->all());

        return redirect()->route('employeeevaluations.index')->with('success', 'Evaluasi berhasil ditambahkan.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(EmployeeEvaluation $employeeEvaluation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EmployeeEvaluation $employeeEvaluation)
    {
        $employeeEvaluation = EmployeeEvaluation::findOrFail($employeeEvaluation);
        return view('employeeevaluation.edit', compact('employeeEvaluation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EmployeeEvaluation $employeeEvaluation)
    {
        $request->validate([
            'id_employee' => 'required',
            'evaluation_date' => 'required|date',
            'performance_score' => 'required|numeric|min:0|max:100',
            'information' => 'required',
        ]);

        $employeeEvaluation->update($request->all());

        return redirect()->route('evaluations.index')->with('success', 'Evaluasi berhasil diupdate.');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EmployeeEvaluation $employeeEvaluation)
    {
        $employeeEvaluation->delete();

        return redirect()->route('evaluations.index')->with('success', 'Evaluasi berhasil dihapus.');
    }
    }