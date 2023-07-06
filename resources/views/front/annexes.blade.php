@extends('front.partials.template')
@section('content')



<section class="page-title overlay" style="background-image: url({{ asset('front/images/background/page-title.jpg') }});">
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
<section class="section d-flex justify-content-center">
    <div class="" style="width:75%;">
        <div class="row">
            <div class="col-12 text-center">
                {{-- <h5 class="section-title-sm">Best Service</h5> --}}
            </div>
            <div class="col-lg-7">
                <div class="mb-40">
                <h2 class="section-title section-title-border text-center">Annexe de Abomey-Calavi</h2>

                    <p class="text-dark">Notre mission est de mettre en œuvre des actions d'évangélisation pour le salut et la libération des âmes dans le monde entier,
                        dévoiler et briser les jougs de la sorcellerie à travers des prédications et enseignements puissants, permettre aux enfants de Dieu
                        de toute la planète d'être libéré de servitude du diable, accorder une vie pleine de jouissance et de liberté en Jésus-Christ.</p>
                    <p class="text-dark mb-30">Nous visons évangéliser le monde entier au travers des campagnes d'évangélisation, les mass médias (la télévision, les réseaux sociaux). Ériger des églises
                        locales dans les contrées et nations. Former des disciples accomplis pour la relève et l'impact de la nouvelle
                        génération. Créer des orphelinats pour l'assistance aux enfants délaissés. Créer un hôpital de référence. Créer des centres agro-pastoraux, pisciculture etc...</p>
                </div>

            </div>
            <!-- progressbar -->
            <div class="col-lg-4">
               <img src="{{ asset('front/images/about/about-3.jpg') }}" alt="">
            </div>
        </div>
    </div>
</section>
<section class="section d-flex justify-content-center" style="background-color: rgba(254,228,179,0.1);">
    <div class="" style="width:75%;">
        <div class="row">
            <div class="col-12 text-center">
                {{-- <h5 class="section-title-sm">Best Service</h5> --}}
            </div>
            <div class="col-lg-4 ">
                <img src="{{ asset('front/images/about/about-3.jpg') }}" alt="">
             </div>
            <div class="col-lg-7 offset-1">
                <div class="mb-40">
                <h2 class="section-title section-title-border text-center">Annexe de Godomey Cococodji</h2>

                    <p class="text-dark">Notre mission est de mettre en œuvre des actions d'évangélisation pour le salut et la libération des âmes dans le monde entier,
                        dévoiler et briser les jougs de la sorcellerie à travers des prédications et enseignements puissants, permettre aux enfants de Dieu
                        de toute la planète d'être libéré de servitude du diable, accorder une vie pleine de jouissance et de liberté en Jésus-Christ.</p>
                    <p class="text-dark mb-30">Nous visons évangéliser le monde entier au travers des campagnes d'évangélisation, les mass médias (la télévision, les réseaux sociaux). Ériger des églises
                        locales dans les contrées et nations. Former des disciples accomplis pour la relève et l'impact de la nouvelle
                        génération. Créer des orphelinats pour l'assistance aux enfants délaissés. Créer un hôpital de référence. Créer des centres agro-pastoraux, pisciculture etc...</p>
                </div>

            </div>
            <!-- progressbar -->
        </div>
    </div>
</section>

<section class="section d-flex justify-content-center" style="background-color: rgba(113, 168, 50,0.06);">
    <div class="" style="width:75%;">
        <div class="row">
            <div class="col-12 text-center">
                {{-- <h5 class="section-title-sm">Best Service</h5> --}}
            </div>
            <div class="col-lg-7">
                <div class="mb-40">
                <h2 class="section-title section-title-border text-center">Annexe de Cotonou Fifadji</h2>

                    <p class="text-dark">Notre mission est de mettre en œuvre des actions d'évangélisation pour le salut et la libération des âmes dans le monde entier,
                        dévoiler et briser les jougs de la sorcellerie à travers des prédications et enseignements puissants, permettre aux enfants de Dieu
                        de toute la planète d'être libéré de servitude du diable, accorder une vie pleine de jouissance et de liberté en Jésus-Christ.</p>
                    <p class="text-dark mb-30">Nous visons évangéliser le monde entier au travers des campagnes d'évangélisation, les mass médias (la télévision, les réseaux sociaux). Ériger des églises
                        locales dans les contrées et nations. Former des disciples accomplis pour la relève et l'impact de la nouvelle
                        génération. Créer des orphelinats pour l'assistance aux enfants délaissés. Créer un hôpital de référence. Créer des centres agro-pastoraux, pisciculture etc...</p>
                </div>

            </div>
            <!-- progressbar -->
            <div class="col-lg-4">
               <img src="{{ asset('front/images/about/about-3.jpg') }}" alt="">
            </div>
        </div>
    </div>
</section>
@endsection
