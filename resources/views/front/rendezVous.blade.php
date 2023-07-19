@extends('front.partials.template')
@section('content')
    <!-- team -->
    <section class="page-title overlay" style="background-image: url({{ asset('front/images/background/page-title.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="text-white font-weight-bold">Rendez-vous</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{ route('accueil') }}">Accueil</a>
                        </li>
                        <li>Rendez-vous</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="mb-2">Prenez un rendez-vous pour nous parler de tous vos problèmes</h2>
                    <p class="mb-5"> Il faut noter que les rendez-vous prophétiques sont payants
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active border-0" id="pills-home-tab" data-toggle="pill" data-target="#pills-home"
                        type="button" role="tab" aria-controls="pills-home" aria-selected="true">Rendez-vous prophétique</button>
                </li>
                <li class="nav-item ml-2" role="presentation">
                    <button class="nav-link border-0" id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile"
                        type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Rendez-vous simple</button>
                </li>

            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <form action="#" class="pt-3 rendez-vous-prophetique">
                        <div class="row mt-3">
                            <div class="col-12 col-sm-12 col-md-6 mb-3">
                                <label for="nom">Nom et Prénom(s)<span class="text-danger fw-bold">*</span></label>
                                <input type="text" id="nom" class=" border border-1 form-control px-3" name="nom"
                                    required>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 mb-3">
                                <label for="email">Adresse mail <span class="text-danger fw-bold">(optionnel)</span></label>
                                <input type="mail" id="email" class=" border border-1 form-control" name="email"
                                    >
                            </div>

                            <div class="col-12 col-lg-6 col-sm-12 col-md-6 mb-3">
                                <label for="phone">Téléphone<span class="text-danger fw-bold">*</span></label>
                                <input type="phone" id="phone" class=" border border-1 form-control" name="phone"
                                    required>
                            </div>
                            <div class="col-12 col-lg-6 col-sm-12 col-md-6 mb-3">
                                <label for="objet">Objet de votre message<span class="text-danger fw-bold">*</span></label>
                                <input type="text" id="objet" class=" border border-1 form-control" name="objet"
                                    required>
                            </div>
                            <div class="col-12 col-lg-6 col-sm-12 col-md-6 mb-3">
                                <label for="date">Date souhaitée<span class="text-danger fw-bold">*</span></label>
                                <input type="date" id="date" class=" border border-1 form-control" name="date"
                                    required>
                            </div>
                            <div class="col-12 col-lg-6 col-sm-12 col-md-6 mb-3">
                                <label for="heure">Heure souhaitée<span class="text-danger fw-bold">*</span></label>
                                <input type="time" id="heure" class=" border border-1 form-control" name="heure"
                                    required>
                            </div>
                            <div class="col-12">
                                <label for="message">Vous avez un message ? <span class="text-danger fw-bold">(Optionnel)</span></label>
                                <textarea name="message" id="message" cols="30" rows="10" class="border border-1 form-control"></textarea>
                            </div>

                            <div class=" d-flex justify-content-center mt-3 ml-3 w-100">
                                <input type="submit" class=" text-white bg-dark rounded p-2 px-4" value="Enrégistrer">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show container mb-5  d-flex align-items-center"  role="alert">
                            <h6> {{ session('success') }} </h6>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                    <form action="{{ route('apointments.store') }}" class="pt-3 rendez-vous-simple" method="POST">
                        @csrf
                        <div class="row mt-3">
                            <div class="col-12 col-sm-12 col-md-6 mb-3">
                                <label for="nom">Nom et Prénom(s)<span class="text-danger fw-bold">*</span></label>
                                <input type="text" id="nom" class=" border border-1 form-control px-3" name="nom"
                                    required>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 mb-3">
                                <label for="email">Adresse mail <span class="text-danger fw-bold">(optionnel)</span></label>
                                <input type="mail" id="email" class=" border border-1 form-control" name="email"
                                    >
                            </div>

                            <div class="col-12 col-lg-6 col-sm-12 col-md-6 mb-3">
                                <label for="phone">Téléphone<span class="text-danger fw-bold">*</span></label>
                                <input type="phone" id="phone" class=" border border-1 form-control" name="telephone"
                                    required>

                            </div>
                            <div class="col-12 col-lg-6 col-sm-12 col-md-6 mb-3">
                                <label for="objet">Objet de votre message<span class="text-danger fw-bold">*</span></label>
                                <input type="text" id="objet" class=" border border-1 form-control" name="objet"
                                    required>
                            </div>
                            <div class="col-12 col-lg-6 col-sm-12 col-md-6 mb-3">
                                <label for="date">Date souhaitée<span class="text-danger fw-bold">*</span></label>
                                <input type="date" id="date" class=" border border-1 form-control" name="date"
                                    required>
                            </div>
                            <div class="col-12 col-lg-6 col-sm-12 col-md-6 mb-3">
                                <label for="heure">Heure souhaitée<span class="text-danger fw-bold">*</span></label>
                                <input type="time" id="heure" class=" border border-1 form-control" name="heure"
                                    required>
                            </div>
                            <div class="col-12">
                                <label for="message">Vous avez un message ? <span class="text-danger fw-bold">(Optionnel)</span></label>
                                <textarea name="message" id="message" cols="30" rows="10" class="border border-1 form-control"></textarea>
                            </div>

                            <div class=" d-flex justify-content-center mt-3 ml-3 w-100">
                                <input type="submit" class=" text-white bg-dark rounded p-2 px-4" value="Enrégistrer">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    @endsection
