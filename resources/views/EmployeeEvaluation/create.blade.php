@extends('components.layouts.main-layout')
@section('title', 'Create Employee Evaluation')
@section('content')

<div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow mt-6">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Create Employee Evaluation</h2>

    <form action="{{ route('employeeevaluations.store') }}" method="POST">
        @csrf

        <div class="mb-5">
            <label for="id_employee" class="block mb-2 text-sm font-medium text-gray-900">ID Employee</label>
            <input type="text" id="id_employee" name="id_employee" value="{{ old('id_employee') }}"
                class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                required>
        </div>

        <div class="mb-5">
            <label for="evaluation_date" class="block mb-2 text-sm font-medium text-gray-900">Evaluation Date</label>
            <input type="date" id="evaluation_date" name="evaluation_date" value="{{ old('evaluation_date') }}"
                class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                required>
        </div>

        <div class="mb-5">
            <label for="performance_score" class="block mb-2 text-sm font-medium text-gray-900">Performance
                Score</label>
            <input type="number" id="performance_score" name="performance_score" value="{{ old('performance_score') }}"
                min="0" max="100"
                class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                required>
        </div>

        <div class="mb-5">
            <label for="information" class="block mb-2 text-sm font-medium text-gray-900">Information</label>
            <textarea id="information" name="information" rows="4"
                class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                required>{{ old('information') }}</textarea>
        </div>

        <div class="flex justify-end space-x-2">
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                Submit
            </button>
            <a href="{{ route('employeeevaluation.index') }}"
                class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                Cancel
            </a>
        </div>

    </form>
</div>

@endsection