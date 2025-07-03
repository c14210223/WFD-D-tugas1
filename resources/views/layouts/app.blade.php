<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Promosi</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans text-gray-800">

    <nav class="bg-white shadow-lg">
        <div class="container mx-auto px-6 py-4">
            <a href="{{ route('home') }}" class="text-2xl font-bold text-blue-600 hover:text-blue-800">PromoKita</a>
        </div>
    </nav>

    <main class="container mx-auto px-6 py-10">
        @yield('content')
    </main>

    <footer class="bg-white mt-12 py-6">
        <div class="container mx-auto px-6 text-center text-gray-500">
            &copy; {{ date('Y') }} PromoKita. Dibuat dengan Laravel & Tailwind CSS.
        </div>
    </footer>

</body>
</html>