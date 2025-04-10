@extends('components.layouts.main-layout')
@section('title', 'Edit Evaluasi')
@section('content')

<div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">

    <form action="{{ route('employeeevaluation.update', $evaluation->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block text-gray-700">ID Employee</label>
            <input type="text" name="id_employee" value="{{ $evaluation->id_employee }}"
                class="w-full border-gray-300 rounded-lg" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Evaluation Date</label>
            <input type="date" name="evaluation_date" value="{{ $evaluation->evaluation_date }}"
                class="w-full border-gray-300 rounded-lg" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Performance Score</label>
            <input type="number" name="performance_score" value="{{ $evaluation->performance_score }}" min="0" max="100"
                class="w-full border-gray-300 rounded-lg" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Information</label>
            <textarea name="information" class="w-full border-gray-300 rounded-lg"
                required>{{ $evaluation->information }}</textarea>
        </div>

        <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">Update</button>
    </form>

</div>

@endsection