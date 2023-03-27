<script>
    $('#spinner').fadeOut()
    document.addEventListener("contextmenu", function(e){
        e.preventDefault();
    },false);
    feather.replace()
    function menu_active(btn_id){
        var menu = document.querySelectorAll('.menu-icon');
        menu.forEach(val => {
            val.classList.remove('active');
        });
        $(btn_id).addClass('active')
    }
</script>
