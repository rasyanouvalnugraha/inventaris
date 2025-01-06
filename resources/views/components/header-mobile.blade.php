<!-- Navbar Section -->
<nav class="border-b-2 rounded-xl">
    <div class="bg-black flex py-4">
        <ul class="flex text-md items-center mx-auto space-x-16">
            <li class="relative">
                <div class="bg-white rounded-full p-1 cursor-pointer flex group">
                    <a href="#" class="flex items-center p-1 space-x-1">
                        <p class="text-sm font-mulish-600">Admin</p>
                        <img src="{{ asset('asset/image/User.svg') }}" alt="User"
                            class="p-1 h-6 w-6 bg-user rounded-full">
                    </a>
                </div>
            </li>
            <li>
                <h1 class="text-3xl bg-lisa font-mulish-700 mt-1">LISA</h1>
            </li>
            <li>
                <a href="/login" class="text-white items-center font-mulish-600 flex button-logout">Logout</a>
            </li>
        </ul>
    </div>
</nav>
