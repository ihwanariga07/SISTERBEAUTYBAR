<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SisterGlow - Your Beauty Oasis</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-[#f5eadd] font-sans min-h-screen">

    <nav class="flex justify-between items-center p-6">
        <div class="text-2xl font-bold">SISTERGLOW</div>
        <ul class="flex space-x-6 text-lg">
            <li><a href="#" class="hover:underline">Home</a></li>
            <li><a href="#" class="hover:underline">Services</a></li>
            <li><a href="#" class="hover:underline">Products</a></li>
            <li><a href="#" class="hover:underline">About</a></li>
        </ul>
    </nav>

    <div class="grid grid-cols-1 md:grid-cols-2 items-center p-10 md:p-20">
        <div class="space-y-6">
            <h1 class="text-5xl md:text-6xl font-bold leading-tight">
                Your Beauty <br><span class="text-6xl">Oasis</span>
            </h1>
            <p class="text-lg text-gray-700">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <div class="flex space-x-4">
                <a href="#" class="bg-[#914424] text-white py-3 px-6 rounded shadow hover:bg-[#7a331a] transition">
                    Book Now
                </a>
                <a href="#" class="border border-black py-3 px-6 rounded hover:bg-gray-100 transition">
                    Shop Products
                </a>
            </div>
        </div>
        <div class="mt-10 md:mt-0">
            <img src="{{ asset('images/model.png') }}" alt="Beauty Model" class="rounded-xl shadow-lg">
        </div>
    </div>

</body>
</html>
