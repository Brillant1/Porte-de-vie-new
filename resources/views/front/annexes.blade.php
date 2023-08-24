@extends('front.partials.template')
@section('content')
    <section class="page-title overlay" style="background-image: url({{ asset('public/front/images/img-fond.PNG') }});">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="text-white font-weight-bold">Nos annexes</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index-2.html">Accueil</a>
                        </li>
                        <li>Annexes</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="section d-flex justify-content-center" style="background-color: rgba(254,228,179,0.1);">
        <div class="" style="width:75%;">
            <div class="row">

                <div class="col-7 shadow p-4">
                    <div class="mb-3">
                        <h2 class="section-title section-title-border text-center">Godomey PK 14 (Siège national)</h2>
                        <div class="text-dark">
                            L’Église Évangélique PORTE DE VIE est un ministère prophétique situé à Cotonou
                            (Bénin) précisément à Godomey PK 14 von avant le cimetière en quittant cotonou
                        </div>

                        <div class=" d-flex mt-4">
                            <div class=" d-flex w-100 ">
                                <ul class="pl-0 ml-0 d-flex flex-column  w-100 ">
                                    <li class="d-flex h2 font-weight-bold"><p class="w-50 font-weight-bold h4"> Horaires : </p> <p class=" font-weight-bold h4">Programmes</p></li>
                                    <li class="d-flex"><p class="w-50 font-weight-bold">MERCREDI: 17h - 21h</p> <p>Culte Prophétique de délivrance et de guérison</p></li>
                                    <li class="d-flex"><p class="w-50 font-weight-bold">Dimanche: 09h - 13h</p> <p>Culte Prophétique d'adoration et de louanges</p></li>
                                    <li class="d-flex"><p class="w-50 font-weight-bold">Chaque dernier samedi du mois :</p> <p>Réunion des partenaires</p></li>
                                    <li class="d-flex"><p class="w-50 font-weight-bold">Chaque début de mois:</p> <p>Réveil spirituel de 04 jours</p></li>
                                    <li class="d-flex mt-2"><p class="h4 font-weight-bold">Nous contacter sur : &nbsp;&nbsp;</p><p class="font-weight-bold text-danger">(+229) 62 52 94 71 / 96 92 70 55</p></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-5 d-flex align-items-center justify-content-center">
                    <img class="w-100" src="{{ asset('public/front/images/siege_pdv.jpg') }}" alt="">
                </div>
    </section>


    <section class="section d-flex justify-content-center" style="background-color: rgba(113, 168, 50,0.06);">
        <div class="" style="width:75%;">
            <div class="row">
                <div class="col-5">
                    <div class="">
                        {{-- <img class="w-100" src="{{ asset('public/front/images/service/service-single.jpg')  }}" alt=""> --}}
                    </div>
                </div>
                <div class="col-7 shadow-lg p-5">
                    <div class="mb-40">
                        <h2 class="section-title section-title-border text-center">PORTE DE VIE BRANCHE DE TORI</h2>
                        <div class="text-dark">
                            La paroisse de Tori est une annexe de l'église PORTE DE VIE. Elle est située à 200 mètres à
                            gauche après l'église catholique de KPOVIÉ. Elle est juste à 50 mètres de la voie bitumée. <br>
                            Les programmes de culte sont les suivant:

                        </div>
                        <div class=" d-flex mt-4">
                            <div class=" d-flex w-100 ">
                                <ul class="pl-0 ml-0 d-flex flex-column  w-100 ">
                                    <li class="d-flex h2 font-weight-bold"><p class="w-50 font-weight-bold h4"> Horaires : </p> <p class=" font-weight-bold h4">Programmes</p></li>
                                    <li class="d-flex"><p class="w-50 font-weight-bold">Vendredi: 09h - 12h</p> <p>Culte Prophétique de délivrance et de guérison</p></li>
                                    <li class="d-flex"><p class="w-50 font-weight-bold">Dimanche: 09h - 12h</p> <p>Culte Prophétique d'adoration et de louanges</p></li>
                                    <li class="d-flex mt-2"><p class="h4 font-weight-bold">Nous contacter sur : &nbsp;&nbsp;</p><p class="font-weight-bold text-danger">(+229) 67 36 87 31 / 62 52 94 71</p></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="section d-flex justify-content-center" style="background-color: rgba(182, 200, 205, 0.06);">
        <div class="" style="width:75%;">
            <div class="row">
                <div class="col-7 shadow-lg p-5">
                    <div class="mb-40">
                        <h2 class="section-title section-title-border text-center">PORTE DE VIE BRANCHE DE AHOZON</h2>
                        <div class="text-dark">
                            La paroisse de AHOZON est une annexe de l'église PORTE DE VIE. Elle est située dans la première
                            von à droite après le carrefour Ahozon en venant de Pahou <br>
                            Les programmes de culte sont les suivant:
                        </div>
                        <div class=" d-flex mt-4">
                            <div class=" d-flex w-100 ">
                                <ul class="pl-0 ml-0 d-flex flex-column  w-100 ">
                                    <li class="d-flex h2 font-weight-bold"><p class="w-50 font-weight-bold h4"> Horaires : </p> <p class=" font-weight-bold h4">Programmes</p></li>
                                    <li class="d-flex"><p class="w-50 font-weight-bold">Mardi: 18h - 21h</p> <p>Culte Prophétique de délivrance et de guérison</p></li>
                                    <li class="d-flex"><p class="w-50 font-weight-bold">Jeudi: 15h - 17h</p> <p>Enseignement des femmes </p></li>
                                    <li class="d-flex"><p class="w-50 font-weight-bold">Dimanche: 09h - 12h</p> <p>Culte Prophétique d'adoration et de louanges</p></li>
                                    <li class="d-flex mt-2"><p class="h4 font-weight-bold">Nous contacter sur : &nbsp;&nbsp;</p><p class="font-weight-bold text-danger">(+229) 97 08 20 16 / 62 52 94 71</p></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="">
                        {{-- <img class="w-100" src="{{ asset('public/front/images/service/service-single.jpg')  }}" alt=""> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section d-flex justify-content-center" style="background-color: rgba(59, 61, 57, 0.06);">
        <div class="" style="width:75%;">
            <div class="row">
                <div class="col-5">
                    <div class="">
                        {{-- <img class="w-100" src="{{ asset('public/front/images/service/service-single.jpg')  }}" alt=""> --}}
                    </div>
                </div>
                <div class="col-7 shadow-lg p-5">
                    <div class="mb-40">
                        <h2 class="section-title section-title-border text-center">PORTE DE VIE SEKOU-WIBATIN</h2>
                        <div class="text-dark">
                            La paroisse de SEKOU-WIBATIN est une annexe de l'église PORTE DE VIE. Elle est située Sékou dans
                            la von opposée au Lycée agricole de Sékou <br>
                            Les programmes de culte sont les suivant:
                        </div>
                        <div class=" d-flex mt-4">
                            <div class=" d-flex w-100 ">
                                <ul class="pl-0 ml-0 d-flex flex-column  w-100 ">
                                    <li class="d-flex h2 font-weight-bold"><p class="w-50 font-weight-bold h4"> Horaires : </p> <p class=" font-weight-bold h4">Programmes</p></li>
                                    <li class="d-flex"><p class="w-50 font-weight-bold">Vendredi: 17h - 21h</p> <p>Culte Prophétique de délivrance et de guérison</p></li>
                                    <li class="d-flex"><p class="w-50 font-weight-bold">Dimanche: 09h - 12h</p> <p>Culte Prophétique d'adoration et de louanges</p></li>
                                    <li class="d-flex mt-2"><p class="h4 font-weight-bold">Nous contacter sur : &nbsp;&nbsp;</p><p class="font-weight-bold text-danger">(+229) 96 23 91 51 / 62 52 94 71</p></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
