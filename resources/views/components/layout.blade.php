<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First Laravel App</title>

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <nav class="bg-green-800 text-white p-4 flex space-x-4 justify-center">
        <x-mainmenuitem href="/">Home</x-mainmenuitem>
        <x-mainmenuitem href="/about">About</x-mainmenuitem>
        <x-mainmenuitem href="/services">Services</x-mainmenuitem>
        <x-mainmenuitem href="/contact">Contact</x-mainmenuitem>
    </nav>

    <main class="p-4">
        <h1 class="text-2xl font-bold mb-4">Welcome to My First Laravel App</h1>
        {{ $slot }}
    </main>
</body>

</html>