<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
    @include('includes.css')
</head>
<body>
    {{-- NAV BOTTOM --}}
    @include('includes.nav-bottom')
    {{-- END NAV BOTTOM --}}

    {{-- SECTION 1 --}}
    @include('part.header')
    {{-- END SECTION 1 --}}

    {{-- SECTION 2 --}}
    @include('part.aboutme')
    {{-- END SECTION 2 --}}

    {{-- SECTION 3 --}}
    @include('part.education_history')
    {{-- END SECTION 3 --}}

    {{-- SECTION 4 --}}
    @include('part.work')
    {{-- END SECTION 4 --}}

    {{-- SCRIPT --}}
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="{{ asset('app-assets-b5/js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
    @include('includes.script')
    {{-- END SCRIPT --}}
</body>
</html>
