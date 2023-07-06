@extends('front.partials.template')
@section('content')

<!-- team -->
<section class="page-title overlay" style="background-image: url({{ asset('front/images/background/page-title.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="text-white font-weight-bold">Notre équipe</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('accueil') }}">Accueil</a>
                    </li>
                    <li>Equipe</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="mb-2">Notre équipe dirigenate</h2>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    <br> tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
            </div>
            <!-- team member -->
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card text-center">
                    <a href="team-single.html">
                        <img class="card-img-top" src="{{ asset('front/images/membre/president_appui.png') }}" alt="team-member">
                    </a>
                    <div class="card-body card-body-2 pb-0 px-4">
                        <h5 class="card-title">GBEDJI Adelphe
                        </h5>
                        <h6 class="text-color mb-30">Président du groupe d'appui aux personnes vulnérables  </h6>

                    </div>
                </div>
            </div>
            <!-- team member -->
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card text-center">
                    <a href="team-single.html">
                        <img class="card-img-top" src="{{ asset('front/images/membre/president_deuteronome.png') }}" alt="team-member">
                    </a>
                    <div class="card-body card-body-2 pb-0 px-4">
                        <h5 class="card-title">HOUNGBO Elise</h5>
                        <h6 class="text-color mb-30">Présidente du groupe Deutéronome</h6>

                    </div>
                </div>
            </div>
            <!-- team member -->
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card text-center">
                    <a href="team-single.html">
                        <img class="card-img-top" src="{{ asset('front/images/membre/pr_artisan.png') }}" alt="team-member">
                    </a>
                    <div class="card-body card-body-2 pb-0 px-4">
                        <h5 class="card-title">BESSAN Amen
                        </h5>
                        <h6 class="text-color mb-30">Président du groupement des artisans

                        </h6>

                    </div>
                </div>
            </div>
            <!-- team member -->
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card text-center">
                    <a href="team-single.html">
                        <img class="card-img-top" src="{{ asset('front/images/membre/president_sentinelle.png') }}" alt="team-member">
                    </a>
                    <div class="card-body card-body-2 pb-0 px-4">
                        <h5 class="card-title">ALLOKPE Félix</h5>
                        <h6 class="text-color mb-30">President du groupe Sentinelles</h6>

                    </div>
                </div>
            </div>
            <!-- team member -->
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card text-center">
                    <a href="team-single.html">
                        <img class="card-img-top" src="{{ asset('front/images/membre/SG.png') }}" alt="team-member">
                    </a>
                    <div class="card-body card-body-2 pb-0 px-4">
                        <h5 class="card-title">AMETODE Junior</h5>
                        <h6 class="text-color mb-30">Sécrétaire Général</h6>

                    </div>
                </div>
            </div>
            <!-- team member -->
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card text-center">
                    <a href="team-single.html">
                        <img class="card-img-top" src="{{ asset('front/images/membre/pr_enfant.png') }}" alt="team-member">
                    </a>
                    <div class="card-body card-body-2 pb-0 px-4">
                        <h5 class="card-title">AHOUANDJINOU Mathieu</h5>
                        <h6 class="text-color mb-30">Président du ministère des enfants</h6>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card text-center">
                    <a href="team-single.html">
                        <img class="card-img-top" src="{{ asset('front/images/membre/pr_interprete.png') }}" alt="team-member">
                    </a>
                    <div class="card-body card-body-2 pb-0 px-4">
                        <h5 class="card-title">TCHASSOU Sandra</h5>
                        <h6 class="text-color mb-30">Presidente du groupe des interprètes</h6>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card text-center">
                    <a href="team-single.html">
                        <img class="card-img-top" src="{{ asset('front/images/membre/pr_musical.png') }}" alt="team-member">
                    </a>
                    <div class="card-body card-body-2 pb-0 px-4">
                        <h5 class="card-title">NATO Ezehiel</h5>
                        <h6 class="text-color mb-30">Président du groupe musical Ebenezer</h6>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /team -->

<!-- cta -->
<section class="cta overlay-primary py-50" style="background-image: url({{ asset('front/images/background/cta.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 text-center text-lg-left mb-4 mb-lg-0">
                <h3 class="text-white">Prendre un rendez-vous avec nous</h3>
                <p class="text-white mb-0">Pour tous vos problèmes, vous pouvez prendre rendez-vous avec nous.</p>
            </div>
            <div class="col-lg-3 text-lg-right text-center align-self-center">
                <a href="contact.html" class="btn btn-light">Réserver maintenant</a>
            </div>
        </div>
    </div>
</section>
@endsection
