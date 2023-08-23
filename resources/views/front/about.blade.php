@extends('front.partials.template')
@section('content')
<style>
    .section-title-border-half::after{
        width: 225px !important;
        left: 2px;
    }
    .section-title-border-half::before {
        left:114px !important;
    }
</style>
<section class="page-title overlay" style="background-image: url({{ asset('front/images/img-fond.PNG') }});">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="text-white font-weight-bold">A propos</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index-2.html">Accueil</a>
                    </li>
                    <li>A propos</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <!-- philosophy video -->
            <div class="col-lg-5 align-self-center">
                <div class="overlay overlay-rounded mb-md-50">
                    <img class="img-fluid w-100 rounded" src="{{ asset('front/images/dossierImage/pst-present.png') }}" alt="video-thumbnail">
                    <a class="play-icon popup-youtube centralized" href="https://www.youtube.com/watch?v=VAwZDS-bVsU"><i class="ti-control-play"></i></a>
                </div>
            </div>
            <div class="col-lg-7">

                <h2 class="section-title section-title-border-half">Présentation de l'église</h2>
                <p>L’Église Évangélique PORTE DE VIE est un ministère prophétique avec à sa tête le prophète François Xavier ALLOKPE. Son siège est à Cotonou
                    (Bénin) précisément à Godomey PK 14. Elle a pour mandat de propager la bonne nouvelle de Jésus-Christ, de proclamer la liberté aux captifs. <br>
                    Elle dispose d'une chaîne.</p>

                    <a href="service-2.html" class="btn btn-primary py-3 mt-4">Voir plus</a>

            </div>
        </div>
    </div>
</section>


<!-- philosophy -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 order-2 order-lg-1">
                <h2 class="section-title section-title-border-half">Le prophète fondateur</h2>
                <p style=" ">Né le 22 Décembre 1982 à Cotonou (BÉNIN), <strong>ALLOKPE François Xavier Cokou</strong> est un serviteur de Dieu avec un mandat prophétique pour libérer les peuples de la captivité et des liens du méchant. Il a reçu le Seigneur dans les années 2000. Prêchant et enseignant le royaume de Dieu en démontrant la puissance divine au travers les miracles, les guérisons et des prodiges.
                    Après ses études primaires et secondaires, il s'est inscrit à l'Institut biblique <strong>Living Word Christ's Kingdom</strong> Bénin où il a suivi une formation de 03 ans. Il s'est inscrit par la suite à l'Institut de Théologie La Source où il obtient son Masteur en Théologie.</p>
                <p style=" ">Il est le fondateur de l'<strong>Église Évangélique PORTE DE VIE</strong> et de l'<strong>Ecole Biblique "Les Aigles de l'Éternel" (IBAE)</strong>. Promoteur de la chaine de télévision chrétienne PORTE TV, il est aussi l'auteur des oeuvrages "Le mystère caché des rêves" et "Tout pour vaincre la sorcellerie". Marié à <strong> Ernestine Akpedjé DAYOU</strong>, Deux (02) enfants sont nés de leur union : <strong>(Hosana et Amen)</strong></p>
            </div>

            <div class="col-lg-5 align-self-center order-1 order-lg-2 mb-md-50">
                <img class="img-fluid w-100 rounded" src="{{ asset('front/images/dossierImage/pst-present2.jpg') }}" alt="philosophy-image" height="500" >
            </div>
        </div>
    </div>
</section>


<section class="fun-facts overlay-dark section-sm" style="background-image: url(images/background/cta.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <div class="d-flex flex-sm-row flex-column justify-content-lg-center align-items-center text-center text-sm-left">
                    <i class="round-icon ti-server mr-sm-3 mr-0 mb-3 mb-sm-0"></i>
                    <div class="text-center text-sm-left">
                        <h2 class="count text-white mb-0" data-count="10">0</h2>
                        <p class="text-white mb-0">Annexes</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <div class="d-flex flex-sm-row flex-column justify-content-lg-center align-items-center text-center text-sm-left">
                    <i class="round-icon ti-face-smile mr-sm-3 mr-0 mb-3 mb-sm-0"></i>
                    <div class="text-center text-sm-left">
                        <h2 class="count text-white mb-0" data-count="1000">0</h2>
                        <p class="text-white mb-0">Fidèles</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <div class="d-flex flex-sm-row flex-column justify-content-lg-center align-items-center text-center text-sm-left">
                    <i class="round-icon ti-thumb-up mr-sm-3 mr-0 mb-3 mb-sm-0"></i>
                    <div class="text-center text-sm-left">
                        <h2 class="count text-white mb-0" data-count="580">0</h2>
                        <p class="text-white mb-0">Relations</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- testimonial -->
<section class="section pb-0">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                {{-- <h5 class="section-title-sm">Clients</h5> --}}
                <h2 class="section-title section-title-border"> Des fidèles témoignent </h2>
            </div>
            <div class="col-lg-5 col-md-5 pr-0 align-self-center">
                <img class="img-fluid w-100" src="{{ asset('front/images/pdv2.jpeg') }}" alt="clients-image">
            </div>
            <div class="col-lg-7 col-md-7 align-self-center pl-0">
                <div class="testimonial-slider p-5">
                    <!-- slider item -->

                    @foreach ($temoignages as $temoignage)
                        <div class="outline-0">
                            <i class="testimonial-icon ti-quote-left"></i>
                            <p class="text-dark">{{ $temoignage->description }}</p>
                            <div class=" d-flex justify-content-between ">
                                <h4 class="font-weight-normal">{{ $temoignage->nom }}</h4>
                                <a href="{{ $temoignage->nom?$temoignage->lien:"#" }}" class=" btn btn-danger py-2">Voir plus</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
