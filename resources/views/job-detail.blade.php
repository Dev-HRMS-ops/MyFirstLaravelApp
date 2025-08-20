<x-layout>
    <h1 class="text-2xl font-bold mb-4">Job Detail</h1>
    <div class="mb-4">
        <h2 class="text-lg font-semibold">{{ $job['title'] }}</h2>
        <p>{{ $job['description'] }}</p>
        <p class="text-gray-600">Salary: {{ $job['salary'] }}</p>
    </div>
    <a href="/jobs" class="text-blue-500 hover:underline">Back to Job Listings</a>
</x-layout>