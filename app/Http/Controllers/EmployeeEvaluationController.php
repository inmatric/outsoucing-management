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
        $employeeevaluation = EmployeeEvaluation::all();
        return view ('employeeevaluation.index', compact('employeeevaluation'));
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
            // 'employee_name' => 'required',
            'evaluation_date' => 'required|date',
            'information' => 'required',
            // 'id_attendance' => 'required|exists:attendances,id',
            // 'id_work' => 'required|exists:works,id',
        ]);
        EmployeeEvaluation::create($request->all());

        return redirect()->route('employeeevaluation.index')->with('success', 'Evaluasi berhasil ditambahkan.');
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
    return view('employeeevaluation.edit', compact('employeeEvaluation'));
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EmployeeEvaluation $employeeEvaluation)
    {
        $request->validate([
            // 'id_employee' => 'required',
            'evaluation_date' => 'required|date',
            'information' => 'required',
        ]);

        $employeeEvaluation->update($request->all());

        return redirect()->route('employeeevaluation.index')->with('success', 'Evaluasi berhasil diupdate.');

    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $employeeEvaluation = EmployeeEvaluation::findOrFail($id);
        $employeeEvaluation->delete();

        return redirect()->route('employeeevaluation.index')->with('success', 'Data kerja berhasil dihapus');

    }
    
    public function search(Request $request)
{
    $search = $request->search;

    if (!empty($search)) {
    $employeeevaluation = EmployeeEvaluation::where('employee_name', 'like', "%{$search}%")
        ->orWhere('evaluation_date', 'like', "%{$search}%")
        ->orWhere('information', 'like', "%{$search}%")
        ->latest()
        ->get();
    } else {
        // Kalau search kosong, ambil semua data
        $employeeevaluation = EmployeeEvaluation::latest()->get();
    }

    return view('employeeevaluation.index', compact('employeeevaluation'));
}

    }