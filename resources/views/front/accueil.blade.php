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
    <section>


        <div class="hero-slider position-relative">
            <div class="hero-slider-item" style="background-image: url({{ asset('public/front/images/membre/img-pdv1.jpeg') }});"
                data-icon="ti-comments" data-text="L'église">
                <div class="container-fluid d-flex justify-content-center bg-dark h-100 py-160" style="opacity:0.7">
                    <div class="w-75">
                        <div class="">
                            <div class="row ">
                                <div class="col-12">
                                    <div class="hero-content">
                                        <h4 class="text-uppercase mb-1 text-white" data-duration-in=".5"
                                            data-animation-in="fadeInLeft" data-delay-in=".1">Eglise Evangélique</h4>
                                        <h1 class="font-weight-bold mb-3 text-white" data-duration-in=".5"
                                            data-animation-in="fadeInLeft" data-delay-in=".5">
                                            Porte de vie</h1>
                                        <h4 class="mb-50 text-white w-75 mt-3" data-duration-in=".5"
                                            data-animation-in="fadeInLeft" data-delay-in=".9">Nous travaillons à faire de
                                            toute l'humanité des disciples de christ
                                            Jésus selon qu'il est dit: <br>
                                            << Allez, faites de toutes les nations des disciples, les baptisant au nom du
                                                Père, du Fils et du Saint-Esprit, et enseignez-leur à observer tout ce que
                                                je vous ai prescrit. <br>
                                                Et voici, je suis avec vous tous les jours, jusqu'à la fin du monde.>>
                                                Mathieu
                                                28 v 19-20
                                                </p>
                                                <a data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in="1.3"
                                                    href="{{ route('about') }}"
                                                    class="btn border border-white text-uppercase text-white font-weight-bold mt-3 bg-white text-dark">Nous
                                                    découvrir</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="hero-slider-item " style="background-image: url({{ asset('public/front/images/membre/img-pdv1.jpeg') }});"
                data-icon="ti-comments" data-text="L'église">
                <div class="container-fluid d-flex justify-content-center bg-dark h-100 py-160" style="opacity:0.7">
                    <div class="w-75">
                        <div class="">
                            <div class="row ">
                                <div class="col-12">
                                    <div class="hero-content">
                                        <h4 class="text-uppercase mb-1 text-white" data-duration-in=".5"
                                            data-animation-in="fadeInLeft" data-delay-in=".1">Eglise Evangélique</h4>
                                        <h1 class="font-weight-bold mb-3 text-white" data-duration-in=".5"
                                            data-animation-in="fadeInLeft" data-delay-in=".5">
                                            Porte de vie</h1>
                                        <h4 class="mb-50 text-white w-75 mt-3" data-duration-in=".5"
                                            data-animation-in="fadeInLeft" data-delay-in=".9">Nous travaillons à faire de
                                            toute l'humanité des disciples de christ
                                            Jésus selon qu'il est dit: <br>
                                            << Allez, faites de toutes les nations des disciples, les baptisant au nom du
                                                Père, du Fils et du Saint-Esprit, et enseignez-leur à observer tout ce que
                                                je vous ai prescrit. <br>
                                                Et voici, je suis avec vous tous les jours, jusqu'à la fin du monde.>>
                                                Mathieu
                                                28 v 19-20
                                                </p>
                                                <a data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in="1.3"
                                                    href="{{ route('about') }}"
                                                    class="btn border border-white text-uppercase text-white font-weight-bold mt-3 bg-white text-dark">Nous
                                                    découvrir</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-slider-item " style="background-image: url({{ asset('public/front/images/membre/img-pdv1.jpeg') }});"
                data-icon="ti-comments" data-text="L'église">
                <div class="container-fluid d-flex justify-content-center bg-dark h-100 py-160" style="opacity:0.7">
                    <div class="w-75">
                        <div class="">
                            <div class="row ">
                                <div class="col-12">
                                    <div class="hero-content">
                                        <h4 class="text-uppercase mb-1 text-white" data-duration-in=".5"
                                            data-animation-in="fadeInLeft" data-delay-in=".1">Eglise Evangélique</h4>
                                        <h1 class="font-weight-bold mb-3 text-white" data-duration-in=".5"
                                            data-animation-in="fadeInLeft" data-delay-in=".5">
                                            Porte de vie</h1>
                                        <h4 class="mb-50 text-white w-75 mt-3" data-duration-in=".5"
                                            data-animation-in="fadeInLeft" data-delay-in=".9">Nous travaillons à faire de
                                            toute l'humanité des disciples de christ
                                            Jésus selon qu'il est dit: <br>
                                            << Allez, faites de toutes les nations des disciples, les baptisant au nom du
                                                Père, du Fils et du Saint-Esprit, et enseignez-leur à observer tout ce que
                                                je vous ai prescrit. <br>
                                                Et voici, je suis avec vous tous les jours, jusqu'à la fin du monde.>>
                                                Mathieu
                                                28 v 19-20
                                                </p>
                                                <a data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in="1.3"
                                                    href="{{ route('about') }}"
                                                    class="btn border border-white text-uppercase text-white font-weight-bold mt-3 bg-white text-dark">Nous
                                                    découvrir</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </section>


    <section class="section d-flex justify-content-center">
        <div class="" style="width:75%;">
            <div class="row">
                <!-- philosophy video -->
                <div class="col-lg-4 align-self-center">
                    <div class="overlay overlay-rounded mb-md-50">
                        <img class="img-fluid w-100 rounded"
                            src="{{ asset('public/front/images/dossierImage/pst-present.png') }}" alt="video-thumbnail">
                        <a class="play-icon popup-youtube centralized" href="https://www.youtube.com/watch?v=VAwZDS-bVsU"><i
                                class="ti-control-play"></i></a>
                    </div>
                </div>
                <div class="col-lg-8 d-flex flex-column justify-content-center">
                    <h2 class="section-title section-title-border-half">Présentation</h2>
                    <p>L’Église Évangélique PORTE DE VIE est un ministère prophétique avec à sa tête le prophète François Xavier ALLOKPE. Son siège est à Cotonou
                         (Bénin) précisément à Godomey PK 14. Elle a pour mandat de propager la bonne nouvelle de Jésus-Christ, de proclamer la liberté aux captifs. <br>
                         Elle dispose d'une chaîne <a href="https://www.youtube.com/watch?v=VAwZDS-bVsU">youtube</a> que vous pouvez incessamment visiter pour plus d'édification.
                        </p>

                    <div>
                        <a href="{{ route('about') }}" class="btn btn-primary py-2 mt-4"> Voir plus
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white"
                                class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Mission et vision --}}
    <section class="section d-flex justify-content-center">
        <div class="" style="width:75%;">
            <div class="row">
                <div class="col-12 text-center">
                    {{-- <h5 class="section-title-sm">Best Service</h5> --}}
                    <h2 class="section-title section-title-border">Mission & Vision</h2>
                </div>
                <div class="col-lg-8 d-flex flex-column justify-content-center align-items-center">
                    <div class="mb-40">
                        <p class="text-dark">Notre mission est de mettre en œuvre des actions d'évangélisation pour le
                            salut et la libération des âmes dans le monde entier,
                            dévoiler et briser les jougs de la sorcellerie à travers des prédications et enseignements
                            puissants, permettre aux enfants de Dieu
                            de toute la planète d'être libéré de servitude du diable, accorder une vie pleine de jouissance
                            et de liberté en Jésus-Christ.</p>
                        <p class="text-dark mb-30">Nous visons évangéliser le monde entier au travers des campagnes
                            d'évangélisation, les mass médias (la télévision, les réseaux sociaux). Ériger des églises
                            locales dans les contrées et nations. Former des disciples accomplis pour la relève et l'impact
                            de la nouvelle
                            génération. Créer des orphelinats pour l'assistance aux enfants délaissés. Créer un hôpital de
                            référence. Créer des centres agro-pastoraux, pisciculture etc...</p>
                    </div>

                </div>
                <!-- progressbar -->
                {{-- <div class="col-lg-4 d-flex justify-content-end">
                    <img src="{{ asset('/front/images/dossierImage/institut_logo.png') }}" alt="" width="300" height="300">
                </div> --}}

                {{-- <div class="d-flex justify-content-start">
                    <div>
                        <p>Mission</p>
                        <p class="text-justify">
                            Notre mission est de mettre en œuvre des actions d'évangélisation pour le
                            salut et la libération des âmes dans le monde entier,
                            dévoiler et briser les jougs de la sorcellerie à travers des prédications et enseignements
                            puissants, permettre aux enfants de Dieu
                            de toute la planète d'être libéré de servitude du diable, accorder une vie pleine de jouissance
                            et de liberté en Jésus-Christ.
                        </p>
                    </div>
                    <div></div>
                </div> --}}
            </div>
        </div>
    </section>

    <!-- service -->
    <section class="section d-flex justify-content-center">
        <div style="width:75%;">
            <div class="row justify-content-start">
                <div class="col-12 text-center">
                    {{-- <h5 class="section-title-sm">Best Service</h5> --}}
                    <h2 class="section-title section-title-border">Nos services</h2>
                </div>
                <!-- service item -->
                <div class=" row m-auto atout-item-container">
                    @forelse ($services as $service)
                        <div class="col-md-4 atout-item">
                            <div class="card h-100">
                                <img src="{{ asset('public/storage/' . $service->photo) }}" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h4 class="card-title text-center rosette-text-orange ">{{ $service->intitule }}</h4>
                                    <p class="card-text text-center">{!! Str::limit($service->description, 250, '...') !!}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                    <p class="text-center h3">
                        Retrouvé très prochainement la liste de nos services
                    </p>
                    @endforelse
                </div>
                @if(sizeof($services)>0)
                    <div class="d-flex justify-content-center container-fluid mt-4">
                        <a href="{{ route('all-services') }}" class="btn btn-primary py-2">Tous nos services</a>
                    </div>
                @endif
            </div>
        </div>
    </section>


    {{-- Activite --}}
    <section class="section d-flex justify-content-center">
        <div class="" style="width: 75%;">
            <div class="row justify-content-start">
                <div class="col-12 text-center">
                    {{-- <h5 class="section-title-sm">Best Service</h5> --}}
                    <h2 class="section-title section-title-border">Nos activités</h2>
                </div>
                <div class=" row justify-content-start">
                    @forelse ($activites as $activite)
                        <div class="col-md-4 atout-item">
                            <div class="card h-100">
                                <img src="{{ asset('public/storage/' . $activite->photo) }}" class="card-img-top"
                                    alt="">

                                <div class="card-body">
                                    <h5 class="card-title pt-3">{{ $activite->titre }}</h5>
                                    <p class="card-text mb-0">{!! Str::limit($activite->description, 100, '...') !!}</p>

                                    <div class="d-flex justify-content-between mt-2">
                                        <div>
                                            <p>Du <strong
                                                    class="fw-bold">{{ $activite->start_date ? \Carbon\Carbon::parse($activite->start_date)->format('d-m-Y') : ' ' }}</strong>
                                                au <strong
                                                    class="fw-bold">{{ $activite->end_date ? \Carbon\Carbon::parse($activite->end_date)->format('d-m-Y') : ' ' }}</strong>
                                            </p>
                                        </div>
                                        <a href="{{ route('services.show', encrypt($activite->id)) }}"
                                            class="">Voir détail
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p class="text-center h3">
                            Retrouvé très prochainement nos activités
                        </p>
                    @endforelse
                </div>
                @if(sizeof($activites)>0)
                <div class="d-flex justify-content-center container-fluid mt-4">
                    <a href="{{ route('all-activities') }}" class="btn btn-primary py-2">Toutes nos activités</a>
                </div>
                @endif


            </div>
        </div>
    </section>

    {{-- Rendez-vous --}}
    <section class="section d-flex justify-content-center">
        <div class="" style="width: 75%;">
            <div class="row justify-content-start">
                <div class="col-12 text-center">
                    {{-- <h5 class="section-title-sm">Best Service</h5> --}}
                    <h2 class="section-title section-title-border">Un rendez-vous avec nous ?</h2>
                </div>
                <div class=" row justify-content-start">

                    <div class="col-md-4 atout-item">
                        <div class="card h-100">
                            {{-- <img src="{{ asset('/storage/' .$activite->photo) }}" class="card-img-top" alt=""> --}}

                            <div class="card-body">
                                <h5 class="card-title pt-3">Rendez-vous simple</h5>
                                <p class="card-text mb-0 text-justify">
                                    Vous aimeriez voir le Prophète. Intéressez par les merveilles de Dieu ? Alors cliquez sur le lien « Je prends » pour remplir le formulaire rendez-vous ordinaire.
                                </p>

                                <div class="d-flex justify-content-end mt-4">
                                    <a href="{{ route('apointments.index') }}">Je prends
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                    {{-- Rendez-vous prophétique --}}
                    <div class="col-md-4 atout-item">
                        <div class="card h-100">
                            {{-- <img src="{{ asset('/storage/' .$activite->photo) }}" class="card-img-top" alt=""> --}}

                            <div class="card-body">
                                <h5 class="card-title pt-3">Rendez-vous prophétique</h5>
                                <p class="card-text mb-0 text-justify">
                                    Vous aimeriez voir le Prophète. Intéressez par les merveilles de Dieu ? Alors cliquez sur le lien « Je prends » pour remplir le formulaire rendez-vous prophétique. Veillez noter que ce rendez-vous est subordonné par une suscription élémentaire qui s’élève à <strong>10.000 FCFA</strong>
                                </p>

                                <div class="d-flex justify-content-end mt-4">
                                    <a href="{{ route('apointments.index') }}">Je prends
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center container-fluid mt-4">
                    <a href="{{ route('apointments.index') }}" class="btn btn-primary py-2">Je prends rendez-vous
                        maintenant</a>
                </div>
            </div>
        </div>
    </section>











    <section class="cta overlay-primary py-50 text-center text-lg-left"
        style="background-image: url({{ asset('public/front/images/background/cta.jpg') }});">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-8">
                    <h3 class="text-white">Vous pouvez nous accompagner pour plus d'impact à travers nos activités
                        spirituelles</h3>
                </div>
                <div class="col-lg-4 text-lg-right align-self-center">
                    <a href="{{ route('don') }}" class="btn btn-light kkiapay-button">Soutenez-nous ici</a>
                </div>
            </div>
        </div>
    </section>

    <script amount=5000 firstname="Esaie" lastname="TCHAGNONSI" email="esaietchagnonsi@gmail.com" position="center" theme="#032497F5" phone="97000000"
        sandbox="true" callback="{{ route('accueil') }}"
        key="51a238face61d82775a074c24111dba9108523ec" src="https://cdn.kkiapay.me/k.js">
    </script>

@endsection
