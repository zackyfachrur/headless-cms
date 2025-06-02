<!DOCTYPE html>
<html lang="en">
<x-head-admin title="Nusa Techno Indonesia | Jasa Pembuatan Website, Aplikasi Web, Mobile,IOT " />

<body>

    <div id="loaderscreen">
        <div class="spinner"></div>
    </div>
    {{-- Main for a Content --}}
    <main >
        @yield('auth-content')
    </main>

    {{-- Library --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/manipulation.js') }}"></script>
</body>

</html>
