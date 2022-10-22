<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
    @include('includes.css')
</head>
<body>
    <div class="nav-bottom d-none">
        <div class="nav-content">
            <div class="list-menu px-4">
                <div class="menu-btn d-flex" id="menu_btn">
                    <a href="#section3" id="btn_education" onclick="menu_active('#btn_education')" class="m-auto menu-icon"><i data-feather="book"></i></a>
                </div>
                <div class="menu-btn d-flex">
                    <a href="" id="btn_award" onclick="menu_active('#btn_award')" class="m-auto menu-icon"><i data-feather="award"></i></a>
                </div>
                <div class="menu-btn d-flex">
                    <a href="#header" id="btn_home" onclick="menu_active('#btn_home')" class="m-auto menu-icon active"><i data-feather="home"></i></a>
                </div>
                <div class="menu-btn d-flex">
                    <a href="#section4" id="btn_work" onclick="menu_active('#btn_work')" class="m-auto menu-icon"><i data-feather="briefcase"></i></a>
                </div>
                <div class="menu-btn d-flex">
                    <a href="" id="btn_resume" onclick="menu_active('#btn_resume')" class="m-auto menu-icon"><i data-feather="folder"></i></a>
                </div>
            </div>
        </div>
    </div>
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
