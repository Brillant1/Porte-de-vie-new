@extends('front.partials.template')
@section('content')



<section class="page-title overlay" style="background-image: url({{ asset('front/images/background/page-title.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="text-white font-weight-bold">Nos activités</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index-2.html">Accueil</a>
                    </li>
                    <li>Activités</li>
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
                <h3>Nous menons diverses activités pour impacter et sauver des vies </h3>
            </div>
            <div class="col-lg-3 text-lg-right text-center align-self-center">
                <a href="#" class="btn btn-primary btn-sm">Soutenez nous ici</a>
            </div>
        </div>
    </div>
</section>
<!-- /cta -->

<!-- service -->
<section class="section d-flex justify-content-center">
    <div class="" style="width:75%;">
        <div class="row">
            <!-- service item -->
            <div class="col-lg-4 col-sm-6 mb-5">
                <div class="card">
                    <div class="card-img-wrapper overlay-rounded-top">
                        <img class="card-img-top rounded-0" src="{{ asset('front/images/service/service-1.jpg') }}" alt="service-image">
                    </div>
                    <div class="card-body ps-1">
                        <h4 class="card-title pt-3">Prière de délivrance</h4>
                        <p class="card-text mb-0">La semaine du 20 mai prochain serait pour nous une semaine </p>

                        <div class="d-flex justify-content-between mt-2">
                            <div>
                                <p>Du <strong class="fw-bold">27-03-2023</strong> au <strong class="fw-bold">27-04-2023</strong></p>
                            </div>
                            <a href="service-single.html" class="">Voir détail
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- service item -->
            <div class="col-lg-4 col-sm-6 mb-5">
                <div class="card text-center">
                    <div class="card-img-wrapper overlay-rounded-top">
                        <img class="card-img-top rounded-0" src="{{ asset('front/images/service/service-4.jpg') }}" alt="service-image">
                    </div>
                    <div class="card-body p-0">
                        <h4 class="card-title pt-3">Business Consulting</h4>
                        <p class="card-text mx-2 mb-0">Lorem ipsum dolor amet consecte tur adipisicing elit sed done eius mod tempor enim ad minim veniam
                            quis nostrud.</p>
                        <a href="service-single.html" class="btn btn-secondary translateY-25">Voir détail</a>
                    </div>
                </div>
            </div>
            <!-- service item -->
            <div class="col-lg-4 col-sm-6 mb-5">
                <div class="card text-center">
                    <div class="card-img-wrapper overlay-rounded-top">
                        <img class="card-img-top rounded-0" src="{{ asset('front/images/service/service-5.jpg') }}" alt="service-image">
                    </div>
                    <div class="card-body p-0">
                        <h4 class="card-title pt-3">Valuable Idea</h4>
                        <p class="card-text mx-2 mb-0">Lorem ipsum dolor amet consecte tur adipisicing elit sed done eius mod tempor enim ad minim veniam
                            quis nostrud.</p>
                        <a href="service-single.html" class="btn btn-secondary translateY-25">Voir détail</a>
                    </div>
                </div>
            </div>
            <!-- service item -->
            <div class="col-lg-4 col-sm-6">
                <div class="card text-center">
                    <div class="card-img-wrapper overlay-rounded-top">
                        <img class="card-img-top rounded-0" src="{{ asset('front/images/service/service-6.jpg') }}" alt="service-image">
                    </div>
                    <div class="card-body p-0">
                        <h4 class="card-title pt-3">Market Strategy</h4>
                        <p class="card-text mx-2 mb-0">Lorem ipsum dolor amet consecte tur adipisicing elit sed done eius mod tempor enim ad minim veniam
                            quis nostrud.</p>
                        <a href="service-single.html" class="btn btn-secondary translateY-25">Voir détail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /service -->
@endsection
