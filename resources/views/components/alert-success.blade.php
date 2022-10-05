
@if(session('success'))
    <div class="font-medium text-sm text-green-600">
        {{ $slot }}
    </div>
@endif