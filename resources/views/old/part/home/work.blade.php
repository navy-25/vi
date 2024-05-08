<div id="section4" class="w-100 d-flex bg-warning p-5 p-md-5 p-lg-5 mx-0 px-2">
    <div class="m-auto container px-2 px-md-5 px-lg-5">
        <center>
            <h3 id="experience_title">Work Experiences</h3>
            <hr style="width: 100px" size="5" class="my-5">
        </center>
        <div class="row mx-0">
            <center>
                <div class="col-12 mb-3 rounded">
                    <div class="row mx-0" id="id_work_experience">
                        @foreach ($data['job_icon'] as $index => $val)
                            <div class="col-3 col-md-3 col-lg-2 mb-5">
                                <img src="{{ asset('img/').'/'.$val }}" class="w-100" alt="grab">
                            </div>
                            <div class="col-9 col-md-4 col-lg-4 text-start mb-3">
                                <h4 class="my-0">{{ $data['job_position_eng'][$index] }}</h4>
                                <small>{{ $data['job_name'][$index] }}</small> <br> <br>
                                <div class="d-inline-block">
                                    <button class="btn-rounded darken me-2 mb-2">{{ $data['job_years_eng'][$index] }}</button>
                                    <button class="btn-rounded darken me-2 mb-2">{{ $data['job_type_eng'][$index] }}</button>
                                    <button class="btn-rounded darken me-2 mb-2">{{ $data['job_category_eng'][$index] }}</button>
                                </div>
                            </div>
                            <div class="col-2 col-md-0 col-lg-0 d-block d-md-none d-lg-none"></div>
                            <div class="col-10 col-md-5 col-lg-6 text-start mb-3">
                                <ul>
                                    @foreach ($data['job_desc_eng'][$index] as $list)
                                        <li>{{ $list }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endforeach
                    </div>
                </div>
            </center>
        </div>
    </div>
</div>
