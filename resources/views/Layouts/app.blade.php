<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Penjualan Coklat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-yellow-300 text-gray-800 min-h-screen flex flex-col">

    <!-- Navbar -->
    @include('component.navbar')

    <!-- Konten Halaman -->
    <main class="container mx-auto py-6 px-4 flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('component.footer')

</body>
</html>
