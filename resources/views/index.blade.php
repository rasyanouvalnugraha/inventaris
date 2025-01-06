<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISA</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/font.css') }}">

</head>

<body class="flex items-center justify-center h-screen bg-body">

    <div class="flex flex-col items-center justify-center min-h-screen px-4 sm:px-6">
        <!-- Judul -->
        <h1 class="text-6xl sm:text-8xl text-white font-bold my-2 font-mulish-700 color">LISA</h1>
        <h3 class="text-white text-xl sm:text-3xl my-4 font-mulish-500 tracking-wider text-center">
            List Inventaris Stok Aset
        </h3>
        <div
            class="fixed bottom-20 sm:static flex flex-col sm:flex-row items-center justify-center w-full space-y-3 sm:space-y-0 sm:space-x-4 font-mulish-700">
            <a href="/view"
                class="w-96 sm:w-auto px-10 py-4 bg-white text-black text-center rounded-lg transition">
                Go Now
            </a>
            <button id="loginButton"
                class="w-96 sm:w-auto px-10 py-4 bg-white text-black rounded-lg">
                Login
            </button>
        </div>
    </div>


    <!-- Popup Background -->
    <div id="popup" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <!-- Popup Form -->
        <div
            class="glass rounded-lg shadow-lg sm:px-12 sm:py-8 mx-5 py-10 px-4 sm:mx-0 w-full sm:max-w-md transition-all duration-300 transform opacity-0 popup-content">
            <h2 class="text-2xl font-mulish-700 mb-4 text-center login">Login</h2>

            <x-form-login />

            <button id="closeButton" class="w-full py-2 mt-4 text-white mulish">Close</button>
        </div>
    </div>

    <script src="{{ asset('asset/js/popup.js') }}"></script>
</body>


<style>

</style>

</html>
