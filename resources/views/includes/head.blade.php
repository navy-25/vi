@php
    $page['author']             = "Muhammad Nafi";
    $page['keywords']           = "viproject, web developer, graphic designer, Muhammad Nafi Maula hakim, Nafi, vidisen, curiculum vitae,cv";
    $page['site_ver']           = "z2qT-oHcq7pVEXxmNTAbB19CSGlj4DLNk5dnrohA0Fg";
    $page['description']        = "Hello, my name is Muhammad Nafi' Maula Hakim< but you can call me nafi. Born in Jombang, on January 25, 1999. Now I live in the city of Surabaya, East Java. I am a hardworking person and willing to learn new things. Thank you for visiting my web site. Have a nice day. By the way, I am very interested in the topics of graphic design, programmers, data analysts, and creative content.";
    $page['favicon']            = asset('img/my-photo.png');
@endphp
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<meta name="google-site-verification" content="{{ $page['site_ver'] }}">
<meta name="keywords" content="{{ $page['keywords'] }}">
<meta name="author" content="{{ $page['author'] }}">
<meta name="description" content="$page['description']">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<link rel="icon" href="{{ $page['favicon'] }}"  type="image/icon type">
<link href="{{ asset('app-assets-b5/css/bootstrap.min.css') }}" rel="stylesheet" crossorigin="anonymous">
<script src="https://unpkg.com/feather-icons"></script>
<title>{{ $page['title'] }}</title>
