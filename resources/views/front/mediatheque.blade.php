@extends('front.partials.template')
@section('content')
    <!-- team -->
    <section class="page-title overlay" style="background-image: url({{ asset('front/images/media.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="text-white font-weight-bold">Notre médiathèque</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{ route('accueil') }}">Accueil</a>
                        </li>
                        <li>Médiathèque</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="mb-2">Des médias pris lors de nos événements</h2>
                    </p>
                </div>
            </div>
        </div>
        <div class="container-fluid d-flex justify-content-center">
            <div class=" w-75">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active border-0" id="pills-home-tab" data-toggle="pill"
                            data-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">Photothèque</button>
                    </li>
                    <li class="nav-item ml-2" role="presentation">
                        <button class="nav-link border-0" id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile"
                            type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false">Vidéothèque</button>
                    </li>

                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="row row-cols-1 row-cols-md-3 g-4">

                            @foreach ($photos as $photo)
                                <div class="col mt-2">
                                    <div class="card h-100">
                                        <img src="{{ asset('storage/' . $photo->url) }}" class="card-img-top" alt="...">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="row row-cols-1 row-cols-md-3 g-4 ">
                            @foreach ($videos as $video)
                                <div class="col mt-2" >
                                    <div class="card h-100">
                                        <img src="{{ asset('storage/' . $video->url) }}" class="card-img-top" alt="...">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>
@endsection
