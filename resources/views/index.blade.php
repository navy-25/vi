<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
    {{-- @include('includes.css') --}}

    @yield('css')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <style>
        html {
            scroll-behavior: smooth !important;
        }
        html, body {
            font-family: "Outfit", sans-serif;
        }
        .nav-bottom {
            width: 100% !important;
            height: 8vh !important;
            position: fixed !important;
            bottom: 20px !important;
            padding-left: 20px !important;
            padding-right: 20px !important;
            display: block;
            z-index: 10;
        }
        .nav-content {
            background: rgba(255, 255, 255, 0.95) !important;
            width: 100% !important;
            height: 100% !important;
            border-radius: 20px !important;
            box-shadow: 0px 0px 35px 0px #00000038;
        }
        .list-menu {
            display: grid;
            grid-template-columns: auto auto auto;
            gap: 10px;
            height: 100%;
        }
        .menu-btn {
            grid-row-start: 1;
            grid-row-end: 5;
        }
        .menu-icon {
            color: rgba(39, 39, 39) !important;
            text-decoration: none !important;
            transition: all 0.2s ease-out;
        }
        /* .menu-icon:hover {
            padding: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 60px;
            height: 60px;
            color: white !important;
            transform: scale(1.2) !important;
            background: #3A6574 !important;
            border-radius: 100% !important;
        }
        .menu-btn .active {
            padding: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 60px;
            height: 60px;
            color: white !important;
            transform: scale(1.2) !important;
            background: #3A6574  !important;
            border-radius: 100% !important;
        } */

        .card{
            border-radius: 15px;
        }
        .btn{
            border-radius: 10px;
        }
        .rounded-full{
            border-radius: 100px;
        }
        .lh-md{
            line-height: 1.8;
        }
        .bg-dark{
            background: #121216;
        }
        .bg-dark-gray{
            background: #3A6574;
        }
        .bg-soft-primary{
            background: #0285c72f;
        }
        .bg-soft-dark-gray{
            background: #3a657434;
        }
        .bg-soft-dark{
            background: #1F2125;
        }
        .bg-soft-gray{
            background: #b8b8b817;
        }
        .bg-primary{
            background: #0284C7 !important;
        }
        .text-primary{
            color: #0284C7 !important;
        }
        .text-secondary{
            color: #3A6574 !important;
        }
        .opacity-50{
            opacity: 0.5;
        }
        .opacity-75{
            opacity: 0.75;
        }
        .fw-semibold{
            font-weight: 600;
        }
        .list-group-item{
            padding: 0px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .list-group-item, .list-group-item:first-child, .list-group-item:last-child{
            border-radius: 10px !important;
            background: none;
            border: none;
            aspect-ratio: 1/1 !important;
        }
        .list-group-item:last-child{
            margin-bottom: 8px;
        }
        .list-group-item.active{
            background: #3A6574;
            color: white;
        }
        .list-group-item.active-download{
            background: #0285c72f !important;
        }
        .list-group-item a{
            color: #3A6574;
            text-decoration: none;
        }
        .list-group-item.active a{
            color: white;
        }
        .pointer{
            cursor: pointer;
        }
        .url__education{
            text-decoration: none;
            color: #3A6574;
        }
        .url__education:hover{
            color: #0284C7 !important;
            text-decoration: underline;
        }
        .url__education_badge:hover{
            background: #0285c72f !important;
            color: #0284C7 !important;
        }
        .url__education_badge:hover i, .badge__contact:hover i{
            color: #0284C7 !important;
        }
        .badge__skills:hover, .badge__contact:hover{
            background: #0285c72f !important;
            color: #0284C7 !important;
        }
        .achivement__card{
            filter: grayscale(100%);
            transition: all ease-in-out 0.5s
        }
        .card:hover .achivement__card{
            filter: grayscale(0%);
        }
        .card:hover .achivement__card btn{
            display: flex !important
        }
        .badge__contact, .badge__contact i{
            cursor: pointer;
            text-decoration: none;
            color: #3A6574;
        }
        .btn__scrollup:hover{
            opacity: 1 !important;
        }
        .owl-carousel img{
            border-radius: 10px;
            filter: grayscale(100%);
            transition: all ease-in-out 0.5s
        }
        .owl-carousel img:hover{
            filter: grayscale(0%);
        }

        .header{
            padding-top: 100px;
        }
        .header p{
            font-size: 15px;
        }
        .header h1{
            font-size: 40px;
            margin-bottom: 10px;
        }
        .header small{
            font-size: 15px;
        }
        .header img{
            display: none;
        }

        @media (min-width: 768px) and (max-width: 1390px) {
            .header p{
                font-size: 15px;
            }
            .header h1{
                font-size: 50px;
                margin-bottom: 10px;
            }
            .header small{
                font-size: 15px;
            }
            .header img{
                display: inline-flex !important;
                width: 90% !important;
            }
            .header-icon{
                padding: 10% 5%;
            }
            .header-component{
                min-height: 80vh;
            }
        }

        @media (min-width: 1400px) {
            .header p{
                font-size: 30px;
            }
            .header h1{
                font-size: 80px;
                margin-bottom: 20px;
            }
            .header small{
                font-size: 30px;
            }
            .header img{
                display: inline-flex !important;
                width: 100% !important;
                margin-top: 70px;
            }
            .header-icon{
                padding: 10% 13% !important
            }
            .header-component{
                min-height: 90vh;
            }
        }
    </style>
</head>

<body>
    {{-- NAV BOTTOM --}}
    {{-- @include('includes.nav-bottom') --}}
    <div class="nav-bottom d-md-none" id="nav-bottom">
        <div class="nav-content">
            <div class="list-menu px-4">
                <div class="menu-btn d-flex" id="menu_btn">
                    <a href="#contact" class="m-auto menu-icon"><i data-feather="message-circle" class="mb-1" width="16" height="16"></i></a>
                </div>
                <div class="menu-btn d-flex">
                    <a href="#achievements" class="m-auto menu-icon"><i data-feather="award" class="mb-1" width="16" height="16"></i></a>
                </div>
                <div class="menu-btn d-flex">
                    <a href="#" class="m-auto menu-icon"><i data-feather="home" class="mb-1" width="16" height="16"></i></a>
                </div>
                <div class="menu-btn d-flex">
                    <a href="#work-experiences" class="m-auto menu-icon"><i data-feather="briefcase" class="mb-1" width="16" height="16"></i></a>
                </div>
                <div class="menu-btn d-flex">
                    <a href="#skills" class="m-auto menu-icon"><i data-feather="code" class="mb-1" width="16" height="16"></i></a>
                </div>
            </div>
        </div>
    </div>

    {{-- END NAV BOTTOM --}}

    {{-- CONTENT --}}
    @yield('content')

    {{-- HEADER --}}
    <div class="position-fixed d-none d-md-block" style="z-index: 1001;right: 20px;bottom: 20px;">
        <a href="#" id="scroll-up" class="btn__scrollup d-none text-decoration-none bg-dark-gray opacity-75 d-flex align-items-center justify-content-center rounded-full" style="width: 40px; height: 40px;">
            <i data-feather="arrow-up-circle" class="text-white" width="20" height="20"></i>
        </a>
    </div>
    <div class="bg-dark w-100"
        style="
            background-image: url('{{ asset('assets/filter-grid.png') }}');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        "
        >
        <div class="h-100"
            style="
                background-image: url('{{ asset('assets/blur-bg-blue.png') }}');
                background-position: center;
                background-size: cover;
                background-repeat: no-repeat;
            "
            >
            <div class="position-absolute d-none d-md-block header-icon">
                <img src="{{ asset('assets/icon.png') }}" class="w-100" alt="icon">
            </div>
            <div class="container h-100 px-0">
                <div class="mb-5 d-md-flex d-none justify-content-between align-items-center" style="height: 80px;">
                    <div class="d-flex align-items-center">
                        <img class="me-3" src="{{ asset('assets/book.png') }}" width="16" alt="book">
                        <p class="mb-0 text-white">Curriculum Vitae</p>
                    </div>
                    <div onclick="document.getElementById('tag-work-experiences').click();" style="z-index: 1000 !important" class="pointer bg-soft-dark py-2 px-4 d-flex align-items-center justify-content-center rounded-full ms-auto me-3">
                        <small class="text-white opacity-75 mb-0">Work Experiences</small>
                    </div>
                    <div onclick="document.getElementById('tag-skills').click();" style="z-index: 1000 !important" class="pointer bg-soft-dark py-2 px-4 d-flex align-items-center justify-content-center rounded-full me-3">
                        <small class="text-white opacity-75 mb-0">Skills</small>
                    </div>
                    <div onclick="document.getElementById('tag-achievements').click();" style="z-index: 1000 !important" class="pointer bg-soft-dark py-2 px-4 d-flex align-items-center justify-content-center rounded-full me-3">
                        <small class="text-white opacity-75 mb-0">Achievements</small>
                    </div>
                    <a href="#contact" style="z-index: 1000 !important" class="pointer bg-soft-dark py-2 px-4 text-decoration-none d-flex align-items-center justify-content-center rounded-full me-5">
                        <small class="text-white opacity-75 mb-0">Contact</small>
                    </a>
                    <div onclick="document.getElementById('tag-about-me').click();" style="z-index: 1000 !important" class="pointer d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assets/profile.png') }}" style="width: 40px;aspect-ratio: 1/1" class="rounded-3">
                        <a href="#about-me" class="d-none" id="tag-about-me"></a>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between p-4 d-md-none">
                    <div class="d-flex align-items-center">
                        <img class="me-3" src="{{ asset('assets/book.png') }}" width="16" alt="book">
                        <p class="mb-0 text-white">Curriculum Vitae</p>
                    </div>
                    <div onclick="document.getElementById('tag-about-me').click();" style="z-index: 1000 !important" class="pointer d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assets/profile.png') }}" style="width: 40px;aspect-ratio: 1/1" class="rounded-3">
                        <a href="#about-me" class="d-none" id="tag-about-me"></a>
                    </div>
                </div>
                <div class="h-100 d-md-flex justify-content-center align-items-end header-component">
                    <div class="mt-md-auto px-4 px-md-0 text-center header">
                        <p class="text-primary mb-2 lh-1">Here I am ...</p>
                        <h1 class="text-white fw-bold lh-1">Muhammad Nafi <br> Maula Hakim</h1>
                        <small class="text-white opacity-50 fw-semibold">Web Developer & UI Designer</small>
                        <img src="{{ asset('assets/card-header.png') }}" alt="card-header">
                    </div>
                    <img src="{{ asset('assets/card-header-mobile.png') }}" class="d-md-none w-100" alt="card-header">
                </div>
            </div>
        </div>
    </div>
    {{-- END HEADER --}}

    {{-- ABOUT ME --}}
    <div class="w-100"
        style="
            background-image: url('{{ asset('assets/bg-monocrome.png') }}');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        "
    >
        <div class="container h-100 p-5" id="about-me">
            <h5 class="text-primary mb-3">About me</h5>
            <p class="text-white opacity-75 lh-md mb-5">
                As someone who has experience in web development, user interface (UI) design for 4 years. combines technical expertise and creativity to create engaging and functional digital experiences. With in-depth knowledge in web technology and design aesthetics, Able to lead projects that are focused on effective solutions and meeting client needs. From initial concept to final implementation, I am committed to delivering exceptional results and strengthening brand image through innovative and minimalist design.
            </p>
            <div class="d-md-flex d-block">
                <img src="{{ asset('assets/profile.png') }}" style="width: 50px;height: 50px;aspect-ratio: 1/1;" class="rounded-full mb-3 mb-md-0 d-none d-md-block">
                <div class="ms-md-auto mb-3 mb-md-0  me-3 d-flex align-items-center">
                    <div class="bg-primary rounded-full d-flex align-items-center justify-content-center me-3" style="width: 50px;aspect-ratio: 1/1;">
                        <i class="text-white" data-feather="maximize-2" width="20" height="20"></i>
                    </div>
                    <div class="text-white">
                        <p class="mb-0 lh-1">170 cm</p>
                        <small class="opacity-50">Height</small>
                    </div>
                </div>
                <div class="ms-md-5 mb-3 mb-md-0 me-3 d-flex align-items-center">
                    <div class="bg-primary rounded-full d-flex align-items-center justify-content-center me-3" style="width: 50px;aspect-ratio: 1/1;">
                        <i class="text-white" data-feather="activity" width="20" height="20"></i>
                    </div>
                    <div class="text-white">
                        <p class="mb-0 lh-1">25 y.o</p>
                        <small class="opacity-50">Age</small>
                    </div>
                </div>
                <div class="ms-md-5 mb-3 mb-md-0 me-3 d-flex align-items-center">
                    <div class="bg-primary rounded-full d-flex align-items-center justify-content-center me-3" style="width: 50px;aspect-ratio: 1/1;">
                        <i class="text-white" data-feather="at-sign" width="20" height="20"></i>
                    </div>
                    <div class="text-white">
                        <p class="mb-0 lh-1">Man</p>
                        <small class="opacity-50">Gender</small>
                    </div>
                </div>
                <div class="ms-md-5 mb-3 mb-md-0 d-flex align-items-center">
                    <div class="bg-primary rounded-full d-flex align-items-center justify-content-center me-3" style="width: 50px;aspect-ratio: 1/1;">
                        <i class="text-white" data-feather="map-pin" width="20" height="20"></i>
                    </div>
                    <div class="text-white">
                        <p class="mb-0 lh-1">Jombang</p>
                        <small class="opacity-50">Residence</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- END ABOUT ME --}}

    {{-- CONTENT STICKY --}}
    <div class="container px-5">
        <div class="row">
            <div class="col-12 col-md-1 d-none d-md-block py-5">
                <nav class="position-sticky sticky-top p-2 ms-md-4" style="width: 60px; top: 50px; border-radius: 15px; box-shadow: 0px 0px 25px 5px rgba(0, 0, 0, 0.05)">
                    <ul class="list-group list-unstyled text-center p-0">
                        <li class="list-group-item" target="#education">
                            <a href="#education">
                                <i data-feather="book-open" class="mb-1" width="16" height="16"></i>
                            </a>
                        </li>
                        <li class="list-group-item" target="#work-experiences">
                            <a href="#work-experiences" id="tag-work-experiences">
                                <i data-feather="briefcase" class="mb-1" width="16" height="16"></i>
                            </a>
                        </li>
                        <li class="list-group-item" target="#skills">
                            <a href="#skills" id="tag-skills">
                                <i data-feather="code" class="mb-1" width="16" height="16"></i>
                            </a>
                        </li>
                        <li class="list-group-item" target="#achievements">
                            <a href="#achievements" id="tag-achievements">
                                <i data-feather="award" class="mb-1" width="16" height="16"></i>
                            </a>
                        </li>
                        <li class="list-group-item" target="#volunteers">
                            <a href="#volunteers">
                                <i data-feather="coffee" class="mb-1" width="16" height="16"></i>
                            </a>
                        </li>
                        {{-- <li class="list-group-item" target="#portfolio">
                            <a href="#portfolio">
                                <i data-feather="folder" class="mb-1" width="16" height="16"></i>
                            </a>
                        </li> --}}
                        <li class="list-group-item" target="#services">
                            <a href="#services">
                                <i data-feather="shopping-cart" class="mb-1" width="16" height="16"></i>
                            </a>
                        </li>
                        <li class="list-group-item" target="#contact">
                            <a href="#contact">
                                <i data-feather="message-circle" class="mb-1" width="16" height="16"></i>
                            </a>
                        </li>
                        <li class="list-group-item active-download mt-3">
                            <a href="https://drive.google.com/file/d/1IDavT68uBwGpJ_mV_qcRnhwsln6Q-HlU/view?usp=sharing"
                                target="_blank"
                                data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top"
                            >
                                <i data-feather="file-text" class="mb-1 text-primary" width="16" height="16"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-12 col-md-11 ps-md-5">
                <div class="text-white py-5" id="education">
                    <h5 class="text-secondary mb-3 d-flex align-items-center">
                        <i data-feather="book-open" class="me-3 text-secondary" stroke-width="2.7" width="20" height="20"></i>
                        Educations
                    </h5>
                    <p class="text-dark opacity-75 lh-md mb-5">
                        My education was supported by a strong interest in technology and information. I have experience in taking courses and self-directed projects related to software development, data analysis, and digital art.
                    </p>
                    <div class="row align-items-stretch">
                        <div class="col-12 col-md-6 mb-2">
                            <div class="card border-0 bg-soft-gray h-100"
                            style="
                                background-image: url('{{ asset('assets/umm.png') }}');
                                background-position: center right;
                                background-size: cover;
                                background-repeat: no-repeat;
                            "
                            >
                                <div class="card-header p-4 pb-2 border-0 bg-transparent">
                                    <div class="row">
                                        <div class="col-12">
                                            <a class="mb-0 fw-semibold url__education" href="https://umm.ac.id/" target="_blank">
                                                University of Muhammadiyah Malang
                                            </a>
                                        </div>
                                        <div class="col-12" style="padding-top: 5px">
                                            <div class="d-flex align-items-center justify-content-start">
                                                <i class="me-2 text-dark opacity-50" data-feather="bookmark" width="14" height="14"></i>
                                                <small class="text-dark opacity-50">2017 - 2021</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-4 py-0 border-0 bg-transparent">
                                    <div class="row">
                                        <div class="col-12 pt-2">
                                            <ul class="text-dark opacity-75 fw-normal ps-3">
                                                <li>
                                                    <small>Informatics Engineer (IPK 3.7)</small>
                                                </li>
                                                <li>
                                                    <small>Malang, East Java</small>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer p-4 border-0 pt-0 bg-transparent">
                                    <a class="badge bg-soft-dark-gray text-dark url__education_badge text-decoration-none me-2" target="_blank" href="https://drive.google.com/file/d/1_d3pvRk_g1z3pgskvbIYdsjjWrC7K_Zt/view?usp=sharing">
                                        <div class="d-flex align-items-center justify-content-end">
                                            <i class="me-2" data-feather="download" width="12" height="12"></i>
                                            <small>Final Project</small>
                                        </div>
                                    </a>
                                    <a class="badge bg-soft-dark-gray text-dark url__education_badge text-decoration-none me-2" target="_blank" href="https://drive.google.com/file/d/1Yik9YL2uBGFS0dNE7VZa4Xg72DrGiLIp/view?usp=sharing">
                                        <div class="d-flex align-items-center justify-content-end">
                                            <i class="me-2" data-feather="download" width="12" height="12"></i>
                                            <small>Journal</small>
                                        </div>
                                    </a>
                                    <a class="badge bg-soft-dark-gray text-dark url__education_badge text-decoration-none" target="_blank" href="https://drive.google.com/file/d/1ahK6rTe9mMDg0J_BHWWofE17nmHLgTUD/view?usp=sharing">
                                        <div class="d-flex align-items-center justify-content-end">
                                            <i class="me-2" data-feather="download" width="12" height="12"></i>
                                            <small>summery.ipynb</small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-2">
                            <div class="card border-0 bg-soft-gray h-100"
                                style="
                                    background-image: url('{{ asset('assets/smkm1.png') }}');
                                    background-position: center right;
                                    background-size: cover;
                                    background-repeat: no-repeat;
                                "
                                >
                                <div class="card-header p-4 pb-2 border-0 bg-transparent">
                                    <div class="row">
                                        <div class="col-12">
                                            <a class="mb-0 fw-semibold url__education" href="https://smkmuhammadiyah1kertosono.sch.id/" target="_blank">
                                                SMK Muhammadiyah 1 Kertosono
                                            </a>
                                        </div>
                                        <div class="col-12" style="padding-top: 5px">
                                            <div class="d-flex align-items-center justify-content-start">
                                                <i class="me-2 text-dark opacity-50" data-feather="bookmark" width="14" height="14"></i>
                                                <small class="text-dark opacity-50">2014 - 2017</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-4 py-0 border-0 bg-transparent">
                                    <div class="row">
                                        <div class="col-12 pt-2">
                                            <ul class="text-dark opacity-75 fw-normal ps-3">
                                                <li>
                                                    <small>Multimedia</small>
                                                </li>
                                                <li>
                                                    <small>Nganjuk, East Java</small>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer p-4 border-0 pt-0 bg-transparent">
                                    <a class="badge bg-soft-dark-gray text-dark url__education_badge text-decoration-none me-2" target="_blank" href="https://youtu.be/-rdNf_jrw38?si=4Z6gzpg3_LcIG0D1">
                                        <div class="d-flex align-items-center justify-content-end">
                                            <i class="me-2" data-feather="youtube" width="12" height="12"></i>
                                            <small>Final Project</small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-5" id="work-experiences">
                    <h5 class="text-secondary mb-3 d-flex align-items-center">
                        <i data-feather="briefcase" class="me-3 text-secondary" stroke-width="2.7" width="20" height="20"></i>
                        Work Experiences
                    </h5>
                    <p class="text-dark opacity-75 lh-md mb-5">
                        With a strong interest in information technology and graphic design, I'm always exploring how to combine the two to create creative solutions. I am ready to bring my enthusiasm and skills into a dynamic work environment in both of these areas.
                    </p>
                    <div class="row align-items-stretch">
                        <div class="col-12 col-md-5 mb-4">
                            <div class="card border-0 bg-soft-gray h-100">
                                <div class="card-header p-4 pb-2 border-0 bg-transparent">
                                    <div class="row">
                                        <div class="col-12">
                                            <p class="mb-0 fw-semibold text-decoration-none text-secondary">
                                                Senior Web Developer
                                            </p>
                                        </div>
                                        <div class="col-12" style="padding-top: 5px">
                                            <div class="d-flex align-items-center justify-content-start">
                                                <i class="me-2 text-dark" data-feather="tag" width="14" height="14"></i>
                                                <small class="text-dark">PT. Teknologi Artifisial Indonesia</small>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-3" style="padding-top: 5px">
                                            <div class="d-flex align-items-center justify-content-start">
                                                <i class="me-2 text-dark opacity-50" data-feather="calendar" width="14" height="14"></i>
                                                <small class="text-dark opacity-50">Until now</small>
                                            </div>
                                        </div>
                                        <div class="col-12" style="padding-top: 5px">
                                            <div class="d-flex align-items-center justify-content-start">
                                                <i class="me-2 text-dark opacity-50" data-feather="briefcase" width="14" height="14"></i>
                                                <small class="text-dark opacity-50">Full-time (5 days of work)</small>
                                            </div>
                                        </div>
                                        <div class="col-12" style="padding-top: 5px">
                                            <div class="d-flex align-items-center justify-content-start">
                                                <i class="me-2 text-dark opacity-50" data-feather="clock" width="14" height="14"></i>
                                                <small class="text-dark opacity-50">WFH (Work From Home)</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-4 pt-0 border-0 bg-transparent">
                                    <div class="row">
                                        <div class="col-12 pt-2">
                                            <small class="mb-1 text-secondary opacity-50">Activitys:</small>
                                            <ul class="text-dark opacity-75 fw-normal ps-3 mb-3">
                                                <li>
                                                    <small>Create a learning dashboard (LMS) development plan and internal website</small>
                                                </li>
                                                <li>
                                                    <small>Development and maintenance of internal IT resources (Servers, etc)</small>
                                                </li>
                                                <li>
                                                    <small>Integrate between websites/services via Rest-API</small>
                                                </li>
                                                <li>
                                                    <small>Database management</small>
                                                </li>
                                                <li>
                                                    <small>Assist in planning and evaluation of the AI Engineer team using the SCRUM method</small>
                                                </li>
                                                <li>
                                                    <small>Involved in external projects as a technical team lead</small>
                                                </li>
                                            </ul>
                                            <small class="mb-1 text-secondary opacity-50">Tools:</small>
                                            <ul class="text-dark opacity-75 fw-normal ps-3 mb-3">
                                                <li>
                                                    <small>Python: Django, Flask, G. Collab</small>
                                                </li>
                                                <li>
                                                    <small>Web: HTML, CSS, JS, Boostrap</small>
                                                </li>
                                                <li>
                                                    <small>UI: Figma, Adobe Photoshop</small>
                                                </li>
                                                <li>
                                                    <small>Kanban: Trello, Notion</small>
                                                </li>
                                                <li>
                                                    <small>Other: Xampp, Mysql, Google Drive, Discord</small>
                                                </li>
                                            </ul>
                                            <small class="mb-1 text-secondary opacity-50">Official Website:</small>
                                            <br>
                                            <a class="mt-2 badge bg-soft-dark-gray text-dark url__education_badge text-decoration-none me-2" target="_blank" href="https://aiforindonesia.com/">
                                                <div class="d-flex align-items-center justify-content-end">
                                                    <i class="me-2" data-feather="globe" width="12" height="12"></i>
                                                    <small>Indonesia AI - AI for Everyone</small>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-5 mb-4">
                            <div class="card border-0 bg-soft-gray h-100">
                                <div class="card-header p-4 pb-2 border-0 bg-transparent">
                                    <div class="row">
                                        <div class="col-12">
                                            <p class="mb-0 fw-semibold text-decoration-none text-secondary">
                                                Creative Content
                                            </p>
                                        </div>
                                        <div class="col-12" style="padding-top: 5px">
                                            <div class="d-flex align-items-center justify-content-start">
                                                <i class="me-2 text-dark" data-feather="tag" width="14" height="14"></i>
                                                <small class="text-dark">PT. Teknologi Artifisial Indonesia</small>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-3" style="padding-top: 5px">
                                            <div class="d-flex align-items-center justify-content-start">
                                                <i class="me-2 text-dark opacity-50" data-feather="calendar" width="14" height="14"></i>
                                                <small class="text-dark opacity-50">Jan 2022 - Mar 2023</small>
                                            </div>
                                        </div>
                                        <div class="col-12" style="padding-top: 5px">
                                            <div class="d-flex align-items-center justify-content-start">
                                                <i class="me-2 text-dark opacity-50" data-feather="briefcase" width="14" height="14"></i>
                                                <small class="text-dark opacity-50">Part-time (Flexible)</small>
                                            </div>
                                        </div>
                                        <div class="col-12" style="padding-top: 5px">
                                            <div class="d-flex align-items-center justify-content-start">
                                                <i class="me-2 text-dark opacity-50" data-feather="clock" width="14" height="14"></i>
                                                <small class="text-dark opacity-50">WFH (Work From Home)</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-4 pt-0 border-0 bg-transparent">
                                    <div class="row">
                                        <div class="col-12 pt-2">
                                            <small class="mb-1 text-secondary opacity-50">Activitys:</small>
                                            <ul class="text-dark opacity-75 fw-normal ps-3 mb-3">
                                                <li>
                                                    <small>Create a social media content plan</small>
                                                </li>
                                                <li>
                                                    <small>Research and creation of social media content</small>
                                                </li>
                                                <li>
                                                    <small>Create designs for agency needs (social media content, product thumbnails, pitch decks, etc.)</small>
                                                </li>
                                                <li>
                                                    <small>Create short videos for social media content (reels, stories)</small>
                                                </li>
                                            </ul>
                                            <small class="mb-1 text-secondary opacity-50">Tools:</small>
                                            <ul class="text-dark opacity-75 fw-normal ps-3 mb-3">
                                                <li>
                                                    <small>Desain: Corel Draw, Adobe Photoshop, Adobe Ilustrator, Canvas</small>
                                                </li>
                                                <li>
                                                    <small>Video: Adobe Premier, Filmora, Canvas</small>
                                                </li>
                                                <li>
                                                    <small>Assets: Freepick, Flaticon, Storyset</small>
                                                </li>
                                                <li>
                                                    <small>Kanban: Trello</small>
                                                </li>
                                                <li>
                                                    <small>Video Conf: G. Meet, Zoom</small>
                                                </li>
                                            </ul>
                                            <small class="mb-1 text-secondary opacity-50">Official Website:</small>
                                            <br>
                                            <a class="mt-2 badge bg-soft-dark-gray text-dark url__education_badge text-decoration-none me-2" target="_blank" href="https://aiforindonesia.com/">
                                                <div class="d-flex align-items-center justify-content-end">
                                                    <i class="me-2" data-feather="globe" width="12" height="12"></i>
                                                    <small>Indonesia AI - AI for Everyone</small>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-5 mb-4">
                            <div class="card border-0 bg-soft-gray h-100">
                                <div class="card-header p-4 pb-2 border-0 bg-transparent">
                                    <div class="row">
                                        <div class="col-12">
                                            <p class="mb-0 fw-semibold text-decoration-none text-secondary">
                                                Full Stack Web Developer
                                            </p>
                                        </div>
                                        <div class="col-12" style="padding-top: 5px">
                                            <div class="d-flex align-items-center justify-content-start">
                                                <i class="me-2 text-dark" data-feather="tag" width="14" height="14"></i>
                                                <small class="text-dark">PT. Heksa Adhitek Wayatama</small>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-3" style="padding-top: 5px">
                                            <div class="d-flex align-items-center justify-content-start">
                                                <i class="me-2 text-dark opacity-50" data-feather="calendar" width="14" height="14"></i>
                                                <small class="text-dark opacity-50">Aug 2021 - Juni 2023</small>
                                            </div>
                                        </div>
                                        <div class="col-12" style="padding-top: 5px">
                                            <div class="d-flex align-items-center justify-content-start">
                                                <i class="me-2 text-dark opacity-50" data-feather="briefcase" width="14" height="14"></i>
                                                <small class="text-dark opacity-50">Fulltime-time (6 days of work)</small>
                                            </div>
                                        </div>
                                        <div class="col-12" style="padding-top: 5px">
                                            <div class="d-flex align-items-center justify-content-start">
                                                <i class="me-2 text-dark opacity-50" data-feather="clock" width="14" height="14"></i>
                                                <small class="text-dark opacity-50">WFO (Work From Office)</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-4 pt-0 border-0 bg-transparent">
                                    <div class="row">
                                        <div class="col-12 pt-2">
                                            <small class="mb-1 text-secondary opacity-50">Activitys:</small>
                                            <ul class="text-dark opacity-75 fw-normal ps-3 mb-3">
                                                <li>
                                                    <small>Work as a web Developer on a full-time basis</small>
                                                </li>
                                                <li>
                                                    <small>Web application maintenance</small>
                                                </li>
                                                <li>
                                                    <small>Developing a website with the Laravel framework</small>
                                                </li>
                                                <li>
                                                    <small>Learn various frameworks to help work in office projects</small>
                                                </li>
                                                <li>
                                                    <small>Work on and Manage enterprise applications</small>
                                                </li>
                                                <li>
                                                    <small>Integrating the system with Bank Gateway, WA Gateway, etc</small>
                                                </li>
                                                <li>
                                                    <small>Building a Rest API</small>
                                                </li>
                                            </ul>
                                            <small class="mb-1 text-secondary opacity-50">Tools:</small>
                                            <ul class="text-dark opacity-75 fw-normal ps-3 mb-3">
                                                <li>
                                                    <small>Framework : Laravel, Lumen, Wordpress</small>
                                                </li>
                                                <li>
                                                    <small>Web: HTML, CSS, JS, Boostrap</small>
                                                </li>
                                                <li>
                                                    <small>Programming: PHP</small>
                                                </li>
                                                <li>
                                                    <small>UI: Figma, Adobe Photoshop</small>
                                                </li>
                                                <li>
                                                    <small>Kanban: Trello</small>
                                                </li>
                                                <li>
                                                    <small>Other: Xampp, Mysql, Google Drive</small>
                                                </li>
                                            </ul>
                                            <small class="mb-1 text-secondary opacity-50">Official Website:</small>
                                            <br>
                                            <a class="mt-2 badge bg-soft-dark-gray text-dark url__education_badge text-decoration-none me-2" target="_blank" href="https://www.klikheadway.com/">
                                                <div class="d-flex align-items-center justify-content-end">
                                                    <i class="me-2" data-feather="globe" width="12" height="12"></i>
                                                    <small>PT Heksa Adhitek Wayatama</small>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-5 mb-4">
                            <div class="card border-0 bg-soft-gray h-100">
                                <div class="card-header p-4 pb-2 border-0 bg-transparent">
                                    <div class="row">
                                        <div class="col-12">
                                            <p class="mb-0 fw-semibold text-decoration-none text-secondary">
                                                Python Programming Mentor
                                            </p>
                                        </div>
                                        <div class="col-12" style="padding-top: 5px">
                                            <div class="d-flex align-items-center justify-content-start">
                                                <i class="me-2 text-dark" data-feather="tag" width="14" height="14"></i>
                                                <small class="text-dark">PT. Teknologi Artifisial Indonesia</small>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-3" style="padding-top: 5px">
                                            <div class="d-flex align-items-center justify-content-start">
                                                <i class="me-2 text-dark opacity-50" data-feather="calendar" width="14" height="14"></i>
                                                <small class="text-dark opacity-50">Jan 2021 - May 2021</small>
                                            </div>
                                        </div>
                                        <div class="col-12" style="padding-top: 5px">
                                            <div class="d-flex align-items-center justify-content-start">
                                                <i class="me-2 text-dark opacity-50" data-feather="briefcase" width="14" height="14"></i>
                                                <small class="text-dark opacity-50">Part-time (Flexible)</small>
                                            </div>
                                        </div>
                                        <div class="col-12" style="padding-top: 5px">
                                            <div class="d-flex align-items-center justify-content-start">
                                                <i class="me-2 text-dark opacity-50" data-feather="clock" width="14" height="14"></i>
                                                <small class="text-dark opacity-50">WFH (Work From Home)</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-4 pt-0 border-0 bg-transparent">
                                    <div class="row">
                                        <div class="col-12 pt-2">
                                            <small class="mb-1 text-secondary opacity-50">Activitys:</small>
                                            <ul class="text-dark opacity-75 fw-normal ps-3 mb-3">
                                                <li>
                                                    <small>Conducting the teaching and learning process (mentoring) with predetermined classes/month</small>
                                                </li>
                                                <li>
                                                    <small>Providing materials and training related to the python programming language</small>
                                                </li>
                                                <li>
                                                    <small>Assignments every week</small>
                                                </li>
                                                <li>
                                                    <small>Answering questions from the cashew (Students / people who take the online course)</small>
                                                </li>
                                                <li>
                                                    <small>Monitoring and evaluation</small>
                                                </li>
                                            </ul>
                                            <small class="mb-1 text-secondary opacity-50">Tools:</small>
                                            <ul class="text-dark opacity-75 fw-normal ps-3 mb-3">
                                                <li>
                                                    <small>Programming: Python, G. Collab</small>
                                                </li>
                                                <li>
                                                    <small>Editor: Vs Code, Sublime</small>
                                                </li>
                                                <li>
                                                    <small>Kanban: Trello</small>
                                                </li>
                                                <li>
                                                    <small>Video Conf: G. Meet, Zoom</small>
                                                </li>
                                            </ul>
                                            <small class="mb-1 text-secondary opacity-50">Official Website:</small>
                                            <br>
                                            <a class="mt-2 badge bg-soft-dark-gray text-dark url__education_badge text-decoration-none me-2" target="_blank" href="https://aiforindonesia.com/">
                                                <div class="d-flex align-items-center justify-content-end">
                                                    <i class="me-2" data-feather="globe" width="12" height="12"></i>
                                                    <small>Indonesia AI - AI for Everyone</small>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-5">
                            <div class="card border-0 bg-soft-gray h-100">
                                <div class="card-header p-4 pb-2 border-0 bg-transparent">
                                    <div class="row">
                                        <div class="col-12">
                                            <p class="mb-0 fw-semibold text-decoration-none text-secondary">
                                                Drive Grab (Bike)
                                            </p>
                                        </div>
                                        <div class="col-12" style="padding-top: 5px">
                                            <div class="d-flex align-items-center justify-content-start">
                                                <i class="me-2 text-dark" data-feather="tag" width="14" height="14"></i>
                                                <small class="text-dark">PT. Grab Indonesia</small>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-3" style="padding-top: 5px">
                                            <div class="d-flex align-items-center justify-content-start">
                                                <i class="me-2 text-dark opacity-50" data-feather="calendar" width="14" height="14"></i>
                                                <small class="text-dark opacity-50">Aug 2018 - Oct 2020</small>
                                            </div>
                                        </div>
                                        <div class="col-12" style="padding-top: 5px">
                                            <div class="d-flex align-items-center justify-content-start">
                                                <i class="me-2 text-dark opacity-50" data-feather="briefcase" width="14" height="14"></i>
                                                <small class="text-dark opacity-50">Part-time (Flexible)</small>
                                            </div>
                                        </div>
                                        <div class="col-12" style="padding-top: 5px">
                                            <div class="d-flex align-items-center justify-content-start">
                                                <i class="me-2 text-dark opacity-50" data-feather="clock" width="14" height="14"></i>
                                                <small class="text-dark opacity-50">WFH (Work From Home)</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-4 pt-0 border-0 bg-transparent">
                                    <div class="row">
                                        <div class="col-12 pt-2">
                                            <small class="mb-1 text-secondary opacity-50">Activitys:</small>
                                            <ul class="text-dark opacity-75 fw-normal ps-3 mb-3">
                                                <li>
                                                    <small>Complete more than 20 main tasks per day</small>
                                                </li>
                                                <li>
                                                    <small>Able to work 4-5 hours/day</small>
                                                </li>
                                                <li>
                                                    <small>Have a rating 4.9/5</small>
                                                </li>
                                                <li>
                                                    <small>Honest and always try to provide the best service</small>
                                                </li>
                                                <li>
                                                    <small>Safety and punctuality first</small>
                                                </li>
                                            </ul>
                                            <small class="mb-1 text-secondary opacity-50">Official Website:</small>
                                            <br>
                                            <a class="mt-2 badge bg-soft-dark-gray text-dark url__education_badge text-decoration-none me-2" target="_blank" href="https://www.grab.com/id/">
                                                <div class="d-flex align-items-center justify-content-end">
                                                    <i class="me-2" data-feather="globe" width="12" height="12"></i>
                                                    <small>Grab Indonesia</small>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-5 text-white" id="skills">
                    <h5 class="text-secondary mb-3 d-flex align-items-center">
                        <i data-feather="code" class="me-3 text-secondary" stroke-width="2.7" width="20" height="20"></i>
                        Skills
                    </h5>
                    <p class="text-dark opacity-75 lh-md mb-5">
                        Good communication skills and efficient project management allow me to interact with various parties related to the project clearly and ensure that the project runs according to target. I am also skilled in website development, creating responsive and interactive websites, as well as in graphic design, designing attractive and cohesive graphic elements.
                    </p>
                    <div class="row mb-4">
                        <div class="col-12 col-md-2 mb-md-1 mb-3">
                            <small class="text-secondary opacity-50">Softskill</small>
                        </div>
                        <div class="col-12 col-md-10">
                            <div class="btn bg-soft-dark-gray rounded-full px-4 m-1 badge__skills">
                                Public Speaking
                            </div>
                            <div class="btn bg-soft-dark-gray rounded-full px-4 m-1 badge__skills">
                                Good Analysis
                            </div>
                            <div class="btn bg-soft-dark-gray rounded-full px-4 m-1 badge__skills">
                                Good Communitcation
                            </div>
                            <div class="btn bg-soft-dark-gray rounded-full px-4 m-1 badge__skills">
                                Team Work
                            </div>
                            <div class="btn bg-soft-dark-gray rounded-full px-4 m-1 badge__skills">
                                Quick Learning Ability
                            </div>
                            <div class="btn bg-soft-dark-gray rounded-full px-4 m-1 badge__skills">
                                Planning
                            </div>
                            <div class="btn bg-soft-dark-gray rounded-full px-4 m-1 badge__skills">
                                Project/Task Management
                            </div>
                            <div class="btn bg-soft-dark-gray rounded-full px-4 m-1 badge__skills">
                                Problem Solving
                            </div>
                            <div class="btn bg-soft-dark-gray rounded-full px-4 m-1 badge__skills">
                                Time Management
                            </div>
                            <div class="btn bg-soft-dark-gray rounded-full px-4 m-1 badge__skills">
                                Monev & Critical Thinking
                            </div>
                            <div class="btn bg-soft-dark-gray rounded-full px-4 m-1 badge__skills">
                                Creative Thinking
                            </div>
                            <div class="btn bg-soft-dark-gray rounded-full px-4 m-1 badge__skills">
                                Leading
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12 col-md-2 mb-md-1 mb-3">
                            <small class="text-secondary opacity-50">Hardskill</small>
                        </div>
                        <div class="col-12 col-md-10">
                            <div class="btn bg-soft-dark-gray rounded-full px-4 m-1 badge__skills">
                                Fullstack Web Developer
                            </div>
                            <div class="btn bg-soft-dark-gray rounded-full px-4 m-1 badge__skills">
                                Rest-API Developer
                            </div>
                            <div class="btn bg-soft-dark-gray rounded-full px-4 m-1 badge__skills">
                                Front-End Developer
                            </div>
                            <div class="btn bg-soft-dark-gray rounded-full px-4 m-1 badge__skills">
                                Back-End Developer
                            </div>
                            <div class="btn bg-soft-dark-gray rounded-full px-4 m-1 badge__skills">
                                Database Design
                            </div>
                            <div class="btn bg-soft-dark-gray rounded-full px-4 m-1 badge__skills">
                                Database Management
                            </div>
                            <div class="btn bg-soft-dark-gray rounded-full px-4 m-1 badge__skills">
                                Graphic Designer
                            </div>
                            <div class="btn bg-soft-dark-gray rounded-full px-4 m-1 badge__skills">
                                Teaching
                            </div>
                            <div class="btn bg-soft-dark-gray rounded-full px-4 m-1 badge__skills">
                                UI Designer
                            </div>
                            <div class="btn bg-soft-dark-gray rounded-full px-4 m-1 badge__skills">
                                Typografy
                            </div>
                            <div class="btn bg-soft-dark-gray rounded-full px-4 m-1 badge__skills">
                                Server/Hosting Management
                            </div>
                            <div class="btn bg-soft-dark-gray rounded-full px-4 m-1 badge__skills">
                                App Deployment
                            </div>
                            <div class="btn bg-soft-dark-gray rounded-full px-4 m-1 badge__skills">
                                Integrations System
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12 col-md-2 mb-md-1 mb-3">
                            <small class="text-secondary opacity-50">Framework</small>
                        </div>
                        <div class="col-12 col-md-10">
                            <div class="btn bg-soft-dark-gray rounded-full px-4 m-1 badge__skills">
                                Laravel
                            </div>
                            <div class="btn bg-soft-dark-gray rounded-full px-4 m-1 badge__skills">
                                Django
                            </div>
                            <div class="btn bg-soft-dark-gray rounded-full px-4 m-1 badge__skills">
                                Boostrap
                            </div>
                            <div class="btn bg-soft-dark-gray rounded-full px-4 m-1 badge__skills">
                                Tailwind
                            </div>
                            <div class="btn bg-soft-dark-gray rounded-full px-4 m-1 badge__skills">
                                Flask
                            </div>
                            <div class="btn bg-soft-dark-gray rounded-full px-4 m-1 badge__skills">
                                Wordpress
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12 col-md-2 mb-md-1 mb-3">
                            <small class="text-secondary opacity-50">App Mastery</small>
                        </div>
                        <div class="col-12 col-md-10">
                            <div class="btn bg-soft-dark-gray rounded-full px-4 m-1 badge__skills">
                                Visual Studio Code
                            </div>
                            <div class="btn bg-soft-dark-gray rounded-full px-4 m-1 badge__skills">
                                Sublime
                            </div>
                            <div class="btn bg-soft-dark-gray rounded-full px-4 m-1 badge__skills">
                                Xampp/Lampp/Wampp
                            </div>
                            <div class="btn bg-soft-dark-gray rounded-full px-4 m-1 badge__skills">
                                Microsoft Office
                            </div>
                            <div class="btn bg-soft-dark-gray rounded-full px-4 m-1 badge__skills">
                                Figma
                            </div>
                            <div class="btn bg-soft-dark-gray rounded-full px-4 m-1 badge__skills">
                                Adobe Photoshop
                            </div>
                            <div class="btn bg-soft-dark-gray rounded-full px-4 m-1 badge__skills">
                                Adobe Ilustrator
                            </div>
                            <div class="btn bg-soft-dark-gray rounded-full px-4 m-1 badge__skills">
                                Adobe Premier
                            </div>
                            <div class="btn bg-soft-dark-gray rounded-full px-4 m-1 badge__skills">
                                Adobe Filmora
                            </div>
                            <div class="btn bg-soft-dark-gray rounded-full px-4 m-1 badge__skills">
                                Postman
                            </div>
                            <div class="btn bg-soft-dark-gray rounded-full px-4 m-1 badge__skills">
                                UMLet
                            </div>
                            <div class="btn bg-soft-dark-gray rounded-full px-4 m-1 badge__skills">
                                Navicat
                            </div>
                            <div class="btn bg-soft-dark-gray rounded-full px-4 m-1 badge__skills">
                                OBS Studio
                            </div>
                            <div class="btn bg-soft-dark-gray rounded-full px-4 m-1 badge__skills">
                                Ngrok
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-2 mb-md-1 mb-3">
                            <small class="text-secondary opacity-50">Others</small>
                        </div>
                        <div class="col-12 col-md-10">
                            <div class="btn bg-soft-dark-gray rounded-full px-4 m-1 badge__skills">
                                Github
                            </div>
                            <div class="btn bg-soft-dark-gray rounded-full px-4 m-1 badge__skills">
                                Gitlab
                            </div>
                            <div class="btn bg-soft-dark-gray rounded-full px-4 m-1 badge__skills">
                                Google Drive
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-5" id="achievements">
                    <h5 class="text-secondary mb-3 d-flex align-items-center">
                        <i data-feather="award" class="me-3 text-secondary" stroke-width="2.7" width="20" height="20"></i>
                        Achievements
                    </h5>
                    <p class="text-dark opacity-75 lh-md mb-5">
                        The achievements I have attained in a particular field or context can encompass everything from awards received to significant contributions made to a team or organization. I am tenacious and always serious about achieving my goals, with full dedication and unwavering determination.
                    </p>
                    <div class="row align-items-strech">
                        <div class="col-12 col-md-4 mb-4">
                            <div class="card border-0 bg-soft-gray h-100">
                                <div class="card-header p-4 pb-0 border-0 bg-transparent">
                                    <div class="w-100 rounded-3 achivement__card d-flex align-items-center justify-content-center" style="
                                        background-image: url('{{ asset('assets/djarum.jpg') }}');
                                        background-position: center;
                                        background-size: cover;
                                        background-repeat: no-repeat;
                                        aspect-ratio: 4/2.2;
                                    ">
                                        <btn type="button"  data-toggle="modal" data-target="#achievement1" class="btn btn-dark rounded-full p-0 d-flex align-items-center justify-content-center d-none" style="width: 40px;height: 40px;">
                                            <i class="text-white" data-feather="eye" width="14" height="14"></i>
                                        </btn>
                                    </div>
                                </div>
                                <div class="card-body p-4 py-2 border-0 bg-transparent">
                                    <p class="mb-0 fw-semibold text-decoration-none text-secondary">
                                        Best performance at Character Building
                                    </p>
                                    <small class="mb-1 text-secondary opacity-50">Beasiswa Djarum Foundation</small>
                                    <div class="mt-3">
                                        <small class="mb-1 text-secondary opacity-50">The best team in the character building activity event at Cikole Bandung for 4 days</small>
                                    </div>
                                </div>
                                <div class="card-footer p-4 border-0 bg-transparent">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <i class="me-2 text-dark opacity-50" data-feather="calendar" width="14" height="14"></i>
                                        <small class="text-dark opacity-50">{{ date('Y') - 2020 }} years ago (2020)</small>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="achievement1" tabindex="-1" role="dialog" aria-labelledby="achievement1Label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body rounded-3">
                                            <img src="{{ asset('assets/djarum.jpg') }}" alt="djarum foundation" class="w-100 rounded-3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mb-4">
                            <div class="card border-0 bg-soft-gray h-100">
                                <div class="card-header p-4 pb-0 border-0 bg-transparent">
                                    <div class="w-100 rounded-3 achivement__card d-flex align-items-center justify-content-center" style="
                                        background-image: url('{{ asset('assets/djarum-2.jpg') }}');
                                        background-position: center;
                                        background-size: cover;
                                        background-repeat: no-repeat;
                                        aspect-ratio: 4/2.2;
                                    ">
                                        <btn type="button"  data-toggle="modal" data-target="#achievement5" class="btn btn-dark rounded-full p-0 d-flex align-items-center justify-content-center d-none" style="width: 40px;height: 40px;">
                                            <i class="text-white" data-feather="eye" width="14" height="14"></i>
                                        </btn>
                                    </div>
                                </div>
                                <div class="card-body p-4 py-2 border-0 bg-transparent">
                                    <p class="mb-0 fw-semibold text-decoration-none text-secondary">
                                        Djarum Foundation Scholarship Recipient
                                    </p>
                                    <small class="mb-1 text-secondary opacity-50">PT. Djarum Indonesia</small>
                                    <div class="mt-3">
                                        <small class="mb-1 text-secondary opacity-50">Scholarship provided by the Djarum Foundation for 1 year. Not only do you get coaching money, but you also get training and skill improvement</small>
                                    </div>
                                </div>
                                <div class="card-footer p-4 border-0 bg-transparent">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <i class="me-2 text-dark opacity-50" data-feather="calendar" width="14" height="14"></i>
                                        <small class="text-dark opacity-50">{{ date('Y') - 2019 }} years ago (2019)</small>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="achievement5" tabindex="-1" role="dialog" aria-labelledby="achievement1Label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body rounded-3">
                                            <img src="{{ asset('assets/djarum-2.jpg') }}" alt="djarum foundation" class="w-100 rounded-3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mb-4">
                            <div class="card border-0 bg-soft-gray h-100">
                                <div class="card-header p-4 pb-0 border-0 bg-transparent">
                                    <div class="w-100 rounded-3 achivement__card d-flex align-items-center justify-content-center" style="
                                        background-image: url('{{ asset('assets/itconvert.png') }}');
                                        background-position: center;
                                        background-size: cover;
                                        background-repeat: no-repeat;
                                        aspect-ratio: 4/2.2;
                                    ">
                                        <btn type="button"  data-toggle="modal" data-target="#achievement2" class="btn btn-dark rounded-full p-0 d-flex align-items-center justify-content-center d-none" style="width: 40px;height: 40px;">
                                            <i class="text-white" data-feather="eye" width="14" height="14"></i>
                                        </btn>
                                    </div>
                                </div>
                                <div class="card-body p-4 py-2 border-0 bg-transparent">
                                    <p class="mb-0 fw-semibold text-decoration-none text-secondary">
                                        3rd Place in Scientific Writing Competition at UNJ
                                    </p>
                                    <small class="mb-1 text-secondary opacity-50">IT Convert Universitas Negeri Jember</small>
                                    <div class="mt-3">
                                        <small class="mb-1 text-secondary opacity-50">3rd place in a scientific writing competition at a national level competition with 2 team members. "Utilization of e-KTP as a Smart Data Collection System"</small>
                                    </div>
                                </div>
                                <div class="card-footer p-4 border-0 bg-transparent">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <i class="me-2 text-dark opacity-50" data-feather="calendar" width="14" height="14"></i>
                                        <small class="text-dark opacity-50">{{ date('Y') - 2020 }} years ago (2020)</small>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="achievement2" tabindex="-1" role="dialog" aria-labelledby="achievement1Label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body rounded-3">
                                            <img src="{{ asset('assets/itconvert.png') }}" alt="it convert" class="w-100 rounded-3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mb-4">
                            <div class="card border-0 bg-soft-gray h-100">
                                <div class="card-header p-4 pb-0 border-0 bg-transparent">
                                    <div class="w-100 rounded-3 achivement__card d-flex align-items-center justify-content-center" style="
                                        background-image: url('{{ asset('assets/hak-cipta.png') }}');
                                        background-position: center;
                                        background-size: cover;
                                        background-repeat: no-repeat;
                                        aspect-ratio: 4/2.2;
                                    ">
                                        <btn type="button"  data-toggle="modal" data-target="#achievement6" class="btn btn-dark rounded-full p-0 d-flex align-items-center justify-content-center d-none" style="width: 40px;height: 40px;">
                                            <i class="text-white" data-feather="eye" width="14" height="14"></i>
                                        </btn>
                                    </div>
                                </div>
                                <div class="card-body p-4 py-2 border-0 bg-transparent">
                                    <p class="mb-0 fw-semibold text-decoration-none text-secondary">
                                        Sipicow (Copyright)
                                    </p>
                                    <small class="mb-1 text-secondary opacity-50">Pangkalan Data Kekayaan Intelektual</small>
                                    <div class="mt-3">
                                        <small class="mb-1 text-secondary opacity-50">Proof of registration and copyright for "Early detection and treatment system for cattle diseases"</small>
                                    </div>
                                </div>
                                <div class="card-footer p-4 border-0 bg-transparent">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <i class="me-2 text-dark opacity-50" data-feather="calendar" width="14" height="14"></i>
                                        <small class="text-dark opacity-50">{{ date('Y') - 2019 }} years ago (2019)</small>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="achievement6" tabindex="-1" role="dialog" aria-labelledby="achievement1Label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body rounded-3">
                                            <img src="{{ asset('assets/hak-cipta.png') }}" alt="hak-cipta" class="w-100 rounded-3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mb-4">
                            <div class="card border-0 bg-soft-gray h-100">
                                <div class="card-header p-4 pb-0 border-0 bg-transparent">
                                    <div class="w-100 rounded-3 achivement__card d-flex align-items-center justify-content-center" style="
                                        background-image: url('{{ asset('assets/gemastik12.jpg') }}');
                                        background-position: center;
                                        background-size: cover;
                                        background-repeat: no-repeat;
                                        aspect-ratio: 4/2.2;
                                    ">
                                        <btn type="button"  data-toggle="modal" data-target="#achievement3" class="btn btn-dark rounded-full p-0 d-flex align-items-center justify-content-center d-none" style="width: 40px;height: 40px;">
                                            <i class="text-white" data-feather="eye" width="14" height="14"></i>
                                        </btn>
                                    </div>
                                </div>
                                <div class="card-body p-4 py-2 border-0 bg-transparent">
                                    <p class="mb-0 fw-semibold text-decoration-none text-secondary">
                                        Gemastik 2019 Finalist Telkom Bandung
                                    </p>
                                    <small class="mb-1 text-secondary opacity-50">Gemastik XII - 2019</small>
                                    <div class="mt-3">
                                        <small class="mb-1 text-secondary opacity-50">Create an information system that is able to carry out early diagnosis of cattle diseases for cattle breeders in Malang. "Sipicow - Early detection and treatment system for cattle diseases"</small>
                                    </div>
                                </div>
                                <div class="card-footer p-4 border-0 bg-transparent">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <i class="me-2 text-dark opacity-50" data-feather="calendar" width="14" height="14"></i>
                                        <small class="text-dark opacity-50">{{ date('Y') - 2019 }} years ago (2019)</small>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="achievement3" tabindex="-1" role="dialog" aria-labelledby="achievement1Label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body rounded-3">
                                            <img src="{{ asset('assets/gemastik12.jpg') }}" alt="gemastik12" class="w-100 rounded-3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mb-4">
                            <div class="card border-0 bg-soft-gray h-100">
                                <div class="card-header p-4 pb-0 border-0 bg-transparent">
                                    <div class="w-100 rounded-3 achivement__card d-flex align-items-center justify-content-center" style="
                                        background-image: url('{{ asset('assets/gemastik11.jpg') }}');
                                        background-position: center;
                                        background-size: cover;
                                        background-repeat: no-repeat;
                                        aspect-ratio: 4/2.2;
                                    ">
                                        <btn type="button"  data-toggle="modal" data-target="#achievement4" class="btn btn-dark rounded-full p-0 d-flex align-items-center justify-content-center d-none" style="width: 40px;height: 40px;">
                                            <i class="text-white" data-feather="eye" width="14" height="14"></i>
                                        </btn>
                                    </div>
                                </div>
                                <div class="card-body p-4 py-2 border-0 bg-transparent">
                                    <p class="mb-0 fw-semibold text-decoration-none text-secondary">
                                        Gemastik 2018 Finalist ITS Surabaya
                                    </p>
                                    <small class="mb-1 text-secondary opacity-50">Gemastik XI - 2018</small>
                                    <div class="mt-3">
                                        <small class="mb-1 text-secondary opacity-50">Designing a web server-based chatbot system for responsive and intelligent students in choosing courses. "Lecbot - Lective Bot Telegram"</small>
                                    </div>
                                </div>
                                <div class="card-footer p-4 border-0 bg-transparent">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <i class="me-2 text-dark opacity-50" data-feather="calendar" width="14" height="14"></i>
                                        <small class="text-dark opacity-50">{{ date('Y') - 2018 }} years ago (2018)</small>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="achievement4" tabindex="-1" role="dialog" aria-labelledby="achievement1Label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body rounded-3">
                                            <img src="{{ asset('assets/gemastik11.jpg') }}" alt="gemastik12" class="w-100 rounded-3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-5" id="volunteers">
                    <h5 class="text-secondary mb-3 d-flex align-items-center">
                        <i data-feather="coffee" class="me-3 text-secondary" stroke-width="2.7" width="20" height="20"></i>
                        Organization & Volunteers
                    </h5>
                    <p class="text-dark opacity-75 lh-md mb-5">
                        Enthusiastic and committed to helping improve the community and surrounding environment, full of confidence that by giving a little time, energy, and skills voluntarily, one can make a big difference in the lives of others and create a positive impact in society.
                    </p>
                    <div class="row align-items-strech">
                        <div class="col-12 col-md-4 mb-4">
                            <div class="card border-0 bg-soft-gray h-100">
                                <div class="card-header p-4 pb-0 border-0 bg-transparent">
                                    <div class="w-100 rounded-3 achivement__card d-flex align-items-center justify-content-center" style="
                                        background-image: url('{{ asset('assets/abidzar.png') }}');
                                        background-position: center;
                                        background-size: cover;
                                        background-repeat: no-repeat;
                                        aspect-ratio: 4/2.2;
                                    ">
                                        <btn type="button"  data-toggle="modal" data-target="#volun-1" class="btn btn-dark rounded-full p-0 d-flex align-items-center justify-content-center d-none" style="width: 40px;height: 40px;">
                                            <i class="text-white" data-feather="eye" width="14" height="14"></i>
                                        </btn>
                                    </div>
                                </div>
                                <div class="card-body p-4 py-2 border-0 bg-transparent">
                                    <p class="mb-0 fw-semibold text-decoration-none text-secondary">
                                        Abidzar Community
                                    </p>
                                    <small class="mb-1 text-secondary opacity-50">Co-Founder</small>
                                    <div class="mt-3">
                                        <small class="mb-1 text-secondary opacity-50">A community that operates in the field of humanity and community empowerment</small>
                                    </div>
                                </div>
                                <div class="card-footer p-4 border-0 bg-transparent">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <i class="me-2 text-dark opacity-50" data-feather="calendar" width="14" height="14"></i>
                                        <small class="text-dark opacity-50">{{ date('Y') - 2020 }} years ago (2020)</small>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="volun-1" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body rounded-3">
                                            <img src="{{ asset('assets/abidzar.png') }}" alt="djarum foundation" class="w-100 rounded-3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mb-4">
                            <div class="card border-0 bg-soft-gray h-100">
                                <div class="card-header p-4 pb-0 border-0 bg-transparent">
                                    <div class="w-100 rounded-3 achivement__card d-flex align-items-center justify-content-center" style="
                                        background-image: url('{{ asset('assets/kogsi.jpg') }}');
                                        background-position: center;
                                        background-size: cover;
                                        background-repeat: no-repeat;
                                        aspect-ratio: 4/2.2;
                                    ">
                                        <btn type="button"  data-toggle="modal" data-target="#volun-2" class="btn btn-dark rounded-full p-0 d-flex align-items-center justify-content-center d-none" style="width: 40px;height: 40px;">
                                            <i class="text-white" data-feather="eye" width="14" height="14"></i>
                                        </btn>
                                    </div>
                                </div>
                                <div class="card-body p-4 py-2 border-0 bg-transparent">
                                    <p class="mb-0 fw-semibold text-decoration-none text-secondary">
                                        KOGSI UMM
                                    </p>
                                    <small class="mb-1 text-secondary opacity-50">Coordinator</small>
                                    <div class="mt-3">
                                        <small class="mb-1 text-secondary opacity-50">Become a forum for student friends who like to be competent</small>
                                    </div>
                                </div>
                                <div class="card-footer p-4 border-0 bg-transparent">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <i class="me-2 text-dark opacity-50" data-feather="calendar" width="14" height="14"></i>
                                        <small class="text-dark opacity-50">{{ date('Y') - 2018 }} years ago (2018)</small>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="volun-2" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body rounded-3">
                                            <img src="{{ asset('assets/kogsi.jpg') }}" alt="djarum foundation" class="w-100 rounded-3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mb-4">
                            <div class="card border-0 bg-soft-gray h-100">
                                <div class="card-header p-4 pb-0 border-0 bg-transparent">
                                    <div class="w-100 rounded-3 achivement__card d-flex align-items-center justify-content-center" style="
                                        background-image: url('{{ asset('assets/ipm.jpg') }}');
                                        background-position: center;
                                        background-size: cover;
                                        background-repeat: no-repeat;
                                        aspect-ratio: 4/2.2;
                                    ">
                                        <btn type="button"  data-toggle="modal" data-target="#volun-3" class="btn btn-dark rounded-full p-0 d-flex align-items-center justify-content-center d-none" style="width: 40px;height: 40px;">
                                            <i class="text-white" data-feather="eye" width="14" height="14"></i>
                                        </btn>
                                    </div>
                                </div>
                                <div class="card-body p-4 py-2 border-0 bg-transparent">
                                    <p class="mb-0 fw-semibold text-decoration-none text-secondary">
                                        Ikatan Pelajar Muhammadiyah
                                    </p>
                                    <small class="mb-1 text-secondary opacity-50">Community, Institution, Membership, etc</small>
                                    <div class="my-3">
                                        <small class="mb-1 text-secondary opacity-50">IPM is one of the youth organizations of Muhammadiyah</small>
                                    </div>
                                </div>
                                <div class="card-footer p-4 border-0 bg-transparent">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <i class="me-2 text-dark opacity-50" data-feather="calendar" width="14" height="14"></i>
                                        <small class="text-dark opacity-50">{{ date('Y') - 2016 }} years ago (2016 until 2023)</small>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="volun-3" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body rounded-3">
                                            <img src="{{ asset('assets/ipm.jpg') }}" alt="djarum foundation" class="w-100 rounded-3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mb-4">
                            <div class="card border-0 bg-soft-gray h-100">
                                <div class="card-header p-4 pb-0 border-0 bg-transparent">
                                    <div class="w-100 rounded-3 achivement__card d-flex align-items-center justify-content-center" style="
                                        background-image: url('{{ asset('assets/no-image.png') }}');
                                        background-position: center;
                                        background-size: cover;
                                        background-repeat: no-repeat;
                                        aspect-ratio: 4/2.2;
                                    ">
                                    </div>
                                </div>
                                <div class="card-body p-4 py-2 border-0 bg-transparent">
                                    <p class="mb-0 fw-semibold text-decoration-none text-secondary">
                                        Informatics Accreditation Team
                                    </p>
                                    <small class="mb-1 text-secondary opacity-50">Muhammadiyah University of Malang</small>
                                    <div class="my-3">
                                        <small class="mb-1 text-secondary opacity-50">Assisting lecturers and departments in preparation for department accreditation</small>
                                    </div>
                                </div>
                                <div class="card-footer p-4 border-0 bg-transparent">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <i class="me-2 text-dark opacity-50" data-feather="calendar" width="14" height="14"></i>
                                        <small class="text-dark opacity-50">{{ date('Y') - 2019 }} years ago (2019)</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mb-4">
                            <div class="card border-0 bg-soft-gray h-100">
                                <div class="card-header p-4 pb-0 border-0 bg-transparent">
                                    <div class="w-100 rounded-3 achivement__card d-flex align-items-center justify-content-center" style="
                                        background-image: url('{{ asset('assets/bazaar.jpg') }}');
                                        background-position: center;
                                        background-size: cover;
                                        background-repeat: no-repeat;
                                        aspect-ratio: 4/2.2;
                                    ">
                                        <btn type="button"  data-toggle="modal" data-target="#volun-4" class="btn btn-dark rounded-full p-0 d-flex align-items-center justify-content-center d-none" style="width: 40px;height: 40px;">
                                            <i class="text-white" data-feather="eye" width="14" height="14"></i>
                                        </btn>
                                    </div>
                                </div>
                                <div class="card-body p-4 py-2 border-0 bg-transparent">
                                    <p class="mb-0 fw-semibold text-decoration-none text-secondary">
                                        Product Bazar Informatics Department
                                    </p>
                                    <small class="mb-1 text-secondary opacity-50">Volunteer, Coordinator</small>
                                    <div class="my-3">
                                        <small class="mb-1 text-secondary opacity-50">Assisting lecturers and departments in preparation for technology product bazaar</small>
                                    </div>
                                </div>
                                <div class="card-footer p-4 border-0 bg-transparent">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <i class="me-2 text-dark opacity-50" data-feather="calendar" width="14" height="14"></i>
                                        <small class="text-dark opacity-50">{{ date('Y') - 2019 }} years ago (2019)</small>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="volun-4" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body rounded-3">
                                            <img src="{{ asset('assets/bazaar.jpg') }}" alt="djarum foundation" class="w-100 rounded-3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mb-4">
                            <div class="card border-0 bg-soft-gray h-100">
                                <div class="card-header p-4 pb-0 border-0 bg-transparent">
                                    <div class="w-100 rounded-3 achivement__card d-flex align-items-center justify-content-center" style="
                                        background-image: url('{{ asset('assets/alugada.jpg') }}');
                                        background-position: center;
                                        background-size: cover;
                                        background-repeat: no-repeat;
                                        aspect-ratio: 4/2.2;
                                    ">
                                        <btn type="button"  data-toggle="modal" data-target="#volun-4" class="btn btn-dark rounded-full p-0 d-flex align-items-center justify-content-center d-none" style="width: 40px;height: 40px;">
                                            <i class="text-white" data-feather="eye" width="14" height="14"></i>
                                        </btn>
                                    </div>
                                </div>
                                <div class="card-body p-4 py-2 border-0 bg-transparent">
                                    <p class="mb-0 fw-semibold text-decoration-none text-secondary">
                                        Alugada Team
                                    </p>
                                    <small class="mb-1 text-secondary opacity-50">Volunteer</small>
                                    <div class="my-3">
                                        <small class="mb-1 text-secondary opacity-50">Assisting lecturers and departments in preparation for department accreditation</small>
                                    </div>
                                </div>
                                <div class="card-footer p-4 border-0 bg-transparent">
                                    <div class="d-flex align-items-center justify-content-start">
                                        <i class="me-2 text-dark opacity-50" data-feather="calendar" width="14" height="14"></i>
                                        <small class="text-dark opacity-50">{{ date('Y') - 2018 }} years ago (2018)</small>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="volun-4" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body rounded-3">
                                            <img src="{{ asset('assets/alugada.jpg') }}" alt="djarum foundation" class="w-100 rounded-3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="owl-carousel my-3 mt-5" id="carousel-1">
                        <div><img src="{{ asset('assets/certificate/001.webp') }}" alt="Image 1"></div>
                        <div><img src="{{ asset('assets/certificate/002.webp') }}" alt="Image 1"></div>
                        <div><img src="{{ asset('assets/certificate/003.webp') }}" alt="Image 1"></div>
                        <div><img src="{{ asset('assets/certificate/004.webp') }}" alt="Image 1"></div>
                        <div><img src="{{ asset('assets/certificate/005.webp') }}" alt="Image 1"></div>
                        <div><img src="{{ asset('assets/certificate/006.webp') }}" alt="Image 1"></div>
                        <div><img src="{{ asset('assets/certificate/007.webp') }}" alt="Image 1"></div>
                        <div><img src="{{ asset('assets/certificate/008.webp') }}" alt="Image 1"></div>
                        <div><img src="{{ asset('assets/certificate/009.webp') }}" alt="Image 1"></div>
                        <div><img src="{{ asset('assets/certificate/010.webp') }}" alt="Image 1"></div>
                        <div><img src="{{ asset('assets/certificate/011.webp') }}" alt="Image 1"></div>
                        <div><img src="{{ asset('assets/certificate/013.webp') }}" alt="Image 1"></div>
                    </div>

                    <div class="owl-carousel my-3" id="carousel-2">
                        <div><img src="{{ asset('assets/certificate/014.webp') }}" alt="Image 1"></div>
                        <div><img src="{{ asset('assets/certificate/015.webp') }}" alt="Image 1"></div>
                        <div><img src="{{ asset('assets/certificate/016.webp') }}" alt="Image 1"></div>
                        <div><img src="{{ asset('assets/certificate/017.webp') }}" alt="Image 1"></div>
                        <div><img src="{{ asset('assets/certificate/018.webp') }}" alt="Image 1"></div>
                        <div><img src="{{ asset('assets/certificate/019.webp') }}" alt="Image 1"></div>
                        <div><img src="{{ asset('assets/certificate/020.webp') }}" alt="Image 1"></div>
                        <div><img src="{{ asset('assets/certificate/021.webp') }}" alt="Image 1"></div>
                        <div><img src="{{ asset('assets/certificate/022.webp') }}" alt="Image 1"></div>
                        <div><img src="{{ asset('assets/certificate/024.webp') }}" alt="Image 1"></div>
                        <div><img src="{{ asset('assets/certificate/025.webp') }}" alt="Image 1"></div>
                    </div>
                </div>
                {{-- <div class="py-5 bg-success text-white" id="portfolio">
                    Portfolio
                </div> --}}
                <div class="py-5" id="services">
                    <div class="row align-items-end mb-5">
                        <div class="col-12 col-md-5 d-flex justify-content-start">
                            <img class="mb-5 mb-md-0" src="https://amanahin.viproject.net/img/thumbnail-2.webp" width="100%" alt="header amanahin">
                        </div>
                        <div class="col-12 col-md-6 ps-md-5">
                            <img class="mb-4" src="https://api.viproject.net/static/uploads/image/master/company/logo-text.png" width="80px" alt="amanahin project">
                            <h4 class="text-secondary mb-3">
                                Ready to bring your brilliant ideas into extraordinary information technology solutions
                            </h4>
                            <p class="text-dark opacity-75 lh-sm mb-4">
                                With courage and innovation, combining technical expertise your vision
                            </p>
                            <a class="text-decoration-none btn bg-primary text-white mb-xxl-5 mb-md-3" target="_blank" href="https://amanahin.viproject.net/">
                                Official Website
                            </a>
                        </div>
                    </div>

                    <div class="row justify-content-start">
                        <div class="col-11 col-md-10">
                            <h5 class="text-primary text-start mb-3 mt-5">Services</h5>
                            <h2 class="text-secondary text-start mb-5">
                                "Our services are designed to be <u class="text-primary">flexible and dynamic</u> to meet your needs and provide an experience that suits your preferences"
                            </h2>
                        </div>
                    </div>
                    <div class="row align-items-stretch">
                        <div class="col-12 col-md-4 col-xxl-3 mb-4">
                            <div class="card border-0 p-2 h-100">
                                <div class="card-body bg-transparent border-0">
                                    <div class="bg-soft-dark-gray mb-4 d-flex align-items-center justify-content-center" style="width: 50px;height: 50px;border-radius: 15px">
                                        <i class="text-secondary" data-feather="shopping-cart" width="18" height="18"></i>
                                    </div>
                                    <h5 class="text-secondary mb-2">E-Commerce</h5>
                                    <small class="mb-1 text-secondary opacity-50">Presenting e-commerce web development services (online shops) packaged in a responsive and attractive manner</small>
                                </div>
                                <div class="card-footer bg-transparent border-0">
                                    <a href="https://api.whatsapp.com/send?phone=6282132521665&text=Halo%2C%20kami%20ingin%20konsultasi%20terkait%20pengembangan%20website%20e%20commerce%2C%20bisa%20diskusi%20lebih%20lanjut%3F" target="_blank" class="mt-4 text-primary text-decoration-none d-flex align-items-center">
                                        <small>Selengkapnya</small>
                                        <i class="ms-2" data-feather="arrow-right" width="12" height="12"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-xxl-3 mb-4">
                            <div class="card border-0 p-2 h-100">
                                <div class="card-body bg-transparent border-0">
                                    <div class="bg-soft-dark-gray mb-4 d-flex align-items-center justify-content-center" style="width: 50px;height: 50px;border-radius: 15px">
                                        <i class="text-secondary" data-feather="box" width="18" height="18"></i>
                                    </div>
                                    <h5 class="text-secondary mb-2">Point of Sale (POS)</h5>
                                    <small class="mb-1 text-secondary opacity-50">Offers modern cashier web development services for ease of payment and recording processes</small>
                                </div>
                                <div class="card-footer bg-transparent border-0">
                                    <a href="https://api.whatsapp.com/send?phone=6282132521665&text=Halo%2C%20kami%20ingin%20konsultasi%20terkait%20pengembangan%20website%20kasir%2C%20bisa%20diskusi%20lebih%20lanjut%3F" target="_blank" class="mt-4 text-primary text-decoration-none d-flex align-items-center">
                                        <small>Selengkapnya</small>
                                        <i class="ms-2" data-feather="arrow-right" width="12" height="12"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-xxl-3 mb-4">
                            <div class="card border-0 p-2 h-100">
                                <div class="card-body bg-transparent border-0">
                                    <div class="bg-soft-dark-gray mb-4 d-flex align-items-center justify-content-center" style="width: 50px;height: 50px;border-radius: 15px">
                                        <i class="text-secondary" data-feather="layout" width="18" height="18"></i>
                                    </div>
                                    <h5 class="text-secondary mb-2">Company Profile</h5>
                                    <small class="mb-1 text-secondary opacity-50">Collaborate to create an impressive and informative company website to strengthen the company's image and legality</small>
                                </div>
                                <div class="card-footer bg-transparent border-0">
                                    <a href="https://api.whatsapp.com/send?phone=6282132521665&text=Halo%2C%20kami%20ingin%20konsultasi%20terkait%20pengembangan%20website%20company%20profile%2C%20bisa%20diskusi%20lebih%20lanjut%3F" target="_blank" class="mt-4 text-primary text-decoration-none d-flex align-items-center">
                                        <small>Selengkapnya</small>
                                        <i class="ms-2" data-feather="arrow-right" width="12" height="12"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-xxl-3 mb-4">
                            <div class="card border-0 p-2 h-100">
                                <div class="card-body bg-transparent border-0">
                                    <div class="bg-soft-dark-gray mb-4 d-flex align-items-center justify-content-center" style="width: 50px;height: 50px;border-radius: 15px">
                                        <i class="text-secondary" data-feather="type" width="18" height="18"></i>
                                    </div>
                                    <h5 class="text-secondary mb-2">Portal Berita (CMS)</h5>
                                    <small class="mb-1 text-secondary opacity-50">Create, edit and manage your own news portal website quickly, efficiently and according to your needs</small>
                                </div>
                                <div class="card-footer bg-transparent border-0">
                                    <a href="https://api.whatsapp.com/send?phone=6282132521665&text=Halo%2C%20kami%20ingin%20konsultasi%20terkait%20pengembangan%20website%20portal%20berita%2C%20bisa%20diskusi%20lebih%20lanjut%3F" target="_blank" class="mt-4 text-primary text-decoration-none d-flex align-items-center">
                                        <small>Selengkapnya</small>
                                        <i class="ms-2" data-feather="arrow-right" width="12" height="12"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-xxl-3 mb-4">
                            <div class="card border-0 p-2 h-100">
                                <div class="card-body bg-transparent border-0">
                                    <div class="bg-soft-dark-gray mb-4 d-flex align-items-center justify-content-center" style="width: 50px;height: 50px;border-radius: 15px">
                                        <i class="text-secondary" data-feather="figma" width="18" height="18"></i>
                                    </div>
                                    <h5 class="text-secondary mb-2">UI Design</h5>
                                    <small class="mb-1 text-secondary opacity-50">Creating a stunning look to ensure you feel comfortable and connected every step of the way</small>
                                </div>
                                <div class="card-footer bg-transparent border-0">
                                    <a href="https://api.whatsapp.com/send?phone=6282132521665&text=Halo%2C%20kami%20ingin%20konsultasi%20terkait%20pembuatan%20desain%20untuk%20website%2C%20bisa%20diskusi%20lebih%20lanjut%3F" target="_blank" class="mt-4 text-primary text-decoration-none d-flex align-items-center">
                                        <small>Selengkapnya</small>
                                        <i class="ms-2" data-feather="arrow-right" width="12" height="12"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-xxl-3 mb-4">
                            <div class="card border-0 p-2 h-100 bg-dark-gray">
                                <div class="card-body bg-transparent border-0">
                                    <div class="bg-white mb-4 d-flex align-items-center justify-content-center" style="width: 50px;height: 50px;border-radius: 15px">
                                        <i class="text-secondary" data-feather="more-horizontal" width="18" height="18"></i>
                                    </div>
                                    <h5 class="text-white mb-2">Discuss with us</h5>
                                    <small class="mb-1 text-white opacity-75">Consulting services and informative technology creation according to client requirements</small>
                                </div>
                                <div class="card-footer bg-transparent border-0">
                                    <a href="https://api.whatsapp.com/send?phone=6282132521665&text=Halo%2C%20kami%20ingin%20konsultasi%20terkait%20pengembangan%20website%2C%20bisa%20diskusi%20lebih%20lanjut%3F" target="_blank" class="mt-4 text-white text-decoration-none d-flex align-items-center">
                                        <small>Selengkapnya</small>
                                        <i class="ms-2" data-feather="arrow-right" width="12" height="12"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-5 min-vh-100" id="contact">
                    <div class="row align-items-center mb-5">
                        <div class="col-12 col-md-4 mb-4">
                            <h2 class="text-secondary mb-md-5 mb-4 fw-bold">
                                Contact & <br> Address Here
                            </h2>
                            <div class="row">
                                <div class="col-12 mb-2 d-flex align-items-center">
                                    <a href="https://wa.me/6282132521665" target="_blank" class="me-2 bg-soft-dark-gray d-flex align-items-center justify-content-center rounded-full badge__contact" style="aspect-ratio: 1/1 !important; width: 30px">
                                        <i data-feather="phone" width="12" height="12"></i>
                                    </a>
                                    <span class="opacity-50">082132521665 WA</span>
                                </div>
                                <div class="col-12 mb-2 d-flex align-items-center">
                                    <a href="mailto:nafimaulahakim123@gmail.com" target="_blank" class="me-2 bg-soft-dark-gray d-flex align-items-center justify-content-center rounded-full badge__contact" style="aspect-ratio: 1/1 !important; width: 30px">
                                        <i data-feather="mail" width="12" height="12"></i>
                                    </a>
                                    <span class="opacity-50">nafimaulahakim123@gmail.com</span>
                                </div>
                                <div class="col-12 mb-2 d-flex align-items-center">
                                    <a href="https://www.instagram.com/n_vi25" target="_blank" class="me-2 bg-soft-dark-gray d-flex align-items-center justify-content-center rounded-full badge__contact" style="aspect-ratio: 1/1 !important; width: 30px">
                                        <i data-feather="instagram" width="12" height="12"></i>
                                    </a>
                                    <span class="opacity-50">@n_vi25</span>
                                </div>
                                <div class="col-12 mb-2 d-flex align-items-center">
                                    <a href="https://www.linkedin.com/in/muhammad-nafi-maula-hakim-8583b3139/" target="_blank" class="me-2 bg-soft-dark-gray d-flex align-items-center justify-content-center rounded-full badge__contact" style="aspect-ratio: 1/1 !important; width: 30px">
                                        <i data-feather="linkedin" width="12" height="12"></i>
                                    </a>
                                    <span class="opacity-50">Muhammad Nafi Maula Hakim</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-8">
                            <iframe class="rounded-3" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3954.829715635841!2d112.11122557590149!3d-7.593504792421216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zN8KwMzUnMzYuNiJTIDExMsKwMDYnNDkuNyJF!5e0!3m2!1sid!2sid!4v1714895318229!5m2!1sid!2sid" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="row align-items-stretch">
                        <div class="card border-0 my-5" style="background: #ecf2ff4f">
                            <div class="card-body p-0 bg-transparent">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-7 p-5">
                                        <h1 class="text-secondary mb-4">Open For <br class="d-md-none d-xxl-block">Collaboration</h1>
                                        <p class="opacity-75">I am very enthusiastic about joining collaborations for projects from certain agencies or non-paid projects. With my experience and passion, I am confident that I can be a valuable asset for the team. I am open to being invited in interesting projects and ready to contribute as best as I can.</p>

                                        <div class="d-md-flex d-block align-items-center mb-4 mt-3">
                                            <div class="mb-2 d-flex align-items-center me-4">
                                                <a href="https://dribbble.com/n_vi25" target="_blank" class="me-2 bg-soft-dark-gray d-flex align-items-center justify-content-center rounded-full badge__contact" style="aspect-ratio: 1/1 !important; width: 30px">
                                                    <i data-feather="dribbble" width="12" height="12"></i>
                                                </a>
                                                <span class="opacity-50">n_vi25</span>
                                            </div>
                                            <div class="mb-2 d-flex align-items-center me-4">
                                                <a href="https://github.com/navy-25" target="_blank" class="me-2 bg-soft-dark-gray d-flex align-items-center justify-content-center rounded-full badge__contact" style="aspect-ratio: 1/1 !important; width: 30px">
                                                    <i data-feather="github" width="12" height="12"></i>
                                                </a>
                                                <span class="opacity-50">navy-25</span>
                                            </div>
                                            <div class="mb-2 d-flex align-items-center">
                                                <a href="https://gitlab.com/navy-25" target="_blank" class="me-2 bg-soft-dark-gray d-flex align-items-center justify-content-center rounded-full badge__contact" style="aspect-ratio: 1/1 !important; width: 30px">
                                                    <i data-feather="gitlab" width="12" height="12"></i>
                                                </a>
                                                <span class="opacity-50">navy-25</span>
                                            </div>
                                        </div>
                                        <a class="text-decoration-none btn bg-primary text-white d-flex align-items-center" target="_blank" href="https://wa.me/6282132521665" style="width: fit-content">
                                            <i data-feather="send" class="me-2" width="16" height="16"></i>
                                            <span>Send me invitation</span>
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-5 my-auto">
                                        <img src="{{ asset('assets/collaboration.png') }}" alt="collaboration" class="w-100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- END CONTENT STICKY --}}

    <footer class="bg-dark"
    style="
        background-image: url('{{ asset('assets/bg-monocrome.png') }}');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    "
    id="footer">
        <div class="container text-white p-5">
            <div class="row">
                <div class="col-12 col-md-5 mb-3">
                    <img src="{{ asset('assets/profile.png') }}" style="width: 50px;height: 50px;aspect-ratio: 1/1;" class="rounded-3 mb-4">
                    <h5 class="text-white">My Curriculum Vitae</h5>
                    <small class="text-white opacity-50">
                        Find brief information about my experience and skills here. <br class="d-none d-md-block"> I look forward to contributing to your project!
                    </small>
                    <ul class="text-white opacity-75 fw-normal mb-3 mt-4 pt-2 list-unstyled">
                        <li class="mb-2">
                            <a href="https://wa.me/6282132521665" class="text-decoration-none text-white">
                                <i data-feather="phone" class="me-2" width="14" height="14"></i>
                                <small>082132521665</small>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="mailto:nafimaulahakim123@gmail.com" class="text-decoration-none text-white">
                                <i data-feather="mail" class="me-2" width="14" height="14"></i>
                                <small>nafimaulahakim123@gmail.com</small>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="https://maps.app.goo.gl/n23iCACL3oKbxdRc8" class="text-decoration-none text-white">
                                <i data-feather="map-pin" class="me-2" width="14" height="14"></i>
                                <small>Jombang, East Java</small>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3 ms-md-auto">
                    <small class="text-white opacity-50">
                        Find me
                    </small>
                    <ul class="text-white opacity-75 fw-normal mb-3 mt-4 list-unstyled">
                        <li class="mb-2">
                            <a href="/" class="text-decoration-none text-white">
                                <small>Home</small>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="/#about-me" class="text-decoration-none text-white">
                                <small>About Me</small>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="/#education" class="text-decoration-none text-white">
                                <small>Education</small>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="/#skills" class="text-decoration-none text-white">
                                <small>Skills</small>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="/#contact" class="text-decoration-none text-white">
                                <small>Contact</small>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <small class="text-white opacity-50">
                        My Portfolio
                    </small>
                    <ul class="text-white opacity-75 fw-normal mb-3 mt-4 list-unstyled">
                        <li class="mb-2">
                            <a href="/#work-experiences" class="text-decoration-none text-white">
                                <small>Work Experiences</small>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="/#achievements" class="text-decoration-none text-white">
                                <small>Achievements</small>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="/#volunteers" class="text-decoration-none text-white">
                                <small>Volunteers</small>
                            </a>
                        </li>
                        {{-- <li class="mb-2">
                            <a href="/#portfolio" class="text-decoration-none text-white">
                                <small>Portfolio</small>
                            </a>
                        </li> --}}
                        <li class="mb-2">
                            <a href="/#services" class="text-decoration-none text-white">
                                <small>Services</small>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 pt-5">
                    © 2024 <a class="text-decoration-none text-primary mx-1 fw-semibold" target="_blank" href="https://amanahin.viproject.net/">Amanahin Project</a> All rights reserved
                </div>
            </div>
        </div>
    </footer>

    {{-- END CONTENT --}}


    {{-- SECTION FOOTER --}}
    {{-- @include('includes.footer') --}}
    {{-- END SECTION FOOTER --}}

    {{-- SCRIPT --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{ asset('app-assets-b5/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('app-assets-b5/js/bootstrap.tab.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    @include('includes.script')
    @yield('script')
    {{-- END SCRIPT --}}
</body>

</html>
