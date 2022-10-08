<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="google-site-verification" content="z2qT-oHcq7pVEXxmNTAbB19CSGlj4DLNk5dnrohA0Fg">
    <meta name="keywords" content="viproject, web developer, graphic designer, Muhammad Nafi Maula hakim, Nafi, vidisen, curiculum vitae,cv">
    <meta name="author" content="Muhammad Nafi">
    <meta name="description" content=" Hello, my name is Muhammad Nafi' Maula Hakim< but you can call me nafi. Born in Jombang, on January 25, 1999. Now I live in the city of Surabaya, East Java. I am a hardworking person and willing to learn new things. Thank you for visiting my web site. Have a nice day. By the way, I am very interested in the topics of graphic design, programmers, data analysts, and creative content.">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="icon" href="{{ asset('img/my-photo.png') }}"  type="image/icon type">
    <link href="{{ asset('app-assets-b5/css/bootstrap.min.css') }}" rel="stylesheet" crossorigin="anonymous">
    <script src="https://unpkg.com/feather-icons"></script>
    <title>Welcome to Nafi's CV</title>

    @include('includes.css')
</head>
<body>
    {{-- SECTION 1 --}}
    <div class="container-fluid m-0 p-0 bg-dark " id="header">
        <nav class="container px-3 px-md-5 px-lg-5 py-4">
            <div class="row text-white">
                <div class="col-12 d-flex">
                    <div class="ms-auto my-auto">
                        <button id="lang_en" class="btn-circle scale scale-2 btn-active me-2" onclick="active_lang('en')">en</button>
                        <button id="lang_id" class="btn-circle scale scale-2" onclick="active_lang('id')">id</button>
                    </div>
                </div>
            </div>
        </nav>
        <div id="section1" class="d-flex p-5 p-md-2 p-lg-2 m-0">
            <div class="m-auto d-flex container px-md-5 px-lg-5">
                <div class="row m-0 p-0 w-100">
                    <div class="col-12 col-md-8 col-lg-8 order-1 order-md-0 order-lg-0">
                        <div class="text-white my-auto p-2 text-center text-md-start text-lg-start">
                            <small class="text-secondary mb-1 text-white">
                                <span class="bg-warning text-dark p-1 px-2 me-2">hola!</span>
                                <span id="name">my name is</span>
                            </small>
                            <h1 class="py-0 my-0 pt-2 text-warning fw-bold">Muhammad Nafi</h1>
                            <h3 class="py-0 my-0 text-white">Maula Hakim</h3>
                            <br>
                            <div class="row m-0 d-flex">
                                <div class="text-center text-md-start text-lg-start px-0">
                                    <button id="man" class="btn-circle scale scale-2 me-2">M</button>
                                    @php
                                        $old = date('Y') - 1999;
                                    @endphp
                                    <button class="btn-circle scale scale-2 me-2">{{ $old }}</button>
                                    <button class="btn-circle scale scale-2 me-2">170</button>
                                    <button class="btn-rounded scale scale-2 me-2">Jombang</button>
                                </div>
                            </div>
                            <br>
                            <small id="iam" class="text-secondary mb-1 text-white">
                                i'am a...
                            </small>
                            <div class="row m-0 p-0 mt-3 mx-auto ms-md-0 ms-lg-0" style="max-width: 450px !important">
                                @php
                                    $passions_en = ['Graphic Designer','Web Developer'];
                                    $passions_id = ['Desainer Grafis','Pengembang Web'];
                                    $passions_icon = ['graphic-designer-black.png','coding-black.png'];
                                @endphp
                                @foreach ($passions_icon as $index => $val)
                                    <div class="col-12 col-md-12 col-lg-6 px-0 h-100 mb-3 scale scale-1 pe-0 pe-md-3 pe-lg-3">
                                        <div class="card bg-warning">
                                            <div class="card-body p-1 d-flex h-100 w-auto">
                                                <div class="my-auto d-flex p-2 text-dark">
                                                    <img src="{{ asset('img/').'/'.$val }}"
                                                        class="me-2" width="30" height="30" alt="image-{{ str_replace(' ','-',strtolower($passions_en[$index])) }}">
                                                    <p id="passions_{{ $index }}" class="m-0 p-0 fs-6 m-1">{{ $passions_en[$index] }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <br>
                            <small id="contact" class="text-secondary mb-1 text-white">
                                contact
                            </small>
                            @php
                                $contact_icon = [
                                    'linkedin-yellow.png',
                                    'instagram-yellow.png',
                                    'whatsapp-yellow.png',
                                    'dribble-yellow.png',
                                    'placeholder-yellow.png',
                                ];
                                $link = [
                                    'https://www.linkedin.com/in/muhammad-nafi-maula-hakim-8583b3139',
                                    'https://www.instagram.com/n_vi25',
                                    'https://wa.me/6282132521665',
                                    'https://dribbble.com/n_vi25',
                                    'https://maps.app.goo.gl/LGLgJFVK8iu1RgJy9'
                                ];
                                $label = [
                                    'Linkedin',
                                    'Instagram',
                                    'Whatsapp',
                                    'Dribble',
                                    'Home'
                                ]
                            @endphp
                            <div class="row m-0 p-0 mt-3 w-75 mx-auto ms-md-0 ms-lg-0">
                                @foreach ($contact_icon as $index => $icon_name)
                                    <div class="col-3 col-md-auto col-lg-auto ps-0 h-100 mb-1 mx-auto mx-md-0 mx-lg-0">
                                        <a href="{{ $link[$index] }}" target="_blank" title="{{ $label[$index] }}">
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
    </div>
    {{-- END SECTION 1 --}}
    {{-- SECTION 2 --}}
    <div id="section2" class="w-100 d-flex bg-light p-5 p-md-2 p-lg-2 mx-0">
        <div class="m-auto d-flex container px-md-5 px-lg-5">
            <div class="row mx-0" id="about_me">
                <div class="col-12 col-md-8 col-lg-8">
                    <div id="coma2" class="py-5 p-md-4 p-lg-4">
                        <p class="p-0 pe-md-4 pe-lg-5">
                            Hello, my name is <b>Muhammad Nafi' Maula Hakim</b> but you can call me nafi. Born in Jombang, on January 25, 1999. Now I live in the city of Surabaya, East Java. I am a hardworking person and willing to learn new things.<br><br>
                            Thank you for visiting my web site. Have a nice day. By the way, I am very interested in the topics of <b>graphic design, programmers, data analysts, and creative content</b>.
                            <br><br>
                            Best Regards
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 d-none d-md-block d-lg-block">
                    <img class="w-100 scale scale-1" src="{{ asset('img/coma.png') }}" alt="coma">
                </div>
            </div>
        </div>
    </div>
    {{-- END SECTION 2 --}}
    {{-- SECTION 3 --}}
    <div id="section3" class="w-100 d-flex bg-light p-5 p-md-2 p-lg-2 mx-0">
        <div class="m-auto container px-md-5 px-lg-5">
            <center>
                <h3 id="edu_title">Education History</h3>
                <hr style="width: 100px" size="5" class="my-5">
                <div class="row">
                    @php
                        $school_name_en = ['Ar Roudlotul Ilmiah','SMK Muhammadiyah 1','Muhammadiyah Malang'];
                        $school_name_id = ['Ar Roudlotul Ilmiah','SMK Muhammadiyah 1','Muhammadiyah Malang'];
                        $vational_en = ['none','Multimedia','Informatics Engineering'];
                        $vational_id = ['none','Multimedia','Teknik Informatika'];
                        $school_level_en = ['Madrasah Tsanawiyah (2011-2014)','Vocational Schools (2014-2017)','University (2017-2021)'];
                        $school_level_id = ['Madrasah Tsanawiyah (2011-2014)','Sekolah Kejurusan (2014-2017)','Universitas (2017-2021)'];
                        $school_icon = ['quran-black.png','multimedia-black.png','coding-black.png'];
                        $school_place_en= ['Nganjuk, East Java','Nganjuk, East Java','Malang, East Java'];
                        $school_place_id= ['Nganjuk, Jawa Timur','Nganjuk, Jawa Timur','Malang, Jawa Timur'];
                    @endphp
                    @foreach ($school_icon as $index => $val)
                        <div class="col-12 col-md-4 col-lg-4 mb-3">
                            <div class="bg-warning p-4 mb-3" style="border-radius: 100%;width: 100px;height: 100px;">
                                <img src="{{ asset('img/').'/'.$val }}" class="w-100" alt="{{ $school_level_en[$index] }}">
                            </div>
                            <small  id="sch_level_{{ $index }}" class="badge bg-secondary mb-1">{{ $school_level_en[$index] }}</small> <br>
                            <h4 id="sch_name_{{ $index }}" class="my-0">{{ $school_name_en[$index] }}</h4>
                            <small  id="sch_votional_{{ $index }}" class="text-gray">{{ $vational_en[$index] }}</small> <br>
                            <small  id="sch_place_{{ $index }}" class="text-gray">{{ $school_place_en[$index] }}</small>
                        </div>
                    @endforeach
                </div>
            </center>
            {{-- <div class="row mx-0" ">
                <div class="col-12">
                    <p>Education</p>
                </div>
            </div> --}}
        </div>
    </div>
    {{-- END SECTION 3 --}}


    {{-- SCRIPT --}}
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="{{ asset('app-assets-b5/js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
    <script>
        document.addEventListener("contextmenu", function(e){
            e.preventDefault();
        },false);
        feather.replace()

        function active_lang(type){
            if(type == 'id'){
                $('#lang_id').addClass('btn-active')
                $('#lang_en').removeClass('btn-active')

                $('#name').text('nama saya adalah')
                $('#iam').text('saya seorang...')
                $('#contact').text('narahubung')
                $('#man').text('L')

                var passions = '{{ implode("|",$passions_id) }}'.split('|')
                Object.entries(passions).forEach(([key, value]) => {
                    $('#passions_'+key).text(value)
                })

                $('#edu_title').text('Riwayat Pendidikan')

                var sch_name = '{{ implode("|",$school_name_id) }}'.split('|')
                Object.entries(sch_name).forEach(([key, value]) => {
                    $('#sch_name_'+key).text(value)
                })
                var sch_level = '{{ implode("|",$school_level_id) }}'.split('|')
                Object.entries(sch_level).forEach(([key, value]) => {
                    $('#sch_level_'+key).text(value)
                })
                var sch_votional = '{{ implode("|",$vational_id) }}'.split('|')
                Object.entries(sch_votional).forEach(([key, value]) => {
                    $('#sch_votional_'+key).text(value)
                })
                var sch_place = '{{ implode("|",$school_place_id) }}'.split('|')
                Object.entries(sch_place).forEach(([key, value]) => {
                    $('#sch_place_'+key).text(value)
                })
                $('#about_me').html(`
                    <div class="col-12 col-md-8 col-lg-8">
                        <div id="coma2" class="py-5 p-md-4 p-lg-4">
                            <p class="p-0 pe-md-4 pe-lg-5">
                                Halo, nama saya <b>Muhammad Nafi' Maula Hakim</b> tapi kamu bisa memanggil saya nafi. Lahir di Jombang, pada 25 Januari 1999. Sekarang saya tinggal di kota Surabaya, Jawa Timur. Saya adalah orang yang pekerja keras dan mau belajar hal-hal baru.<br><br>
                                Terima kasih telah mengunjungi situs web saya. Semoga hari Anda menyenangkan. Ngomong-ngomong, saya sangat tertarik dengan topik <b>desain grafis, programmer, analis data, dan konten kreatif</b>.
                                <br><br>
                                Salam hormat
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-4 d-none d-md-block d-lg-block">
                        <img class="w-100 scale scale-1" src="{{ asset('img/coma.png') }}" alt="coma">
                    </div>
                `)
            }else{
                $('#lang_en').addClass('btn-active')
                $('#lang_id').removeClass('btn-active')

                $('#name').text('my name is')
                $('#iam').text("i'am a...")
                $('#contact').text("contact")
                $('#man').text('M')

                var passions = '{{ implode("|",$passions_en) }}'.split('|')
                Object.entries(passions).forEach(([key, value]) => {
                    $('#passions_'+key).text(value)
                })
                $('#edu_title').text('Education History')

                var sch_name = '{{ implode("|",$school_name_en) }}'.split('|')
                Object.entries(sch_name).forEach(([key, value]) => {
                    $('#sch_name_'+key).text(value)
                })
                var sch_level = '{{ implode("|",$school_level_en) }}'.split('|')
                Object.entries(sch_level).forEach(([key, value]) => {
                    $('#sch_level_'+key).text(value)
                })
                var sch_votional = '{{ implode("|",$vational_en) }}'.split('|')
                Object.entries(sch_votional).forEach(([key, value]) => {
                    $('#sch_votional_'+key).text(value)
                })
                var sch_place = '{{ implode("|",$school_place_en) }}'.split('|')
                Object.entries(sch_place).forEach(([key, value]) => {
                    $('#sch_place_'+key).text(value)
                })

                $('#about_me').html(`
                    <div class="col-12 col-md-8 col-lg-8">
                        <div id="coma2" class="py-5 p-md-4 p-lg-4">
                            <p class="p-0 pe-md-4 pe-lg-5">
                                Hello, my name is <b>Muhammad Nafi' Maula Hakim</b> but you can call me nafi. Born in Jombang, on January 25, 1999. Now I live in the city of Surabaya, East Java. I am a hardworking person and willing to learn new things.<br><br>
                                Thank you for visiting my web site. Have a nice day. By the way, I am very interested in the topics of <b>graphic design, programmers, data analysts, and creative content</b>.
                                <br><br>
                                Best Regards
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-4 d-none d-md-block d-lg-block">
                        <img class="w-100 scale scale-1" src="{{ asset('img/coma.png') }}" alt="coma">
                    </div>
                `)
            }
        }
    </script>
    {{-- END SCRIPT --}}
</body>
</html>
