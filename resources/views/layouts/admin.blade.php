<!DOCTYPE html>
<html lang="en">
<x-head-admin title="Nusa Techno Indonesia | Jasa Pembuatan Website, Aplikasi Web, Mobile,IOT " />

<body class="flex bg-gray-100 ">

    <div id="loaderscreen">
        <div class="spinner"></div>
    </div>

    <x-aside-admin />

    {{-- Main for a Content --}}
    <div class="flex flex-col w-full h-screen overflow-y-hidden">
        <x-header-admin />
        <div class="flex flex-col w-full overflow-x-hidden border-t">
            <main class="flex-grow w-full p-6">
                @yield('admin-content')
            </main>
        </div>
    </div>


    {{-- Library --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="{{ asset('js/calendar.js') }}"></script>
    <script src=" {{ asset('js/manipulation.js') }}"></script>
</body>

</html>
