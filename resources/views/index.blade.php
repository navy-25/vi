<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="google-site-verification" content="z2qT-oHcq7pVEXxmNTAbB19CSGlj4DLNk5dnrohA0Fg">
    <meta name="keywords" content="viproject, web developer, graphic designer, Muhammad Nafi Maula hakim, Nafi, vidisen">
    <meta name="author" content="Muhammad Nafi">
    <meta name="description" content="Hello, my name is Muhammad Nafi' Maula Hakim. Thank you for visiting my website. If you are interested in my skills, you can get in touch via personal message. Have a nice day. By the way, I'm very interested in programming and graphic design.">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('img/my-photo.png') }}"  type="image/icon type">
    <link href="{{ asset('app-assets-b5/css/bootstrap.min.css') }}" rel="stylesheet" crossorigin="anonymous">
    <link href="{{ asset('assets/assets.css') }}" rel="stylesheet" crossorigin="navy">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Welcome to Nafi's Portofolio</title>
</head>
<body>
    {{-- SECTION 1 --}}
    <div id="section1" class="vh-100 w-100 d-flex bg-dark p-5 p-md-2 p-lg-2 mx-0">
        <div class="m-auto d-flex container px-md-5 px-lg-5">
            <div class="row m-0 p-0 w-100">
                <div class="col-12 col-md-8 col-lg-8 order-1 order-md-0 order-lg-0">
                    <div class="text-white my-auto p-2 text-center text-md-start text-lg-start">
                        <small class="text-secondary mb-1 text-white "><span class="bg-warning text-dark p-1 px-2 me-2">hola!</span> my name is</small>
                        <h1 class="py-0 my-0 pt-2 text-warning fw-bold">Muhammad Nafi</h1>
                        <h3 class="py-0 my-0 text-white">Maula Hakim</h3>
                        <br>
                        <small class="text-secondary mb-1 text-white">i'am a...</small>
                        <div class="row m-0 p-0 mt-3 mx-auto ms-md-0 ms-lg-0" style="max-width: 450px !important">
                            @php
                                $passions = ['Graphic Designer','Web Developer'];
                                $passions_icon = ['graphic-designer-black.png','coding-black.png'];
                            @endphp
                            @foreach ($passions as $index => $val)
                                <div class="col-12 col-md-12 col-lg-6 px-0 h-100 mb-3 scale scale-1 pe-0 pe-md-3 pe-lg-3">
                                    <div class="card bg-warning">
                                        <div class="card-body p-1 d-flex h-100 w-auto">
                                            <div class="my-auto d-flex p-2 text-dark">
                                                <img src="{{ asset('img/').'/'.$passions_icon[$index] }}"
                                                    class="me-2" width="30" height="30" alt="image-{{ str_replace(' ','-',strtolower($val)) }}">
                                                <p class="m-0 p-0 fs-6 m-1">{{ $val }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <br>
                        <small class="text-secondary mb-1 text-white">contact me...</small>
                        @php
                            $contact_icon = [
                                'linkedin-yellow.png',
                                'instagram-yellow.png',
                                'whatsapp-yellow.png',
                                'dribble-yellow.png',
                            ];
                            $link = [
                                'https://www.linkedin.com/in/muhammad-nafi-maula-hakim-8583b3139',
                                'https://www.instagram.com/n_vi25',
                                'https://wa.me/6282132521665',
                                'https://dribbble.com/n_vi25',
                            ];
                        @endphp
                        <div class="row m-0 p-0 mt-3 w-75 mx-auto ms-md-0 ms-lg-0">
                            @foreach ($contact_icon as $index => $icon_name)
                                <div class="col-3 col-md-auto col-lg-auto ps-0 h-100 mb-1 mx-auto mx-md-0 mx-lg-0">
                                    <a href="{{ $link[$index] }}" target="_blank">
                                        <img src="{{ asset('img/').'/'.$icon_name }}" class="me-1 scale scale-2" width="30" height="30" alt="image-{{ str_replace(' ','-',strtolower($icon_name)) }}">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 order-0 order-md-1 order-lg-1 d-flex">
                    <img src="{{ asset('img/my-photo.png') }}" class="w-75 mb-5 my-md-auto my-lg-auto my-auto scale scale-1 mx-auto" alt="my-photo">
                </div>
            </div>
        </div>
    </div>
    {{-- END SECTION 1 --}}
    {{-- SECTION 2 --}}
    <div id="section2" class="w-100 d-flex bg-light p-5 p-md-2 p-lg-2 mx-0"
        style="
            background-image: url({{ asset('img/my-photo-1.png') }});
            background-repeat: no-repeat;
            background-position:right bottom;
        ">
        <div class="m-auto d-flex container px-md-5 px-lg-5">
            <div class="row mx-0">
                <div class="col-12 col-md-8 col-lg-8">
                    <div class="py-5 p-md-4 p-lg-4"
                        style="
                            background-image: url({{ asset('img/coma-2.png') }});
                            background-repeat: no-repeat;
                            background-position:left top;
                            background-size: 20%;
                        ">
                        <p class="p-0 pe-md-4 pe-lg-5">
                            Hello, my name is <b>Muhammad Nafi' Maula hakim</b> but you can call me nafi. I was the first of 4 children. I'm a typical hardworking person, willing to learn new things, and feel challenged if I get a project that's a little complicated. <br><br>
                            Thank you for visiting my website. If you are interested in my skills, you can get in touch via personal message. Have a nice day. By the way, I'm very interested in <b>graphic design, programmers, data analysts, and creative content</b>.
                        </p>
                        <hr style="width: 30%" size="8" class="my-5">
                        <p>
                            Best Regards
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 d-none d-md-block d-lg-block">
                    <img class="w-100" src="{{ asset('img/coma.png') }}" alt="coma">
                </div>
            </div>
        </div>
    </div>
    {{-- END SECTION 2 --}}

    {{-- SCRIPT --}}
    <script src="{{ asset('app-assets-b5/js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
    <script>
        document.addEventListener("contextmenu", function(e){
            e.preventDefault();
        },false);
    </script>
    {{-- END SCRIPT --}}
</body>
</html>
