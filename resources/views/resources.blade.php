@extends('layouts.app')

@section('css')
<style>
    @media only screen and (max-width: 600px) {
        #footer {
            height: auto !important;
            align-items: center !important;
        }
    }
</style>
@endsection

@section('content')
{{-- TOP ARROW --}}
<div style="position: fixed;right: 40px;bottom:50px">
    <a href="#" class="bg-warning d-flex align-items-center justify-content-center text-decoration-none" style="width: 60px;height: 60px;border-radius:100%;">
        <i data-feather="arrow-up" class="text-dark"></i>
    </a>
</div>
{{-- TOP ARROW --}}

<div class="bg-warning" id="header-resources">
    <div class="container h-100 d-flex align-items-end px-5 px-md-0">
        <div class="w-100">
            <div class="row w-100">
                <div class="col-12 col-md-2">
                    <a href="{{ route('index') }}" class="scale scale-2 bg-dark d-flex align-items-center justify-content-center text-decoration-none mb-4" style="width: 60px;height: 60px;border-radius:100%;">
                        <i data-feather="arrow-left" class="text-warning"></i>
                    </a>
                </div>
                <div class="col-12 col-md-7">
                    <p class="fs-1 fw-bold mb-1 lh-1">My Project & Portofolio</p>
                    <p class="mb-4">Some projects I've worked on</p>

                    <br>
                    <p class="mb-2">Choose Category</p>
                    <div class="row">
                        <div class="col-6 col-md-auto mb-3">
                            <a class="px-3 py-2 rounded-3 text-warning scale scale-1 text-decoration-none w-100" href="#tag-logo" id="btn-design" onclick="choose('design')">
                                <span>Logo Design</span>
                            </a>
                        </div>
                        <div class="col-6 col-md-auto mb-3">
                            <a class="px-3 py-2 rounded-3 text-dark scale scale-1 text-decoration-none w-100" href="#tag-web" id="btn-web" onclick="choose('web')">
                                <span>Web Dev</span>
                            </a>
                        </div>
                        <div class="col-6 col-md-auto mb-3">
                            <a class="px-3 py-2 rounded-3 text-dark scale scale-1 text-decoration-none w-100" href="#tag-ui" id="btn-ui" onclick="choose('ui')">
                                <span>UI Design</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 mt-4 mt-md-0 d-flex justify-content-md-end justify-content-start">
                    <a href="#" id="lang_en" class="btn btn-outline-dark d-flex align-items-center justify-content-center text-decoration-none me-2"
                        style="width: 40px;height: 40px;border-radius:100%"
                    >
                        en
                    </a>
                    <a href="#" id="lang_id" class="btn btn-outline-dark d-flex align-items-center justify-content-center text-decoration-none"
                        style="width: 40px;height: 40px;border-radius:100%"
                    >
                        id
                    </a>
                </div>
            </div>
            <div class="mb-4"></div>
        </div>
    </div>
</div>
<div class="container my-3 mt-md-5 p-5">
    <div id="repo-design">
        @include('part.resources.logo')
    </div>
    <div id="repo-web">
        @include('part.resources.web')
    </div>
    <div id="repo-ui">
        @include('part.resources.ui')
    </div>
</div>
@endsection

@section('script')
    <script>
        $('#nav-bottom').remove()
        menu_active('#btn_resume')

        choose('design',1)
        function choose(type,def=0){
            if(type == 'design'){
                $('#repo-design').removeClass('d-none')
                $('#btn-design').addClass('bg-dark text-warning')
                $('#btn-design').removeClass('text-dark')

                $('#repo-web').addClass('d-none')
                $('#btn-web').addClass('text-dark')
                $('#btn-web').removeClass('bg-dark text-warning')

                $('#repo-ui').addClass('d-none')
                $('#btn-ui').addClass('text-dark')
                $('#btn-ui').removeClass('bg-dark text-warning')

                var id = 'tag-logo'
            }else if(type == 'ui'){
                $('#repo-ui').removeClass('d-none')
                $('#btn-ui').addClass('bg-dark text-warning')
                $('#btn-ui').removeClass('text-dark')

                $('#repo-design').addClass('d-none')
                $('#btn-design').removeClass('bg-dark text-warning')
                $('#btn-design').addClass('text-dark')

                $('#repo-web').addClass('d-none')
                $('#btn-web').addClass('text-dark')
                $('#btn-web').removeClass('bg-dark text-warning')

                var id = 'tag-ui'
            }else{
                $('#repo-design').addClass('d-none')
                $('#btn-design').removeClass('bg-dark text-warning')
                $('#btn-design').addClass('text-dark')

                $('#repo-web').removeClass('d-none')
                $('#btn-web').addClass('bg-dark text-warning')
                $('#btn-web').removeClass('text-dark')

                $('#repo-ui').addClass('d-none')
                $('#btn-ui').addClass('text-dark')
                $('#btn-ui').removeClass('bg-dark text-warning')

                var id = 'tag-web'
            }
            if(def == 0){
                setTimeout(() => {
                    var element = document.getElementById(id);
                    var headerOffset = 230;
                    var elementPosition = element.getBoundingClientRect().top;
                    var offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: "smooth"
                    });
                }, 100);
            }
        }
        function flip_image(from,to){
            $('#'+from).addClass('d-none')
            $('#'+to).removeClass('d-none')
        }
        function to_page(id_component){
            var id = $('#'+id_component).val()
            document.getElementById(id).scrollIntoView();
        }
    </script>
@endsection
