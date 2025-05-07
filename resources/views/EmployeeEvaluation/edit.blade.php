@extends('components.layouts.main-layout')
@section('title', 'Edit Evaluasi')
@section('content')

<div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow mt-6">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Edit Employee Evaluation</h2>

    <form action="{{ route('employeeevaluation.update', $employeeEvaluation->id) }}" method="POST">
        @csrf
        @method('PUT')


        <div class="mb-4">
            <label class="block text-gray-700">Employee Name</label>
            <input type="text" name="employee_name" value="{{ $employeeEvaluation->employee_name }}"
                class="w-full border-gray-300 rounded-lg" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Evaluation Date</label>
            <input type="date" name="evaluation_date" value="{{ $employeeEvaluation->evaluation_date }}"
                class="w-full border-gray-300 rounded-lg" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Information</label>
            <textarea name="information" class="w-full border-gray-300 rounded-lg"
                required>{{ $employeeEvaluation->information }}</textarea>
        </div>

        <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">Update</button>
    </form>

</div>

@endsection