@extends('components.layouts.main-layout')
@section('title', 'Employee Evaluation')
@section('content')

<div class="max-w-6xl mx-auto p-6 mt-6 bg-white rounded-lg shadow">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-bold text-gray-800">Employee Evaluations</h2>
    </div>

    <div class="flex justify-between items-center mb-6">
        <!-- Form Search -->
        <form action="{{ route('employeeevaluation.index') }}" method="GET"
            class="flex items-center space-x-2 w-full max-w-md">
            <div class="relative w-full">
                <input type="text" id="search" name="search" value="{{ request('search') }}"
                    class="block w-full p-2.5 pr-20 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Search by Employee ID...">
                <button type="submit"
                    class="absolute right-2 top-1/2 -translate-y-1/2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">
                    Search
                </button>
            </div>
        </form>

        <a href="{{ route('employeeevaluation.create') }}"
            class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 ml-4">
            + Create Evaluation
        </a>
    </div>
</div>


<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Id Employee
                </th>
                <th scope="col" class="px-6 py-3">
                    Evaluation Date
                </th>
                <th scope="col" class="px-6 py-3">
                    Information
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($employeeEvaluation as $index => $employeeEvaluation)
            <tr
                class="{{ $index % 2 == 0 ? 'bg-white dark:bg-gray-900' : 'bg-gray-50 dark:bg-gray-800' }} border-b dark:border-gray-700 border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $index + 1 }}
                </th>
                <td class="px-6 py-4">
                    {{ $employeeEvaluation->id }}
                </td>
                <td class="px-6 py-4">
                    {{ $employeeEvaluation->evaluation_date }}
                </td>
                <td class="px-6 py-4">
                    {{ $employeeEvaluation->information }}
                </td>
                <td class="px-6 py-4">
                    <a href="{{ route('employeeevaluation.edit', $employeeEvaluation->id) }}">
                        <button type="button"
                            class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">
                            Edit
                        </button>
                    </a>
                    <form action="{{ route('employeeevaluation.destroy', $employeeEvaluation->id) }}" method="POST"
                        class="inline-block" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="focus:outline-none text-white bg-red-700 hover:bg-red-500 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
        <tbody>
    </table>
</div>

</div>

@endsection