<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('img/briefcase.png') }}"  type="image/icon type">
    <link href="{{ asset('app-assets-b5/css/bootstrap.min.css') }}" rel="stylesheet" crossorigin="anonymous">
    <link href="{{ asset('assets/assets.css') }}" rel="stylesheet" crossorigin="navy">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>About me</title>
</head>
<body>
    <div class="vh-100 vw-100 d-flex bg-dark">
        <div class="m-auto w-75 d-flex">
            <div class="row m-0 p-0 w-100">
                <div class="col-12 col-md-8 col-lg-8 order-1 order-md-0 order-lg-0">
                    <div class="text-white my-auto p-2 text-center text-md-start text-lg-start">
                        <small class="text-secondary mb-1 text-white "><span class="bg-warning p-1 px-2 me-2">hola!</span> my name is</small>
                        <h1 class="py-0 my-0 pt-2 text-warning fw-bold">Muhammad Nafi</h1>
                        <h3 class="py-0 my-0 text-white">Maula Hakim</h3>
                        <br>
                        <small class="text-secondary mb-1 text-white">i'am a...</small>
                        <div class="row m-0 p-0 mt-2 mx-auto ms-md-0 ms-lg-0" style="max-width: 250px !important">
                            @php
                                $passions = ['Graphic Designer','Web Developer'];
                                $passions_icon = ['graphic-designer-black.png','coding-black.png'];
                            @endphp
                            @foreach ($passions as $index => $val)
                                <div class="col-12 ps-0 h-100 mb-3 scale scale-1">
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
                            ];
                            $link = [
                                'https://www.linkedin.com/in/muhammad-nafi-maula-hakim-8583b3139',
                                'https://www.instagram.com/n_vi25',
                                'https://wa.me/6282132521665',
                            ];
                        @endphp
                        <div class="row m-0 p-0 mt-2 w-75 mx-auto ms-md-0 ms-lg-0">
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
                    <img src="{{ asset('img/my-photo.png') }}" class="w-100 mb-5 my-auto scale scale-1" alt="my-photo">
                </div>
            </div>
        </div>
    </div>

    {{-- SCRIPT --}}
    <script src="{{ asset('app-assets-b5/js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
    {{-- END SCRIPT --}}
</body>
</html>
