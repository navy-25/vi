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
        height: 10vh ;
    }

    #header{
        background-image: url({{ asset('img/my-photo-2.png') }});
        background-repeat: no-repeat;
        background-position:left bottom;
    }

    #section1{
        width: 100%;
        height: 90vh;
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
    }
</style>
