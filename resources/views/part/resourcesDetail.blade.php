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
        <div>
            <div class="row">
                <div class="col-12 col-md-2">
                    <a href="{{ route('index') }}" class="scale scale-2 bg-dark d-flex align-items-center justify-content-center text-decoration-none mb-4" style="width: 60px;height: 60px;border-radius:100%;">
                        <i data-feather="arrow-left" class="text-warning"></i>
                    </a>
                </div>
                <div class="col-12 col-md-10">
                    <p class="fs-1 fw-bold mb-1 lh-1">My Project & Portofolio</p>
                    <p class="mb-4">Some projects I've worked on</p>
                </div>
            </div>
            <br>
            <p class="mb-2">Choose Category</p>
            <div class="d-flex">
                <p class="px-3 py-2 rounded-3 me-2 scale scale-2" id="btn-design" onclick="choose('design')">Logo Design</p>
                <p class="px-3 py-2 rounded-3 me-2 scale scale-2" id="btn-web" onclick="choose('web')">Web Dev</p>
            </div>
            <div class="mb-4"></div>
        </div>
    </div>
</div>
<div class="container my-3 mt-md-5 p-5">
    <div id="repo-design">
        <p class="bg-dark text-warning px-3 py-2 rounded-3 d-flex align-items-center" style="width: fit-content">
            <i data-feather="folder" class="me-2" width="16" height="16"></i>
            / LOGO DESIGN
        </p>
        {{-- SMART AUDIT --}}
        <div class="row py-4">
            <div class="col-12 col-md-6 d-flex align-items-center order-1 order-md-0">
                <div class="pe-4 pb-5">
                    <p class="fs-3 fw-bold mb-1">Smart Audit Logo</p>
                    <p>#Logo Design #Hidden #I&E</p>
                    <p class="mb-4">
                        The logo that I made is the logo of a company engaged in checking and auditing income from shops, companies or small and medium businesses. Smart Audit is not a real company, so there is no attachment from companies or start-ups
                    </p>
                    <div class="row">
                        <p>Design Tool</p>
                        <div class="col-3 col-md-2">
                            <img src="{{ asset('img/logo/logo-cdr.jpg') }}" class="w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex align-items-center order-0 order-md-1 mb-5 mb-md-0 p-0 ps-md-5">
                <img src="{{ asset('img/resources/sa.png') }}" class="w-100 scale scale-1" style="border-radius:20px" alt="">
            </div>
        </div>
        {{-- SMART AUDIT --}}
        <center>
            <hr style="opacity: 0.09 !important;width: 70% !important">
        </center>
        {{-- PASTI PASTA --}}
        <div class="row py-4">
            <div class="col-12 col-md-6 d-flex align-items-center order-1 order-md-1">
                <div class="pe-4 pb-5">
                    <p class="fs-3 fw-bold mb-1">Pasti Pasta Logo</p>
                    <p>#Logo Design #Sidoarjo #Food</p>
                    <p class="mb-4">
                        This logo is designed for clients who have business in the field of F&B. It looks simple but can explain the initials of the business name.
                    </p>
                    <div class="row">
                        <p>Design Tool</p>
                        <div class="col-3 col-md-2">
                            <img src="{{ asset('img/logo/logo-cdr.jpg') }}" class="w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex align-items-center order-0 order-md-0 mb-5 mb-md-0 p-0 pe-md-5">
                <img src="{{ asset('img/resources/pp.png') }}" class="w-100 scale scale-1" style="border-radius:20px" alt="">
            </div>
        </div>
        {{-- PASTI PASTA --}}
        <center>
            <hr style="opacity: 0.09 !important;width: 70% !important">
        </center>
        {{-- PERUM SEKAR --}}
        <div class="row py-4">
            <div class="col-12 col-md-6 d-flex align-items-center order-1 order-md-0">
                <div class="pe-4 pb-5">
                    <p class="fs-3 fw-bold mb-1">Sekar Putih Asri Logo</p>
                    <p>#Logo Design #Malang #Housing</p>
                    <p class="mb-4">
                        The logo that I made is a company logo for the housing industry in the city of Malang. It looks elegant but can illustrate the purpose and purpose for which this logo was created.
                    </p>
                    <div class="row">
                        <p>Design Tool</p>
                        <div class="col-3 col-md-2">
                            <img src="{{ asset('img/logo/logo-cdr.jpg') }}" class="w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex align-items-center order-0 order-md-1 mb-5 mb-md-0 p-0 ps-md-5">
                <img src="{{ asset('img/resources/ps.png') }}" class="w-100 scale scale-1" style="border-radius:20px" alt="">
            </div>
        </div>
        {{-- PERUM SEKAR --}}
    </div>
    <div id="repo-web">
        <div class="bg-warning rounded-3 p-4">
            Sorry, It is in the process of development, so it cannot be displayed yet. :'(
        </div>
    </div>
</div>
@endsection

@section('script')
    <script>
        $('#nav-bottom').remove()
        menu_active('#btn_resume')

        choose('design')
        function choose(type){
            if(type == 'design'){
                $('#repo-web').addClass('d-none')
                $('#repo-design').removeClass('d-none')
                $('#btn-design').addClass('bg-dark text-warning')
                $('#btn-web').removeClass('bg-dark text-warning')
            }else{
                $('#repo-design').addClass('d-none')
                $('#repo-web').removeClass('d-none')
                $('#btn-web').addClass('bg-dark text-warning')
                $('#btn-design').removeClass('bg-dark text-warning')
            }
        }
    </script>
@endsection
