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
<section class="page-title overlay" style="background-image: url({{ asset('/front/images/background/page-title.jpg') }});">
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
                    <img class="img-fluid w-100 rounded" src="{{ asset('/front/images/about/about-video-thumbnail.jpg') }}" alt="video-thumbnail">
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
                <p style=" ">Né le 22 Décembre 1982 à Cotonou (Bénin), le Prophète François Xavier Allokpe est un serviteur de Dieu avec un mandat prophétique. Il a reçu Christ dans les années 2000 dans l'Église Pentecôte au Bénin où il a commencé par servir le seigneur cinq (05) ans plus tard en tant que responsable d'église locale. Marié à Ernestine DAYOU, Deux (02) enfants sont nés de leur union : (Hosana, Amen). En 2012, il réçut l'appel au ministère, et se fit former pendant trois (03) ans à l'institut biblique Living Word Christ's Kingdom.</p>
                <p style=" ">En 2015, le Prophète François Xavier Allokpe fonda l'<strong>Église Évangélique PORTE DE VIE</strong> dont le siège est à Godomey dans la banlieue de Cotonou (Bénin). Il est aussi fondateur de l'institut biblique les Aigles de l'Éternel (IBAE) qui forme des jeunes disciples pour l'impact de la nouvelle génération. Écrivain, il est également l'auteur de deux (02) ouvrages à savoir : "Le mystère caché des rêves" et "Tout pour vaincre la sorcellerie". Toujours avec la soif de la connaissance approfondie de la parole, il s'est inscrit à l'institut de Théologie LA SOURCE et obtint sa licence</p>
                {{-- <a href="service.html" class="btn btn-primary">Explore More</a> --}}
            </div>
            <!-- philosophy image -->
            <div class="col-lg-5 align-self-center order-1 order-lg-2 mb-md-50">
                <img class="img-fluid w-100" src="{{ asset('/front/images/membre/pasteur.png') }}" alt="philosophy-image" height="500" >
            </div>
        </div>
    </div>
</section>
<!-- /philosophy -->

