@extends('front.partials.template')
@section('content')
    <section>
        <div class="hero-slider position-relative">
            <div class="hero-slider-item"
                style="background-image: url({{ asset('front/images/membre/img-pdv1.jpeg') }});" data-icon="ti-comments"
                data-text="L'église">
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
                                        <h4 class="mb-50 text-white w-75 mt-3" data-duration-in=".5" data-animation-in="fadeInLeft"
                                            data-delay-in=".9">Nous travaillons à faire de toute l'humanité des disciples de christ
                                            Jésus selon qu'il est dit: <br>
                                            << Allez, faites de toutes les nations des disciples, les baptisant au nom du Père, du
                                                Fils et du Saint-Esprit,
                                                et enseignez-leur à observer tout ce que je vous ai prescrit. <br>
                                                Et voici, je suis avec vous tous les jours, jusqu'à la fin du monde.>> Mathieu
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
            <div class="hero-slider-item py-160"
                style="background-image: url({{ asset('front/images/banner/banner-2.jpg') }});" data-icon="ti-bar-chart"
                data-text="Services">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-content">
                                <h4 class="text-uppercase mb-1" data-duration-in=".5" data-animation-in="fadeInDown"
                                    data-delay-in=".1">
                                    Get your</h4>
                                <h1 class="font-weight-bold mb-3" data-duration-in=".5" data-animation-in="fadeInDown"
                                    data-delay-in=".5">
                                    Business Consultant</h1>
                                <p class="text-dark mb-50" data-duration-in=".5" data-animation-in="fadeInDown"
                                    data-delay-in=".9">Lorem
                                    ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    <br> incididunt ut labore et dolore magna aliqua.
                                </p>
                                <a data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in="1.3"
                                    href="about-2.html" class="btn btn-outline text-uppercase">more details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-slider-item py-160"
                style="background-image: url({{ asset('front/images/banner/banner-3.jpg') }});" data-icon="ti-money"
                data-text="Chaîne télévisée">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-content">
                                <h4 class="text-uppercase mb-1" data-duration-in=".5" data-animation-in="fadeInLeft"
                                    data-delay-in=".1">
                                    Start your</h4>
                                <h1 class="font-weight-bold mb-3" data-duration-in=".5" data-animation-in="fadeInLeft"
                                    data-delay-in=".5">
                                    Future Plan</h1>
                                <p class="text-dark mb-50" data-duration-in=".5" data-animation-in="fadeInLeft"
                                    data-delay-in=".9">Lorem
                                    ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    <br> incididunt ut labore et dolore magna aliqua.
                                </p>
                                <a data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in="1.3"
                                    href="about.html" class="btn btn-outline text-uppercase">more details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-slider-item py-160"
                style="background-image: url({{ asset('front/images/banner/banner-4.jpg') }});" data-icon="ti-package"
                data-text="Human Resources">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-content">
                                <h4 class="text-uppercase mb-1" data-duration-in=".5" data-animation-in="fadeInDown"
                                    data-delay-in=".1">We
                                    are always</h4>
                                <h1 class="font-weight-bold mb-3" data-duration-in=".5" data-animation-in="fadeInDown"
                                    data-delay-in=".5">
                                    Be Inspired By Best</h1>
                                <p class="text-dark mb-50" data-duration-in=".5" data-animation-in="fadeInDown"
                                    data-delay-in=".9">Lorem
                                    ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    <br> incididunt ut labore et dolore magna aliqua.
                                </p>
                                <a data-duration-in=".5" data-animation-in="fadeInDown" data-delay-in="1.3"
                                    href="about-2.html" class="btn btn-outline text-uppercase">more details</a>
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
                <div class="col-lg-5 align-self-center">
                    <div class="overlay overlay-rounded mb-md-50">
                        <img class="img-fluid w-100 rounded"
                            src="{{ asset('front/images/about/about-video-thumbnail.jpg') }}" alt="video-thumbnail">
                        <a class="play-icon popup-youtube centralized"
                            href="https://www.youtube.com/watch?v=mr9kK0_7x08"><i class="ti-control-play"></i></a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <h2 class="section-title section-title-border-half">Présentation de l'église</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor didunt laboris nisi ut
                        aliquip
                        ex commodo consequat. duis aute irure dolor in reprehenderivoluptate velit esse cillum dolore fugiat
                        nulla pariatur.Excepteur sint ocaecat cupidatat noproident sunt culpa qui officia deserunt mollit
                        anim
                        id est laborum.</p>

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
    </section>

    {{-- <section class="about section-sm overlay" style="background-image: url({{ asset('front/images/about/about-1.jpg') }});">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 ml-auto">
                  <div class="rounded p-sm-5 px-3 py-5 bg-secondary">
                      <h3 class="section-title section-title-border-half text-white">Who We Are?</h3>
                      <p class="text-white mb-40">Excepteur sint occaecat cupidatat non proident sunt culpa qui officia deserunt mollit anim id est laborum.</p>
                      <div>
                          <ul class="d-inline-block pl-0 mr-5">
                              <li class="font-secondary mb-10 text-white">
                                  <i class="text-primary mr-2 ti-arrow-circle-right"></i>Business Services</li>
                              <li class="font-secondary mb-10 text-white">
                                  <i class="text-primary mr-2 ti-arrow-circle-right"></i>Audit &amp; Assurance</li>
                              <li class="font-secondary mb-10 text-white">
                                  <i class="text-primary mr-2 ti-arrow-circle-right"></i>IT Control Solutions</li>
                          </ul>
                          <ul class="d-inline-block pl-0">
                              <li class="font-secondary mb-10 text-white">
                                  <i class="text-primary mr-2 ti-arrow-circle-right"></i>Business Services</li>
                              <li class="font-secondary mb-10 text-white">
                                  <i class="text-primary mr-2 ti-arrow-circle-right"></i>Audit &amp; Assurance</li>
                              <li class="font-secondary mb-10 text-white">
                                  <i class="text-primary mr-2 ti-arrow-circle-right"></i>IT Control Solutions</li>
                          </ul>
                      </div>
                      <a href="service.html" class="btn btn-primary mt-4">Explore More</a>
                  </div>
              </div>
          </div>
      </div>
  </section> --}}

    <!-- service -->
    <section class="section d-flex justify-content-center">
        <div style="width:75%;">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    {{-- <h5 class="section-title-sm">Best Service</h5> --}}
                    <h2 class="section-title section-title-border">Services que nous rendons</h2>
                </div>
                <!-- service item -->
                <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                    <div class="card text-center">
                        <h4 class="card-title pt-3">Rendez-vous</h4>
                        <div class="card-img-wrapper">
                            <img class="card-img-top rounded-0" src="{{ asset('front/images/service/service-1.jpg') }}"
                                alt="service-image">
                        </div>
                        <div class="card-body p-0">
                            {{-- <i class="square-icon translateY-33 rounded ti-bar-chart"></i> --}}
                            <p class="card-text mx-2 mb-0 py-3">Lorem ipsum dolor amet consecte tur
                                adipisicing elit sed done eius mod tempor enim ad minim veniam quis
                                nostrud.</p>
                            <a href="service-single.html" class="btn btn-secondary translateY-25">Voir plus
                            </a>
                        </div>
                    </div>
                </div>
                <!-- service item -->
                <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                    <div class="card text-center">
                        <h4 class="card-title pt-3">Prière de combat</h4>
                        <div class="card-img-wrapper">
                            <img class="card-img-top rounded-0" src="{{ asset('front/images/service/service-2.jpg') }}"
                                alt="service-image">
                        </div>
                        <div class="card-body p-0">
                            {{-- <i class="square-icon translateY-33 rounded ti-thought"></i> --}}
                            <p class="card-text mx-2 mb-0 py-3">Lorem ipsum dolor amet consecte tur
                                adipisicing elit sed done eius mod tempor enim ad minim veniam quis
                                nostrud.</p>
                            <a href="service-single.html" class="btn btn-secondary translateY-25">Voir plus</a>
                        </div>
                    </div>
                </div>
                <!-- service item -->
                <div class="col-lg-4 col-sm-6">
                    <div class="card text-center">
                        <h4 class="card-title pt-3">Délivrance</h4>
                        <div class="card-img-wrapper">
                            <img class="card-img-top rounded-0" src="{{ asset('front/images/service/service-3.jpg') }}"
                                alt="service-image">
                        </div>
                        <div class="card-body p-0">
                            {{-- <i class="square-icon translateY-33 rounded ti-server"></i> --}}
                            <p class="card-text mx-2 mb-0 py-3">Lorem ipsum dolor amet consecte tur
                                adipisicing elit sed done eius mod tempor enim ad minim veniam quis
                                nostrud.</p>
                            <a href="service-single.html" class="btn btn-secondary translateY-25">Voir plus
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Activite --}}
    <section class="section d-flex justify-content-center">
        <div class="" style="width:75%;">
            <div class="row">
                <div class="col-12 text-center">
                    {{-- <h5 class="section-title-sm">Best Service</h5> --}}
                    <h2 class="section-title section-title-border">Nos activités</h2>
                </div>
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="card">
                        <div class="card-img-wrapper overlay-rounded-top">
                            <img class="card-img-top rounded-0" src="{{ asset('front/images/service/service-1.jpg') }}"
                                alt="service-image">
                        </div>
                        <div class="card-body ps-1">
                            <h4 class="card-title pt-3">Prière de délivrance</h4>
                            <p class="card-text mb-0">La semaine du 20 mai prochain serait pour nous une semaine </p>

                            <div class="d-flex justify-content-between mt-2">
                                <div>
                                    <p>Du <strong class="fw-bold">27-03-2023</strong> au <strong
                                            class="fw-bold">27-04-2023</strong></p>
                                </div>
                                <a href="service-single.html" class="">Voir détail
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



                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="card text-center">
                        <div class="card-img-wrapper overlay-rounded-top">
                            <img class="card-img-top rounded-0" src="{{ asset('front/images/service/service-4.jpg') }}"
                                alt="service-image">
                        </div>
                        <div class="card-body p-0">
                            <h4 class="card-title pt-3">Business Consulting</h4>
                            <p class="card-text mx-2 mb-0">Lorem ipsum dolor amet consecte tur adipisicing elit sed done
                                eius mod tempor enim ad minim veniam
                                quis nostrud.</p>
                            <a href="service-single.html" class="btn btn-secondary translateY-25">Voir détail</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="card text-center">
                        <div class="card-img-wrapper overlay-rounded-top">
                            <img class="card-img-top rounded-0" src="{{ asset('front/images/service/service-5.jpg') }}"
                                alt="service-image">
                        </div>
                        <div class="card-body p-0">
                            <h4 class="card-title pt-3">Valuable Idea</h4>
                            <p class="card-text mx-2 mb-0">Lorem ipsum dolor amet consecte tur adipisicing elit sed done
                                eius mod tempor enim ad minim veniam
                                quis nostrud.</p>
                            <a href="service-single.html" class="btn btn-secondary translateY-25">Voir détail</a>
                        </div>
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
                <div class="col-lg-7">
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
                <div class="col-lg-4">
                    <img src="{{ asset('front/images/about/about-3.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>





    <section class="cta overlay-primary py-50 text-center text-lg-left"
        style="background-image: url({{ asset('front/images/background/cta.jpg') }});">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-8">
                    <h3 class="text-white">Vous pouvez nous accompagner pour plus d'impact à travers nos activités
                        spirituelles</h3>
                </div>
                <div class="col-lg-4 text-lg-right align-self-center">
                    <a href="contact.html" class="btn btn-light">Soutenez-nous ici</a>
                </div>
            </div>
        </div>
    </section>


    <!-- client logo slider -->
    <section class="bg-white py-4">
        <div class="container">
            <div class="client-logo-slider align-self-center">
                <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset"
                        src="{{ asset('front/images/client-logo/client-logo-1.png') }}" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset"
                        src="{{ asset('front/images/client-logo/client-logo-2.png') }}" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset"
                        src="{{ asset('front/images/client-logo/client-logo-3.png') }}" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset"
                        src="{{ asset('front/images/client-logo/client-logo-4.png') }}" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset"
                        src="{{ asset('front/images/client-logo/client-logo-5.png') }}" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset"
                        src="{{ asset('front/images/client-logo/client-logo-1.png') }}" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset"
                        src="{{ asset('front/images/client-logo/client-logo-2.png') }}" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset"
                        src="{{ asset('front/images/client-logo/client-logo-3.png') }}" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset"
                        src="{{ asset('front/images/client-logo/client-logo-4.png') }}" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 py-3 px-2"><img class="d-unset"
                        src="{{ asset('front/images/client-logo/client-logo-5.png') }}" alt="client-logo"></a>
            </div>
        </div>
    </section>
    <!-- /client logo slider -->
@endsection
