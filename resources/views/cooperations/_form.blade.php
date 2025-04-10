<div class="mb-4">
    <label for="company_name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Company Name</label>
    <input type="text" name="company_name" id="company_name"
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
        value="{{ old('company_name', $cooperation->company_name ?? '') }}">
</div>

<div class="mb-4">
    <label for="cooperation_type" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Cooperation Type</label>
    <select name="cooperation_type" id="cooperation_type"
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
    >
        <option value="">-- Select Type --</option>
        <option value="Cleaning Service" {{ (old('cooperation_type', $cooperation->cooperation_type ?? '') == 'Cleaning Service') ? 'selected' : '' }}>Cleaning Service</option>
        <option value="Security" {{ (old('cooperation_type', $cooperation->cooperation_type ?? '') == 'Security') ? 'selected' : '' }}>Security</option>
    </select>
</div>

<div class="mb-4">
    <label for="start_date" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Start Date</label>
    <input type="date" name="start_date" id="start_date"
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
        value="{{ old('start_date', $cooperation->start_date ?? '') }}">
</div>

<div class="mb-4">
    <label for="end_date" class="block text-sm font-medium text-gray-700 dark:text-gray-300">End Date</label>
    <input type="date" name="end_date" id="end_date"
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
        value="{{ old('end_date', $cooperation->end_date ?? '') }}">
</div>

<div class="mb-4">
    <label for="status" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Status</label>
    <select name="status" id="status"
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
    >
        <option value="">-- Select Type --</option>
        <option value="active" {{ (old('status', $cooperation->status ?? '') == 'active') ? 'selected' : '' }}>Active</option>
        <option value="inactive" {{ (old('status', $cooperation->status ?? '') == 'inactive') ? 'selected' : '' }}>Inactive</option>
    </select>
</div>
