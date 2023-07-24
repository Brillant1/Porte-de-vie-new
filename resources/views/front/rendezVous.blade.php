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
                    <h2 class="mb-2">Demandez un rendez-vous et parlez nous de vos problèmes.</h2>
                    </p>
                </div>
            </div>

        </div>
        <div class="container">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active border-0" id="pills-home-tab" data-toggle="pill"
                        data-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                        aria-selected="true">Rendez-vous prophétique</button>
                </li>
                <li class="nav-item ml-2" role="presentation">
                    <button class="nav-link border-0" id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile"
                        type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Rendez-vous
                        simple</button>
                </li>

            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipiscing elit purus justo, leo aliquam bibendum lectus
                        pretium ac massa luctus, phasellus iaculis rutrum fringilla cum mauris tortor himenaeos. Vehicula
                        ultricies curabitur cum proin habitant integer
                        vulputate vestibulum mattis in erat, class hendrerit faucibus sapien urna cursus dictumst morbi
                        nascetur enim, pulvinar velit magnis orci massa viverra nunc varius venenatis sem
                    </p>
                    <form action="#" class="pt-3 rendez-vous-prophetique" method=" POST">
                        @csrf
                        <div class="row mt-3">
                            <div class="col-12 col-sm-12 col-md-6 mb-3">
                                <label for="nom">Nom et Prénom(s)<span class="text-danger fw-bold">*</span></label>
                                <input type="text" id="nom" class=" border border-1 form-control px-3"
                                    name="nom" required>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 mb-3">
                                <label for="email">Adresse mail <span
                                        class="text-danger fw-bold">(optionnel)</span></label>
                                <input type="mail" id="email" class=" border border-1 form-control" name="email">
                            </div>

                            <div class="col-12 col-lg-6 col-sm-12 col-md-6 mb-3">
                                <label for="phone">Téléphone<span class="text-danger fw-bold">*</span></label>
                                <input type="phone" id="phone" class=" border border-1 form-control" name="phone"
                                    required>
                            </div>
                            <div class="col-12 col-lg-6 col-sm-12 col-md-6 mb-3">
                                <label for="objet">Objet de votre message<span
                                        class="text-danger fw-bold">*</span></label>
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
                                <label for="message">Vous avez un message ? <span
                                        class="text-danger fw-bold">(Optionnel)</span></label>
                                <textarea name="message" id="message" cols="30" rows="10" class="border border-1 form-control"></textarea>
                            </div>

                            <div class=" d-flex justify-content-center mt-3 ml-3 w-100">
                                <input type="submit" class=" text-white bg-dark rounded p-2 px-4" value="Enrégistrer">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipiscing elit purus justo, leo aliquam bibendum lectus
                        pretium ac massa luctus, phasellus iaculis rutrum fringilla cum mauris tortor himenaeos. Vehicula
                        ultricies curabitur cum proin habitant integer
                        vulputate vestibulum mattis in erat, class hendrerit faucibus sapien urna cursus dictumst morbi
                        nascetur enim, pulvinar velit magnis orci massa viverra nunc varius venenatis sem
                    </p>
                    {{-- @if (session('success'))
                    <div class="success_message" style="display: none;">
                        <div class="alert alert-success alert-dismissible fade show container mb-5  d-flex align-items-center"
                            role="alert">
                            <h6> {{ session('success') }} </h6>
                        </div>
                    </div>
                    @endif --}}


                    <form action="#" class="pt-3 rendez-vous-simple" method="POST">
                        @csrf
                        <div class="row mt-3">
                            <div class="col-12 col-sm-12 col-md-6 mb-3">
                                <label for="nom">Nom et Prénom(s)<span class="text-danger fw-bold">*</span></label>
                                <input type="text" id="nom" class=" border border-1 form-control px-3"
                                    name="nom" required>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 mb-3">
                                <label for="email">Adresse mail <span
                                        class="text-danger fw-bold">(optionnel)</span></label>
                                <input type="mail" id="email" class=" border border-1 form-control"
                                    name="email">
                            </div>

                            <div class="col-12 col-lg-6 col-sm-12 col-md-6 mb-3">
                                <label for="phone">Téléphone<span class="text-danger fw-bold">*</span></label>
                                <input type="phone" id="phone" class=" border border-1 form-control"
                                    name="telephone" required>

                            </div>
                            <div class="col-12 col-lg-6 col-sm-12 col-md-6 mb-3">
                                <label for="objet">Objet de votre message<span
                                        class="text-danger fw-bold">*</span></label>
                                <input type="text" id="objet" class=" border border-1 form-control"
                                    name="objet" required>
                            </div>
                            <div class="col-12 col-lg-6 col-sm-12 col-md-6 mb-3">
                                <label for="date">Date souhaitée<span class="text-danger fw-bold">*</span></label>
                                <input type="date" id="date" class=" border border-1 form-control"
                                    name="date" required>
                            </div>
                            <div class="col-12 col-lg-6 col-sm-12 col-md-6 mb-3">
                                <label for="heure">Heure souhaitée<span class="text-danger fw-bold">*</span></label>
                                <input type="time" id="heure" class=" border border-1 form-control"
                                    name="heure" required>
                            </div>
                            <div class="col-12">
                                <label for="message">Vous avez un message ? <span
                                        class="text-danger fw-bold">(Optionnel)</span></label>
                                <textarea name="message" id="message" cols="30" rows="10" class="border border-1 form-control"></textarea>
                            </div>

                            <div class=" d-flex justify-content-center mt-3 ml-3 w-100">
                                <button type="submit"
                                    class=" text-white bg-dark rounded p-2 px-4 btn-rendez-vous-simple">Enrégistrer</button>
                            </div>
                        </div>
                    </form>
                    <div class="success_message" style="display: none;">Le formulaire a été soumis avec succès !</div>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function() {
            $('.rendez-vous-simple').submit(function(e) {
                e.preventDefault();
                let nom = $('.nom').val();
                telephone = $('.telephone').val();
                objet = $('.objet').val();
                message = $('.message').val();
                email = $('.email').val();
                date = $('.date').val();
                heure = $('.heure').val();
                if (nom == "" || telephone == "" || objet == "" || message == "" || email == "" || date=="" || heure=="") {
                    alert('Veuillez remplir tous les champs')
                }
                else{
                    $.ajax({
                    type: 'POST',
                    url: '{!! URL::to('storeApointment') !!}',
                    data: {
                        'nom': nom,
                        'objet': objet,
                        'message': message,
                        'email': email,
                        'telephone': telephone,
                        'date': date,
                        'heure': heure,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(data) {
                        console.log(data)
                        if(data.success){
                            $('.success_message').css('display', 'block');
                            setTimeout(() => {
                                $('.success_message').css('display', 'none');
                            }, 3000);
                        },
                    }
                })
                }
            })
        })
    </script>
@endsection
