<style>
    html,body,p,h1,h2,h3,h4,h5,h6{
        font-family: 'Rubik', sans-serif;
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

    #section1{
        background-image: url({{ asset('img/my-photo-2.png') }});
        background-repeat: no-repeat;
        background-position:left bottom;
    }

    #section2{
        background-image: url({{ asset('img/my-photo-1.png') }});
        background-repeat: no-repeat;
        background-position:right bottom;
        height:75vh;
    }

    #coma2{
        background-image: url({{ asset('img/coma-2.png') }});
        background-repeat: no-repeat;
        background-position:left top;
        background-size: 20%;
    }

    @media only screen and (max-width: 600px) {
        #section1{
            background-position:center bottom;
        }
        #section2{
            background-position:center bottom !important;
            height:100vh !important;
        }
    }
</style>
