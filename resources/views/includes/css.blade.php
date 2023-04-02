<style>
    html,
    body,
    p,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: 'Rubik', sans-serif !important;
    }

    .text-gray {
        color: #8d8d8d;
    }

    .scale {
        transition: all 0.3s ease-out;
    }

    .scale-1:hover {
        transform: scale(1.1)
    }

    .scale-2:hover {
        transform: scale(1.2)
    }

    .scale-3:hover {
        transform: scale(1.3)
    }

    nav {
        width: 100%;
        height: 6vh;
    }

    #header {
        background-image: url({{ asset('img/my-photo-2.png') }});
        background-repeat: no-repeat;
        background-position: left bottom;
    }

    #section1 {
        width: 100%;
        height: 94vh;
    }

    #section2 {
        background-image: url({{ asset('img/my-photo-1.png') }});
        background-repeat: no-repeat;
        background-position: right bottom;
        height: 75vh;
    }

    #section3 {
        width: 100%;
        height: 75vh;
    }

    #section4 {
        width: 100%;
        height: auto;
        /* background-image: url({{ asset('img/bg-work.png') }}) !important;
        background-repeat: no-repeat;
        background-size: cover !important; */
    }

    #section5 {
        width: 100%;
        height: 100%;
        background-image: url({{ asset('img/award/bg_image.png') }}) !important;
        background-repeat: no-repeat;
        background-size: cover !important;
    }

    #section6 {
        width: 100%;
        height: 100vh;
    }

    #section7 {
        width: 100%;
        height: 100vh;
    }

    #header-resources{
        height: 50vh;
    }

    #footer {
        width: 100%;
        align-items: center !important;
    }

    #coma2 {
        background-image: url({{ asset('img/coma-2.png') }});
        background-repeat: no-repeat;
        background-position: left top;
        background-size: 20%;
    }

    .btn-active {
        color: black !important;
        background: white !important;
    }

    .btn-circle {
        border-radius: 100px;
        padding: 3px;
        font-size: 10px;
        width: 30px;
        height: 30px;
    }

    .btn-rounded {
        border-radius: 100px;
        padding: 3px;
        font-size: 10px;
        height: 30px;
        padding: 0px 15px
    }

    .lighten {
        color: white;
        background: rgba(255, 255, 255, 0);
        border: 1px solid white;
    }

    .darken {
        color: rgb(17, 17, 17);
        background: rgba(255, 255, 255, 0);
        border: 1px solid rgb(17, 17, 17);
    }

    .lighten:hover {
        background: rgba(255, 255, 255, 0.199);
    }

    .darken:hover {
        background: rgba(39, 39, 39, 0.068);
    }

    .card-custom {
        border-radius: 40px;
    }

    @media only screen and (max-width: 600px) {
        #header-resources{
            height: 65vh;
        }
        #header {
            background-position: center bottom;
        }

        #footer {
            height: 20vh;
            align-items: start !important;
        }

        #section2 {
            background-position: center bottom !important;
            height: 100vh !important;
        }

        #section3 {
            height: auto;
        }

        #section5 {
            height: 94vh;
            padding-left: 10px !important;
            padding-right: 10px !important;
        }

        /* NAV BOTTOM */
        .nav-bottom {
            width: 100% !important;
            height: 8vh !important;
            position: fixed !important;
            bottom: 20px !important;
            padding-left: 20px !important;
            padding-right: 20px !important;
            display: block !important;
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

        .menu-icon:hover {
            transform: scale(1.2) !important;
            padding: 15px !important;
            background: #ffc107 !important;
            border-radius: 100% !important;
        }

        .menu-btn .active {
            transform: scale(1.2) !important;
            padding: 15px !important;
            background: #ffc107 !important;
            border-radius: 100% !important;
        }

        /* END NAV BOTTOM */
        body {
            /* padding-bottom: 8vh !important; */
        }

        .img-carousel {
            aspect-ratio: 4/2 !important;
        }

        .carousel-caption {
            padding-top: 10px !important;
            vertical-align: top !important;
            bottom: auto !important;
            left: 2% !important;
            right: 2% !important;
        }

        .carousel-caption p {
            color: rgb(51, 51, 51) !important;
        }

        .carousel-caption h5 {
            background: #ffc107 !important;
            padding: 10px !important;
            font-weight: bold !important;
        }

        .carousel-control-next,
        .carousel-control-prev,
        .carousel-indicators {
            display: none !important;
        }

        .img-carousel img {
            height: auto !important;
        }

        #awrad_title {
            width: 60vw !important;
        }
    }

    .carousel-item {
        transition: all 1s ease-out;
    }

    .carousel-caption {
        bottom: 20px;
    }

    .img-carousel {
        width: 100% !important;
        aspect-ratio: 4/3;
        background-size: contain !important;
    }

    .img-carousel img {
        height: 100%;
    }
</style>
