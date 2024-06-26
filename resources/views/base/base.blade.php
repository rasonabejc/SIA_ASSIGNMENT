<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShoppingMall</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/htmx.org@1.9.12"></script>
</head>
<body class="flex h-screen bg-gray-50">
    <div class="w-64 h-full overflow-auto bg-teal-500 text-white flex flex-col shadow-lg">
        <div id="brand" class="text-2xl p-4 text-center font-semibold bg-teal-600">
            ShoppingMall
        </div>
        <nav id="main-nav" class="flex flex-col space-y-2 mt-4">
            <a href="/" class="p-3 hover:bg-teal-400 rounded-md text-center transition">Home</a>
            <a href="/about" class="p-3 hover:bg-teal-400 rounded-md text-center transition">About</a>
            <a href="/products" class="p-3 hover:bg-teal-400 rounded-md text-center transition">Products</a>
            <a href="/contact" class="p-3 hover:bg-teal-400 rounded-md text-center transition">Contact Us</a>
        </nav>
    </div>
    <div class="flex-1 flex flex-col overflow-auto">
        <section class="flex-1 p-6">
            <article id="content" class="bg-white p-6 rounded-lg shadow-md">
                @yield('content')
            </article>
        </section>
        <footer class="text-center text-gray-700 py-3 bg-gray-100">
            &copy; 2024 ShoppingMall. All rights reserved.
        </footer>
    </div>
</body>
</html>
