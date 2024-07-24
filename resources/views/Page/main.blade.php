@if (Route::has('login'))
    <nav class="-mx-3 flex flex-1 justify-end">
        @auth
            <!-- Include Dashboard Link -->
            @include('dashboard')
        @else
            <!-- Include Login Link -->
            @include('login')

            @if (Route::has('register'))
                <!-- Include Register Link -->
                @include('register')
            @endif
        @endauth
    </nav>
@endif
