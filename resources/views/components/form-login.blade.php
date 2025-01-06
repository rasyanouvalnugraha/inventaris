<form action="{{ route('login') }}" method="POST" class="font-mulish-600">
    @method('POST')
    @csrf

    <label class="block mb-2 text-white">Username:</label>
    <div class="relative flex items-center">
        <img src="{{ asset('asset/image/Person.svg') }}" alt="" class="absolute left-3 w-5 h-5 top-3">
        <input type="text" class="w-full pl-10 p-2 mb-4 border border-gray-300 rounded" placeholder="username"
            name="name" required value="">
    </div>


    <label class="block mb-2 text-white">Password:</label>
    <div class="relative flex items-center">
        <img src="{{ asset('asset/image/Lock.svg') }}" alt="" class="absolute left-3 w-4 h-4 top-3">
        <input id="password" type="password" class="w-full pl-10 p-2 mb-4 border border-gray-300 rounded pr-10"
            placeholder="password" name="password" required>
        <button type="button" onclick="togglePassword(event)" class="absolute right-3 top-3 text-gray-500">
            <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 12c0 1.657-1.343 3-3 3s-3-1.343-3-3 1.343-3 3-3 3 1.343 3 3z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M2.458 12C3.732 7.943 7.522 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.478 0-8.268-2.943-9.542-7z" />
            </svg>
        </button>
    </div>
    <x-message-login />
    <button type="submit" class="w-full py-2 mt-4 text-white bg-body rounded outline">Login</button>
</form>
