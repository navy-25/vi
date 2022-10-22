<script>
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

    function active_lang(type){
        var job_icon = '{{ implode("|",$data['job_icon']) }}'.split('|')
        var job_name = '{{ implode("|",$data['job_name']) }}'.split('|')
        $('#id_work_experience').html('')
        if(type == 'id'){
            $('#lang_id').addClass('btn-active')
            $('#lang_en').removeClass('btn-active')

            $('#name').text('nama saya adalah')
            $('#iam').text('saya seorang...')
            $('#contact').text('narahubung')
            $('#man').text('L')
            $('#experience_title').text('Pengalaman Kerja')

            var job_position_eng    = '{{ implode("|",$data['job_position_eng']) }}'.split('|')
            var job_years_eng       = '{{ implode("|",$data['job_years_eng']) }}'.split('|')
            var job_type_eng        = '{{ implode("|",$data['job_years_eng']) }}'.split('|')
            var job_category_eng    = '{{ implode("|",$data['job_category_eng']) }}'.split('|')
            var job_desc_eng        = JSON.parse('{{ json_encode($data['job_desc_eng']) }}'.replaceAll('&quot;','"'))
            Object.entries(job_icon).forEach(([key, value]) => {
                var image = "{{ asset('img/') }}"+'/'+value
                $('#id_work_experience').append(`
                    <div class="col-3 col-md-3 col-lg-2 mb-5">
                        <img src="`+image+`" class="w-100" alt="`+value+`">
                    </div>
                    <div class="col-9 col-md-4 col-lg-4 text-start mb-3">
                        <h4 class="my-0">`+job_position_eng[key]+`</h4>
                        <small>`+job_name[key]+`</small> <br> <br>
                        <div class="d-inline-block">
                            <button class="btn-rounded darken me-2 mb-2">`+job_years_eng[key]+`</button>
                            <button class="btn-rounded darken me-2 mb-2">`+job_type_eng[key]+`</button>
                            <button class="btn-rounded darken me-2 mb-2">`+job_category_eng[key]+`</button>
                        </div>
                    </div>
                    <div class="col-2 col-md-0 col-lg-0 d-block d-md-none d-lg-none"></div>
                    <div class="col-10 col-md-5 col-lg-6 text-start mb-3">
                        <ul id="detail_eng_`+key+`"></ul>
                    </div>
                `)
                Object.entries(job_desc_eng[key]).forEach(([key_2, value_2]) => {
                    $('#detail_eng_'+key).append(`
                        <li>`+value_2+`</li>
                    `)
                })
            })

            var passions = '{{ implode("|",$data['passions_id']) }}'.split('|')
            Object.entries(passions).forEach(([key, value]) => {
                $('#passions_'+key).text(value)
            })

            $('#edu_title').text('Riwayat Pendidikan')

            var sch_name = '{{ implode("|",$data['school_name_id']) }}'.split('|')
            Object.entries(sch_name).forEach(([key, value]) => {
                $('#sch_name_'+key).text(value)
            })
            var sch_level = '{{ implode("|",$data['school_level_id']) }}'.split('|')
            Object.entries(sch_level).forEach(([key, value]) => {
                $('#sch_level_'+key).text(value)
            })
            var sch_votional = '{{ implode("|",$data['vational_id']) }}'.split('|')
            Object.entries(sch_votional).forEach(([key, value]) => {
                $('#sch_votional_'+key).text(value)
            })
            var sch_place = '{{ implode("|",$data['school_place_id']) }}'.split('|')
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
            $('#experience_title').text('Work Experiences')

            var job_position_in    = '{{ implode("|",$data['job_position_in']) }}'.split('|')
            var job_years_in       = '{{ implode("|",$data['job_years_in']) }}'.split('|')
            var job_type_in        = '{{ implode("|",$data['job_years_in']) }}'.split('|')
            var job_category_in    = '{{ implode("|",$data['job_category_in']) }}'.split('|')
            var job_desc_in        = JSON.parse('{{ json_encode($data['job_desc_in']) }}'.replaceAll('&quot;','"'))
            Object.entries(job_icon).forEach(([key, value]) => {
                var image = "{{ asset('img/') }}"+'/'+value
                $('#id_work_experience').append(`
                    <div class="col-3 col-md-3 col-lg-2 mb-5">
                        <img src="`+image+`" class="w-100" alt="`+value+`">
                    </div>
                    <div class="col-9 col-md-4 col-lg-4 text-start mb-3">
                        <h4 class="my-0">`+job_position_in[key]+`</h4>
                        <small>`+job_name[key]+`</small> <br> <br>
                        <div class="d-inline-block">
                            <button class="btn-rounded darken me-2 mb-2">`+job_years_in[key]+`</button>
                            <button class="btn-rounded darken me-2 mb-2">`+job_type_in[key]+`</button>
                            <button class="btn-rounded darken me-2 mb-2">`+job_category_in[key]+`</button>
                        </div>
                    </div>
                    <div class="col-2 col-md-0 col-lg-0 d-block d-md-none d-lg-none"></div>
                    <div class="col-10 col-md-5 col-lg-6 text-start mb-3">
                        <ul id="detail_in_`+key+`"></ul>
                    </div>
                `)
                Object.entries(job_desc_in[key]).forEach(([key_2, value_2]) => {
                    $('#detail_in_'+key).append(`
                        <li>`+value_2+`</li>
                    `)
                })
            })

            var passions = '{{ implode("|",$data['passions_en']) }}'.split('|')
            Object.entries(passions).forEach(([key, value]) => {
                $('#passions_'+key).text(value)
            })
            $('#edu_title').text('Education History')

            var sch_name = '{{ implode("|",$data['school_name_en']) }}'.split('|')
            Object.entries(sch_name).forEach(([key, value]) => {
                $('#sch_name_'+key).text(value)
            })
            var sch_level = '{{ implode("|",$data['school_level_en']) }}'.split('|')
            Object.entries(sch_level).forEach(([key, value]) => {
                $('#sch_level_'+key).text(value)
            })
            var sch_votional = '{{ implode("|",$data['vational_en']) }}'.split('|')
            Object.entries(sch_votional).forEach(([key, value]) => {
                $('#sch_votional_'+key).text(value)
            })
            var sch_place = '{{ implode("|",$data['school_place_en']) }}'.split('|')
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
