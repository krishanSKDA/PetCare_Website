<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mary Ui </title>
    <link rel="icon" href="{{ asset('assets/img/favicon.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/imgfavicon.ico') }}" type="image/x-icon">
    <!-- Optionally add other formats -->
    <link rel="icon" href="{{ asset('assets/imgfavicon.ico') }}" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
</head>
<body class="font-sans antialiased">
    {{-- The navbar with `sticky` and `full-width` --}}
    <x-mary-nav sticky full-width>
 
        <x-slot:brand>
            {{-- Drawer toggle for "main-drawer" --}}
            <label for="main-drawer" class="lg:hidden mr-3">
                <x-mary-icon name="o-bars-3" class="cursor-pointer" />
            </label>
 
            {{-- Brand --}}
            <img src="{{ asset('assets/img/logo/Newlogo.png')}}" class="h-10 w-auti">
        </x-slot:brand>
 
        {{-- Right side actions --}}
        <x-slot:actions>
            <x-mary-button label="Messages" icon="o-envelope" link="###" class="btn-ghost btn-sm" responsive />
            <x-mary-button label="Notifications" icon="o-bell" link="###" class="btn-ghost btn-sm" responsive />
        </x-slot:actions>
    </x-mary-nav>

     {{-- The main content with `full-width` --}}
     <x-mary-main with-nav full-width>
 
 {{-- This is a sidebar that works also as a drawer on small screens --}}
 {{-- Notice the `main-drawer` reference here --}}
 <x-slot:sidebar drawer="main-drawer" collapsible class="bg-base-200">

     {{-- User --}}
     @if($user = auth()->user())
         <x-mary-list-item :item="$user" value="name" sub-value="email" no-separator no-hover class="pt-2">
             <x-slot:actions>
             <form action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="btn-circle btn-ghost btn-xs" title="Log off">
                                <x-mary-icon name="o-power" />
                            </button>
                        </form>
            </x-slot:actions>
         </x-mary-list-item>

         <x-mary-menu-separator />
     @endif

     {{-- Activates the menu item when a route matches the `link` property --}}
     <x-mary-menu activate-by-route>
         <x-mary-menu-item title="Dashboard" icon="o-home" link="/dashboards" />
         <x-mary-menu-item title="Appointment"  icon="o-calendar" link="/appointments" />
         <x-mary-menu-item title="Purchased" icon="o-shopping-bag" link="/petdetails" />
         <x-mary-menu-item title="PetDetails" icon="o-document" link="/purchased" />
        
     </x-mary-menu>
 </x-slot:sidebar>

 {{-- The `$slot` goes here --}}
 <x-slot:content>
     {{ $slot }}
 </x-slot:content>
</x-mary-main>
</body>
</html>