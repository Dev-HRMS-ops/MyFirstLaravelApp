<x-layout>
    <p>We offer the following services</p>
    <ul class="list-disc pl-5">
        @foreach ($services as $service)
            <li>{{ $service }}</li>
        @endforeach
    </ul>
    <p>Contact us for more details!</p>
    <p>We are here to help you with your needs.</p>
</x-layout>