<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Activity 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/htmx.org@1.9.12"></script>
</head>
<body class="bg-gray-100">
    <div class="max-w-5xl mx-auto">

        <header class="bg-blue-700 text-white py-4 shadow-md">
            <div class="container mx-auto flex justify-between items-center">
                <div id="brand" class="text-xl font-bold px-3">
                    HandsOnActivity
                </div>
                <nav id="main-nav" class="flex space-x-4">
                    <a href="/" class="p-3 hover:bg-blue-600 rounded transition">Home</a>
                    <a href="/about" class="p-3 hover:bg-blue-600 rounded transition">About</a>
                    <a href="/products" class="p-3 hover:bg-blue-600 rounded transition">Products</a>
                    <a href="/contact" class="p-3 hover:bg-blue-600 rounded transition">Contact Us</a>
                </nav>
            </div>
        </header>

        <main id="content" class="bg-white p-6 rounded shadow-lg my-6">
            @yield('content')
        </main>

        <footer class="text-center text-gray-500 py-3 border-t mt-6">
            Copyright &copy; 2024. All rights reserved.
        </footer>

    </div>
</body>
</html>
