<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lisa | Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="{{ asset('asset/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/font.css') }}">
</head>

<body class="bg-black">

    <main class="flex flex-col min-h-screen">

        <div class="sm:block hidden">
            <x-navbar />
        </div>
        <div class="sm:hidden block">
            <x-header-mobile/>
        </div>

        <!-- Main Content -->
        <section class="flex flex-col justify-center items-center pb-10">
            <h1 class="text-white text-center sm:p-14 m-10 sm:m-0 text-7xl font-mulish-800" data-aos="fade-up"
                data-aos-duration="6000">
                LISA
            </h1>

            <!-- Teks "LISA" dan deskripsi dalam satu baris -->
            <div class="flex justify-center items-center text-white mx-auto max-w-4xl" data-aos="fade-up"
                data-aos-duration="1000">
                <span class="text-center inline-block py-1 px-2">
                    <span class="bg-lisa-text font-mulish-700 text-md">LISA</span> atau List Inventaris Stok Aset dibuat
                    untuk memudahkan pencatatan dan pemantauan semua stok dan aset pada ruangan PDS
                </span>
            </div>

            <div>
                <div class="sm:block hidden">
                    <x-card/>
                </div>
            </div>

            <div class="">
                <div class="sm:hidden flex">
                    <x-card-mobile />
                </div>
            </div>

            <!-- Footer Section -->
            {{-- <footer class="fixed bottom-0 text-white text-center py-6" data-aos="fade-up" data-aos-duration="1000">
                <h1>Copyright. Build by SMKN 65 Student</h1>
            </footer> --}}


        </section>

    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            easing: 'ease-in-out', // Jenis easing
        });
    </script>

</body>

<style>
    ::-webkit-scrollbar {
        display: none;
    }
</style>

</html>
