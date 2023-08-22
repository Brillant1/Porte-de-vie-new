@extends('front.partials.template')
@section('content')



<section class="page-title overlay" style="background-image: url({{ asset('front/images/background/page-title.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="text-white font-weight-bold">Nos services</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('accueil') }}">Accueil</a>
                    </li>
                    <li>Services</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- cta -->
<section class="py-3 bg-gray">
    <div class="container">
        <div class="row py-3">
            <div class="col-lg-9 text-center text-lg-left mb-3 mb-lg-0">
                <h3>Nous rendons des services de diverses sortes pour l'atteinte du salut des âmes  </h3>
            </div>
            <div class="col-lg-3 text-lg-right text-center align-self-center">
                <a href="#" class="btn btn-primary btn-sm">Vous voulez-nous soutenir ?</a>
            </div>
        </div>
    </div>
</section>
<!-- /cta -->

<!-- service -->
<section class="section d-flex justify-content-center">
    <div class="" style="width:75%;">
        <div class="row justify-content-start">
            <!-- service item -->
            <div class="row justify-content-start">
                @forelse ($services as $service)
                        <div class="col-md-4 atout-item">
                            <div class="card h-100">
                                <img src="{{ asset('storage/' . $service->photo) }}" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h4 class="card-title text-center rosette-text-orange ">{{ $service->intitule }}</h4>
                                    <p class="card-text text-center">{!! Str::limit($service->description, 250, '...') !!}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                    <p class="text-center">Aucun service disponible pour le moment</p>
                    @endforelse
            </div>
        </div>
    </div>
</section>
@endsection
