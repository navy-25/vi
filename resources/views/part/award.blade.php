<div id="section5" class="w-100 d-flex bg-light p-5 mx-0">
    <div class="m-auto container px-md-5 px-lg-5">
        <center>
            <h3 id="awrad_title">Achievements & Awards</h3>
            <hr style="width: 100px" size="5" class="my-5">
            <div class="row">
                <div class="col-12 col-md-3 col-lg-3"></div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div id="carCap" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            @foreach (range(0,count($data['award_name_in'])-1) as $index)
                                <button type="button" data-bs-target="#carCap" data-bs-slide-to="{{ $index }}" aria-label="Slide {{ $index+1 }}" class="{{ $index == 0 ? 'active' : '' }}" aria-current="{{ $index == 0 ? 'true' : '' }}"></button>
                            @endforeach
                        </div>
                        <div class="carousel-inner">
                            @foreach ($data['award_name_eng'] as $index => $value)
                                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}"
                                    {{-- data-bs-interval="2000" --}}
                                    >
                                    <img src="{{ asset('img/award/').'/'.$data['award_thumbnail'][$index] }}" class="d-block w-100 img-carousel" alt="{{ $data['award_thumbnail'][$index] }}">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5 class="bg-warning p-2 text-dark w-auto">{{ $value }}</h5>
                                        <p class="text-white">{{ $data['award_desc_eng'][$index] }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carCap" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carCap" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-12 col-md-3 col-lg-3"></div>
            </div>
        </center>
    </div>
</div>
