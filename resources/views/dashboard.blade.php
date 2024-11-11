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
</head>

<body class="bg-black">

    <main class="flex flex-col min-h-screen">

        <!-- Navbar Section -->
        <nav class="rounded">
            <div class="bg-navbar flex justify-between px-10 py-4">
                <h1 class="text-3xl bg-lisa mulish mt-1">LISA</h1>
                <ul class="flex gap-24 text-md items-center mulish-extend">
                    <li class="text-white hover:bg-blue-300 ease-in-out duration-400"><a href="#">History</a></li>
                    <li class="text-white hover:bg-blue-300 ease-in-out duration-400"><a href="#">Manage</a></li>
                    <li class="text-white hover:bg-blue-300 ease-in-out duration-400"><a href="#">Item</a></li>
                    <!-- Admin Dropdown -->
                    <li class="relative">
                        <div class="bg-white rounded-full p-2 cursor-pointer group">
                            <a href="#" class="flex items-center">
                                <p class="mt-1 pl-2">Admin</p>
                                <img src="{{ asset('asset/User.svg') }}" alt="User"
                                    class="ml-2 p-1 h-8 w-8 bg-user rounded-full">
                            </a>
                            <!-- Dropdown Menu -->
                            <div
                                class="absolute right-0 mt-2 w-28 bg-white rounded-md shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <form action="{{ route('logout')}}" method="GET">
                                    @csrf
                                    <a href="{{ route('logout')}}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-md">Logout</a>
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Main Content -->
        <section class="flex flex-col justify-center items-center py-10">
            <h1 class="text-white text-center p-14 m-10 text-7xl mulish-extend" data-aos="fade-up"
                data-aos-duration="6000">
                LISA
            </h1>

            <!-- Teks "LISA" dan deskripsi dalam satu baris -->
            <div class="flex justify-center items-center text-white mx-auto max-w-4xl" data-aos="fade-up"
                data-aos-duration="1000">
                <p class="text-xl flex flex-row">
                    <span class="bg-lisa-text mulish-extend text-xl py-1 px-2">LISA</span>
                    <span class="text-center inline-block py-1 px-2">atau List Inventaris Stok Aset dibuat
                        untuk memudahkan pencatatan dan pemantauan semua stok
                        dan aset pada ruangan PDS</span>
                </p>

            </div>
            <!-- Footer Section -->
            <footer class="text-white text-center py-6" data-aos="fade-up" data-aos-duration="1000">
                <h1>Copyright. Build by SMKN 65 Student</h1>
            </footer>
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
    .bg-lisa {
        background: linear-gradient(63deg, rgba(255, 194, 58, 1) 0%, rgba(81, 210, 255, 1) 33%, rgba(103, 67, 255, 1) 66%, rgba(255, 96, 181, 1) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .bg-lisa-text {
        background: linear-gradient(90deg, rgba(255, 194, 58, 1) 0%, rgba(81, 210, 255, 1) 33%, rgba(103, 67, 255, 1) 66%, rgba(255, 96, 181, 1) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .mulish {
        font-family: "Mulish", sans-serif;
        font-weight: 900;
    }

    .mulish-extend {
        font-family: "Mulish", sans-serif;
        font-weight: 700;
    }

    .bg-navbar {
        background-color: #272727d5;
    }

    .bg-user {
        background: linear-gradient(135deg, rgba(255, 194, 58, 1) 0%, rgba(81, 210, 255, 1) 33%, rgba(103, 67, 255, 1) 66%, rgba(255, 96, 181, 1) 100%);
    }

    body {
        overflow: hidden;
    }
</style>

</html>
