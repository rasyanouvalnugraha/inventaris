<!-- Navbar Section -->
<nav class="rounded top-0">
    <div class="bg-navbar flex justify-between  px-10 py-4">
        <h1 class="text-3xl bg-lisa mt-1 font-mulish-800">LISA</h1>
        <ul class="flex gap-20 text-md items-center font-mulish-700">
            <li class="text-white hover:bg-blue-300 hover:rounded-md ease-in-out duration-400 transition p-2 rounded-md"><a href="/history">History</a></li>
            <li class="text-white hover:bg-blue-300 hover:rounded-md ease-in-out duration-400 transition p-2 rounded-md"><a href="/manage">Manage</a></li>
            <li class="text-white hover:bg-blue-300 hover:rounded-md ease-in-out duration-400 transition p-2 rounded-md"><a href="/item">Item</a></li>
            <!-- Admin Dropdown -->
            <li class="relative">
                <div class="bg-white rounded-full p-1 cursor-pointer group">
                    <a href="#" class="flex items-center">
                        <p class="pl-2">Admin</p>
                        <img src="{{ asset('asset/image/User.svg') }}" alt="User"
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
