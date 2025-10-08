<script>
    feather.replace()
    // $('#spinner').fadeOut()
    $(document).ready(function(){
        $('#carousel-1').owlCarousel({
            loop:true,
            margin:20,
            nav:false,
            autoplay:true,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
            responsive:{
                0:{ items:2 },
                600:{ items:2 },
            }
        });

        $('#carousel-2').owlCarousel({
            loop:true,
            margin:20,
            nav:false,
            autoplay:true,
            autoplayTimeout:6000,
            autoplayHoverPause:true,
            responsive:{
                0:{ items:2 },
                600:{ items:2 },
            }
        });
    });

    var images = document.getElementsByTagName('img');
    for (var i = 0; i < images.length; i++) {
        images[i].addEventListener('contextmenu', function(e) {
            e.preventDefault();
        });
    }

    var hash = window.location.hash;
    if (hash) {
        $(`li[target="${hash}"]`).addClass('active')
    }
    window.onscroll = function() {
        var scrollPosition = window.scrollY || document.documentElement.scrollTop;
        if(scrollPosition > 2000){
            $('#scroll-up').removeClass('d-none')
        }else{
            $('#scroll-up').addClass('d-none')
        }
        var links = document.querySelectorAll('ul li a');
        links.forEach(function(link) {
            try {
                var targetID = link.getAttribute('href').substring(1);
                var targetElement = document.getElementById(targetID);
                var targetPosition = targetElement.offsetTop - 50;
                var targetHeight = targetElement.offsetHeight;

                if (scrollPosition >= targetPosition && scrollPosition < targetPosition + targetHeight) {
                    link.parentNode.classList.add('active');
                } else {
                    link.parentNode.classList.remove('active');
                }
            } catch (error) {
                // ....
            }
        });
    };

    // document.addEventListener("contextmenu", function(e){
    //     e.preventDefault();
    // },false);
    // function menu_active(btn_id){
    //     var menu = document.querySelectorAll('.menu-icon');
    //     menu.forEach(val => {
    //         val.classList.remove('active');
    //     });
    //     $(btn_id).addClass('active')
    // }
</script>
