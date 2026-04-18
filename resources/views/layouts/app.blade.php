<!DOCTYPE html>
<html lang="en">

{{-- Head --}}
    @include('layouts.head')
<body>

    {{-- Navbar --}}
    @include('layouts.navbar')

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('layouts.footer')

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    @stack('scripts')

</body>
</html>