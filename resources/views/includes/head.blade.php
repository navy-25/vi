@php
    $page['author']             = "Muhammad Nafi Maula Hakim";
    $page['keywords']           = "amanahin project, web developer, graphic designer, muhammad nafi maula hakim, nafi, curiculum vitae, cv, navi, ui, designer";
    $page['site_ver']           = "z2qT-oHcq7pVEXxmNTAbB19CSGlj4DLNk5dnrohA0Fg";
    $page['description']        = "Hello.. my name is Muhammad Nafi' Maula Hakim, but you can call me nafi. As someone who has experience in web development, user interface (UI) design for 4 years. combines technical expertise and creativity to create engaging and functional digital experiences. With in-depth knowledge in web technology and design aesthetics, Able to lead projects that are focused on effective solutions and meeting client needs. From initial concept to final implementation, I am committed to delivering exceptional results and strengthening brand image through innovative and minimalist design.";
    $page['favicon']            = asset('assets/profile.webp');
@endphp
<title>{{ $page['title'] }}</title>
<link rel="icon" href="{{ $page['favicon'] }}" type="image/icon type">

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<meta name="viewport"                   content="width=device-width">
<meta name="google-site-verification"   content="{{ $page['site_ver'] }}">
<meta name="keywords"                   content="{{ $page['keywords'] }}">
<meta name="author"                     content="{{ $page['author'] }}">
<meta name="description"                content="{{ $page['description'] }}">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Outfit:wght@100..900&display=swap">
<link rel="stylesheet" href="{{ asset('app-assets-b5/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>

<script src="{{ asset('app-assets-b5/js/feather.min.js') }}"></script>
