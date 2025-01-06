
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li class="text-red-500 mb-2">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
