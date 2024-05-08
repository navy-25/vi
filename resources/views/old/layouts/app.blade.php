<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
    @include('includes.css')

    @yield('css')
</head>

<body>
    <div id="spinner" class="vh-100 vw-100" style="position: fixed !important;z-index: 99999999999;">
        <div class="bg-dark d-flex align-items-center justify-content-center h-100 w-100">
            <div class="spinner-border text-warning" role="status">
                <span class="visually-hidden">.</span>
            </div>
        </div>
    </div>
    {{-- NAV BOTTOM --}}
    @include('includes.nav-bottom')
    {{-- END NAV BOTTOM --}}

    @yield('content')

    {{-- SECTION FOOTER --}}
    @include('includes.footer')
    {{-- END SECTION FOOTER --}}

    {{-- SCRIPT --}}
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="{{ asset('app-assets-b5/js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
    @include('includes.script')

    @yield('script')
    {{-- END SCRIPT --}}
</body>

</html>