<!-- ceo section -->
{{-- <section>
    <div class="container">
        <div class="row rounded bg-secondary">
            <!-- ceo image -->
            <div class="col-lg-5 rounded-left ceo-image" style="background-image: url({{ asset('/front/images/pdv4.jpeg') }});"></div>
            <div class="col-lg-7">
                <!-- ceo content -->
                <div class="p-5">
                    <h2 class="section-title section-title-border-half-white text-white"> Nos désirs ardents </h2>
                    <p class="text-white">Notre mission est de mettre en œuvre des actions d'évangélisation pour le salut et la libération des âmes dans le monde entier, dévoiler et briser les jougs de la sorcellerie à travers des prédications et enseignements puissants, permettre aux enfants de Dieu de toute la planète d'être libéré de servitude du diable, accorder une vie pleine de jouissance et de liberté en Jésus-Christ.</p>
                        <p class="text-white">Nous visons évangéliser le monde entier au travers des campagnes d'évangélisation, les mass médias (la télévision, les réseaux sociaux). Ériger des églises locales dans les contrées et nations. Former des disciples accomplis pour la relève et l'impact de la nouvelle génération. Créer des orphelinats pour l'assistance aux enfants délaissés. Créer un hôpital de référence. Créer des centres agro-pastoraux, pisciculture etc...</p>

                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- /ceo section -->

<!-- skill -->
{{-- <section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <h3 class="section-title">Demandez un rendez-vous</h3>
            </div>

            <div class="col-lg-12">
                <div id="accordion" class="mb-md-50">
                    <div class="card border-0 mb-4">
                        <div class="card-header bg-gray border p-0">
                            <a class="card-link h5 d-block text-dark mb-0 py-10 px-4" data-toggle="collapse" href="#collapseOne">
                                <i class="ti-minus text-primary mr-2"></i> Rendez-vous prophétique ?
                            </a>
                        </div>
                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                            <div class="card-body font-secondary text-color pl-0 pb-0">
                                Duis aute irure dolor in reprehenderit voluptate velit esse cillum dolore fugiat nulla pariatur.Excepteur sint ocaecat cupidatat
                                non proident sunt culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 mb-4">
                        <div class="card-header bg-gray border p-0">
                            <a class="collapsed card-link h5 d-block text-dark mb-0 py-10 px-4" data-toggle="collapse" href="#collapseTwo">
                                <i class="ti-plus text-primary mr-2"></i> Rendez-vous simple ?
                            </a>
                        </div>
                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                            <div class="card-body font-secondary text-color pl-0 pb-0">
                                Duis aute irure dolor in reprehenderit voluptate velit esse cillum dolore fugiat nulla pariatur.Excepteur sint ocaecat cupidatat
                                non proident sunt culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 mb-4">
                        <div class="card-header bg-gray border p-0">
                            <a class="collapsed card-link h5 d-block text-dark mb-0 py-10 px-4" data-toggle="collapse" href="#collapseThree">
                                <i class="ti-plus text-primary mr-2"></i> Autre sujet ?
                            </a>
                        </div>
                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                            <div class="card-body font-secondary text-color pl-0 pb-0">
                                Duis aute irure dolor in reprehenderit voluptate velit esse cillum dolore fugiat nulla pariatur.Excepteur sint ocaecat cupidatat
                                non proident sunt culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                        </div>
                    </div>
                </div>
            </div>66665177
        </div>
    </div>
</section> --}}
<!-- /skill -->

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
            {{-- <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
                <div class="d-flex flex-sm-row flex-column justify-content-lg-center align-items-center text-center text-sm-left">
                    <i class="round-icon ti-cup mr-sm-3 mr-0 mb-3 mb-sm-0"></i>
                    <div class="text-center text-sm-left">
                        <h2 class="count text-white mb-0" data-count="130">0</h2>
                        <p class="text-white mb-0">Awards Win</p>
                    </div>
                </div>
            </div> --}}
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
                <img class="img-fluid w-100" src="{{ asset('/front/images/pdv2.jpeg') }}" alt="clients-image">
            </div>
            <div class="col-lg-7 col-md-7 align-self-center pl-0">
                <div class="testimonial-slider p-5">
                    <!-- slider item -->
                    <div class="outline-0">
                        <i class="testimonial-icon ti-quote-left"></i>
                        <p class="text-dark">Lorem ipsum dolor sit amet constur adipisicing elit sed eiusmtempor incid sed dolore magna aliqu enim minim veniam quis nostrud exercittion ullamco labo ris nisi aliquip excepteur.</p>

                        <div class=" d-flex justify-content-between ">
                            <h4 class="font-weight-normal">Julia Robertson</h4>
                            <a href="#" class=" btn btn-danger py-2">Voir plus</a>
                        </div>
                    </div>
                    <!-- slider item -->
                    <div class="outline-0">
                        <i class="testimonial-icon ti-quote-left"></i>
                        <p class="text-dark">Lorem ipsum dolor sit amet constur adipisicing elit sed eiusmtempor incid sed dolore magna aliqu enim minim veniam quis nostrud exercittion ullamco labo ris nisi aliquip excepteur.</p>
                        <div class=" d-flex justify-content-between ">
                            <h4 class="font-weight-normal">Julia Robertson</h4>
                            <a href="#" class=" btn btn-danger py-2">Voir plus</a>
                        </div>
                    </div>
                    <!-- slider item -->
                    <div class="outline-0">
                        <i class="testimonial-icon ti-quote-left"></i>
                        <p class="text-dark">Lorem ipsum dolor sit amet constur adipisicing elit sed eiusmtempor incid sed dolore magna aliqu enim minim veniam quis nostrud exercittion ullamco labo ris nisi aliquip excepteur.</p>
                        <div class=" d-flex justify-content-between ">
                            <h4 class="font-weight-normal">Julia Robertson</h4>
                            <a href="#" class=" btn btn-danger py-2">Voir plus</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
