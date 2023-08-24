@extends('front.partials.template')
@section('content')

<section class="page-title overlay" style="background-image: url({{ asset('public/front/images/partenariat.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="text-white font-weight-bold">DON & PARTENARIAT</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('accueil') }}">Accueil</a>
                    </li>
                    <li>Don et partenariat</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="section d-flex justify-content-center">
    <div class="" style="width: 75%;">
        <div class="row justify-content-start">
            <div class="col-12 text-center">
                {{-- <h5 class="section-title-sm">Best Service</h5> --}}
                <h2 class="section-title section-title-border">Vous pouvez faire des dons de toute nature</h2>
            </div>
            <div class=" row justify-content-start">

                <div class="col-md-4 atout-item">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title pt-3">LES DIMES</h5>
                            <p class="card-text mb-0 text-justify">
                                La dîme c'est la dixième partie des revenus.
                                (Lévitique, 27:30) - Toute dîme de la terre, soit des récoltes de la terre, soit du fruit des arbres, appartient à l`Éternel; c`est une chose consacrée à l`Éternel.
                                La dîme est la source de bénédictions
                                (Malachie, 3:10) - Apportez à la maison du trésor toutes les dîmes, Afin qu`il y ait de la nourriture dans ma maison; Mettez-moi de la sorte à l`épreuve, Dit l`Éternel des armées. Et vous verrez si je n`ouvre pas pour vous les écluses des cieux, Si je ne répands pas sur vous la bénédiction en abondance.
                            </p>
                        </div>
                    </div>
                </div>


                {{-- Rendez-vous prophétique --}}
                <div class="col-md-4 atout-item">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title pt-3">LES OFFRANDES</h5>
                            <p class="card-text mb-0 text-justify">
                                L'offrande c'est un don de remerciement à Dieu
(Sophonie, 3:10) - D`au delà des fleuves de l`Éthiopie Mes adorateurs, mes dispersés, m`apporteront des offrandes.
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 atout-item">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title pt-3">SEMANCES</h5>
                            <p class="card-text mb-0 text-justify">
                                La semence c'est un don sacrificiel qui provoque l'ouverture des portes de bénédictions.
                                (2 Corinthiens, 9:6) - Sachez-le, celui qui sème peu moissonnera peu, et celui qui sème abondamment moissonnera abondamment.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center container-fluid mt-4">
                <a href="{{ route('don') }}" class="btn btn-primary py-2">Je fais un don</a>
            </div>
        </div>
    </div>
</section>



<section class="section d-flex justify-content-center">
    <div class="" style="width: 75%;">
        <div class="row justify-content-start">
            <div class="col-12 text-center">
                {{-- <h5 class="section-title-sm">Best Service</h5> --}}
                <h2 class="section-title section-title-border">Vous voulez devenir notre partenaire ? </h2>
            </div>
            <p class="py-2">
                C'est un don de soutien pour l'évolution de l'œuvre d'évangélisation
(Actes, 4:34) - Car il n`y avait parmi eux aucun indigent: tous ceux qui possédaient des champs ou des maisons les vendaient, apportaient le prix de ce qu`ils avaient vendu.
            </p>
            <div class=" row justify-content-start">

                <div class="col-md-4 atout-item">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title pt-3">Catégorie B</h5>
                            <p class="card-text mb-0 text-justify">
                                Ce partenariat require le paiement d'une somme de 10 000 FCFA en plus des frais de carte d'adhésion qui s'élève à 1000 FCFA.
                            </p>
                        </div>
                    </div>
                </div>


                {{-- Rendez-vous prophétique --}}
                <div class="col-md-4 atout-item">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title pt-3">Catégorie A</h5>
                            <p class="card-text mb-0 text-justify">
                                Ce partenariat require le paiement d'une somme de 20 000 FCFA en plus des frais de carte d'adhésion qui s'élève à 1000 FCFA.
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 atout-item">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title pt-3">Catégorie VIP</h5>
                            <p class="card-text mb-0 text-justify">
                                Ce partenariat require le paiement d'une somme de 50 000 FCFA en plus des frais de carte d'adhésion qui s'élève à 1000 FCFA.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mt-3 atout-item">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title pt-3">Catégorie VIP STAR</h5>
                            <p class="card-text mb-0 text-justify">
                                Ce partenariat require le paiement d'une somme de 100 000 FCFA en plus des frais de carte d'adhésion qui s'élève à 1000 FCFA.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center container-fluid mt-4">
                <a href="{{ route('partenariat') }}" class="btn btn-primary py-2">Je deviens partenaire</a>
            </div>
        </div>
    </div>
</section>
@endsection
