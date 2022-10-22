<div class="container-fluid m-0 p-0 bg-dark " id="header">
    <nav class="container px-3 px-md-5 px-lg-5 py-4">
        <div class="row text-white">
            <div class="col-12 d-flex">
                <div class="ms-auto my-auto">
                    <button id="lang_en" class="btn-circle lighten scale scale-2 btn-active me-2" onclick="active_lang('en')">en</button>
                    <button id="lang_id" class="btn-circle lighten scale scale-2" onclick="active_lang('id')">id</button>
                </div>
            </div>
        </div>
    </nav>
    <div id="section1" class="d-flex p-5 p-md-2 p-lg-2 m-0">
        <div class="m-auto d-flex container px-md-5 px-lg-5">
            <div class="row m-0 p-0 w-100">
                <div class="col-12 col-md-8 col-lg-8 order-1 order-md-0 order-lg-0">
                    <div class="text-white my-auto p-2 text-center text-md-start text-lg-start">
                        <small class="text-secondary mb-1 text-white">
                            <span class="bg-warning text-dark p-1 px-2 me-2">hola!</span>
                            <span id="name">my name is</span>
                        </small>
                        <h1 class="py-0 my-0 pt-2 text-warning fw-bold">Muhammad Nafi</h1>
                        <h3 class="py-0 my-0 text-white">Maula Hakim</h3>
                        <br>
                        <div class="row m-0 d-flex">
                            <div class="text-center text-md-start text-lg-start px-0">
                                <button id="man" class="btn-circle lighten scale scale-2 me-2">M</button>
                                <button class="btn-circle scale lighten scale-2 me-2">{{ $data['old'] }}</button>
                                <button class="btn-circle scale lighten scale-2 me-2">170</button>
                                <button class="btn-rounded scale lighten scale-2 me-2">Jombang</button>
                            </div>
                        </div>
                        <br>
                        <small id="iam" class="text-secondary mb-1 text-white">
                            i'am a...
                        </small>
                        <div class="row m-0 p-0 mt-3 mx-auto ms-md-0 ms-lg-0" style="max-width: 450px !important">
                            @foreach ($data['passions_icon'] as $index => $val)
                                <div class="col-12 col-md-12 col-lg-6 px-0 h-100 mb-3 scale scale-1 pe-0 pe-md-3 pe-lg-3">
                                    <div class="card bg-warning">
                                        <div class="card-body p-1 d-flex h-100 w-auto">
                                            <div class="my-auto d-flex p-2 text-dark">
                                                <img src="{{ asset('img/').'/'.$val }}"
                                                    class="me-2" width="30" height="30" alt="image-{{ str_replace(' ','-',strtolower($data['passions_en'][$index])) }}">
                                                <p id="passions_{{ $index }}" class="m-0 p-0 fs-6 m-1">{{ $data['passions_en'][$index] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <br>
                        <small id="contact" class="text-secondary mb-1 text-white">
                            contact
                        </small>
                        <div class="row m-0 p-0 mt-3 w-75 mx-auto ms-md-0 ms-lg-0">
                            @foreach ($data['contact_icon'] as $index => $icon_name)
                                <div class="col-2 col-md-auto col-lg-auto ps-0 h-100 mb-1 mx-auto mx-md-0 mx-lg-0">
                                    <a href="{{ $data['link'][$index] }}" target="_blank" title="{{  $data['label'][$index] }}">
                                        <img src="{{ asset('img/').'/'.$icon_name }}" class="me-1 scale scale-2" width="30" height="30" alt="image-{{ str_replace(' ','-',strtolower($icon_name)) }}">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 order-0 order-md-1 order-lg-1 d-flex">
                    <img src="{{ asset('img/my-photo.png') }}" class="w-75 mb-5 my-md-auto my-lg-auto my-auto scale scale-1 mx-auto" alt="my-photo">
                </div>
            </div>
        </div>
    </div>
</div>
