<x-layout>
    <h1 class="text-2xl font-bold mb-4">Job Listings</h1>
    <p>Here are some of the latest job openings:</p>
    <ul class="list-disc pl-5">
        @foreach ($jobs as $job)
            <li class="mb-2">
                <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
                    <h2 class="text-lg font-semibold">{{ $job['title'] }}</h2>
                </a>
                <p>{{ $job['description'] }}</p>
                <p class="text-gray-600">Salary: {{ $job['salary'] }}</p>
            </li>            
        @endforeach
    </ul>
    <p>For more details, please contact us.</p>
    <p>We are always looking for talented individuals to join our team.</p>
</x-layout>