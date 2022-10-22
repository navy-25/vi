<style>
    html,body,p,h1,h2,h3,h4,h5,h6{
        font-family: 'Rubik', sans-serif !important;
    }

    .text-gray{
        color: #8d8d8d;
    }

    .scale{
        transition: all 0.3s ease-out;
    }
    .scale-1:hover{
        transform: scale(1.1)
    }
    .scale-2:hover{
        transform: scale(1.2)
    }
    .scale-3:hover{
        transform: scale(1.3)
    }

    nav{
        width: 100%;
        height: 6vh ;
    }

    #header{
        background-image: url({{ asset('img/my-photo-2.png') }});
        background-repeat: no-repeat;
        background-position:left bottom;
    }

    #section1{
        width: 100%;
        height: 94vh;
    }

    #section2{
        background-image: url({{ asset('img/my-photo-1.png') }});
        background-repeat: no-repeat;
        background-position:right bottom;
        height:75vh;
    }

    #section3{
        width: 100%;
        height: 75vh;
    }

    #section4{
        width: 100%;
        height: auto;
        background-image: url({{ asset('img/bg-work.png') }}) !important;
        background-repeat: no-repeat;
        background-size: cover !important;
    }

    #coma2{
        background-image: url({{ asset('img/coma-2.png') }});
        background-repeat: no-repeat;
        background-position:left top;
        background-size: 20%;
    }

    .btn-active{
        color: black !important;
        background: white !important;
    }

    .btn-circle{
        border-radius: 100px;
        padding:3px;
        font-size: 10px;
        width: 30px;
        height: 30px;
    }

    .btn-rounded{
        border-radius: 100px;
        padding:3px;
        font-size: 10px;
        height: 30px;
        padding: 0px 15px
    }
    .lighten{
        color: white;
        background: rgba(255, 255, 255, 0);
        border: 1px solid white;
    }

    .darken{
        color: rgb(17, 17, 17);
        background: rgba(255, 255, 255, 0);
        border: 1px solid rgb(17, 17, 17);
    }

    .lighten:hover{
        background: rgba(255, 255, 255, 0.199);
    }

    .darken:hover{
        background: rgba(39, 39, 39, 0.068);
    }

    @media only screen and (max-width: 600px) {
        #header{
            background-position:center bottom;
        }
        #section2{
            background-position:center bottom !important;
            height:100vh !important;
        }

        #section3{
            height: auto;
        }

        /* NAV BOTTOM */
        .nav-bottom{
            width: 100% !important;
            height: 8vh !important;
            position: fixed !important;
            bottom: 20px !important;
            padding-left: 20px !important;
            padding-right: 20px !important;
            display: block !important;
            z-index: 10;
        }
        .nav-content{
            background: rgba(255, 255, 255, 0.95) !important;
            width: 100% !important;
            height: 100% !important;
            border-radius: 20px !important;
            box-shadow: 0px 0px 35px 0px #00000038;
        }
        .list-menu{
            display: grid;
            grid-template-columns: auto auto auto;
            gap: 10px;
            height: 100%;
        }
        .menu-btn{
            grid-row-start: 1;
            grid-row-end: 5;
        }
        .menu-icon{
            color: rgba(39, 39, 39) !important;
            text-decoration: none !important;
            transition: all 0.2s ease-out;
        }
        .menu-icon:hover{
            transform: scale(1.2) !important;
            padding: 15px !important;
            background: #ffc107 !important;
            border-radius: 100% !important;
        }
        .menu-btn .active{
            transform: scale(1.2) !important;
            padding: 15px !important;
            background: #ffc107 !important;
            border-radius: 100% !important;
        }
        /* END NAV BOTTOM */
        body{
            padding-bottom: 8vh !important;
        }
    }

</style>
