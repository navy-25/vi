<div id="section3" class="w-100 d-flex bg-light p-5 p-md-2 p-lg-2 mx-0">
    <div class="m-auto container px-md-5 px-lg-5">
        <center>
            <h3 id="edu_title">Education History</h3>
            <hr style="width: 100px" size="5" class="my-5">
            <div class="row">
                @foreach ($data['school_icon'] as $index => $val)
                    <div class="col-12 col-md-4 col-lg-4 mb-3">
                        <div class="bg-warning p-4 mb-3" style="border-radius: 100%;width: 100px;height: 100px;">
                            <img src="{{ asset('img/').'/'.$val }}" class="w-100" alt="{{ $data['school_level_en'][$index] }}">
                        </div>
                        <small  id="sch_level_{{ $index }}" class="badge bg-secondary mb-1">{{ $data['school_level_en'][$index] }}</small> <br>
                        <h4 id="sch_name_{{ $index }}" class="my-0">{{ $data['school_name_en'][$index] }}</h4>
                        <small  id="sch_votional_{{ $index }}" class="text-gray">{{ $data['vational_en'][$index] }}</small> <br>
                        <small  id="sch_place_{{ $index }}" class="text-gray">{{ $data['school_place_en'][$index] }}</small>
                    </div>
                @endforeach
            </div>
        </center>
    </div>
</div>
