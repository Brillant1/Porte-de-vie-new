@extends('front.partials.template')
@section('content')
    <!-- team -->
    <section class="page-title overlay" style="background-image: url({{ asset('public/front/images/background/page-title.jpg') }});">
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
                        Vous aimeriez voir le Prophète. Intéressez par les merveilles de Dieu ? Alors cliquez sur le lien «
                        Je prends » pour remplir le formulaire rendez-vous prophétique. Veillez noter que ce rendez-vous est
                        subordonné par une suscription élémentaire qui s’élève à <strong>10.000 FCFA</strong>
                    </p>
                    <div class="success_message_prophetique alert alert-success text-center" style="display: none;">
                        <span>Votre rendez-vous a bien été soumis avec succès !</span>
                    </div>
                     <div class="error_message_prophetique alert alert-danger text-center" style="display: none;">
                        <span>La transaction a échouée, veillez ressayer plus tard. Merci !</span>
                    </div>
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
                                <input type="phone" id="telephone" class=" border border-1 form-control" name="phone"
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
                            <input type="hidden" value="prophetique" id="type">


                            <div class=" d-flex justify-content-center mt-3 ml-3 w-100">
                                <button type="reset"
                                    class=" mr-2 border-0 text-white bg-danger rounded p-2 px-4 btn-rendez-vous-simple">Annuler</button>
                                <input type="submit" class=" text-white bg-dark rounded p-2 px-4 border-0"
                                    value="Enrégistrer">
                            </div>
                        </div>
                    </form>

                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                    <p>
                        Vous aimeriez voir le Prophète. Intéressez par les merveilles de Dieu ? Alors cliquez sur le lien «
                        Je prends » pour remplir le formulaire rendez-vous ordinaire.
                    </p>

                    <div class="success_message_simple alert alert-success text-center" style="display: none;">
                        <span>Votre rendez-vous a bien été soumis avec succès !</span>
                    </div>
                    <div class="error_message_simple alert alert-danger text-center" style="display: none;">
                        <span>L'enrégistrement du rendez-vous a échoué, réessayez plus tard !</span>
                    </div>

                    <form action="#" class="pt-1 rendez-vous-simple" method="POST">
                        @csrf
                        <div class="row mt-3">
                            <div class="col-12 col-sm-12 col-md-6 mb-3">
                                <label for="nom">Nom et Prénom(s)<span class="text-danger fw-bold">*</span></label>
                                <input type="text" id="nom" class=" border border-1 form-control px-3 "
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
                                <input type="phone" id="telephone" class=" border border-1 form-control"
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
                            <div class="col-12 pt-3">
                                <label for="message">Vous avez un message ? <span
                                        class="text-danger fw-bold">(Optionnel)</span></label>
                                <textarea name="message" id="message" cols="30" rows="10" class="border border-1 form-control"></textarea>
                            </div>
                            <input type="hidden" value="simple" id="type">

                            <div class=" d-flex justify-content-center mt-3 ml-3 w-100">
                                <button type="reset"
                                    class=" mr-2 border-0 text-white bg-danger rounded p-2 px-4 btn-rendez-vous-simple">Annuler</button>
                                <button type="submit"
                                    class=" text-white bg-dark rounded p-2 px-4 btn-rendez-vous-simple border-0">Enrégistrer</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.kkiapay.me/k.js"></script>
    <script>
        $(document).ready(function() {
            $('.rendez-vous-simple').submit(function(e) {
                e.preventDefault();
                let nom = $('.rendez-vous-simple #nom').val();
                telephone = $(' .rendez-vous-simple #telephone').val();
                objet = $(' .rendez-vous-simple #objet').val();
                message = $(' .rendez-vous-simple #message').val();
                email = $(' .rendez-vous-simple #email').val();
                date = $(' .rendez-vous-simple #date').val();
                heure = $(' .rendez-vous-simple #heure').val();
                type = $(' .rendez-vous-simple #type').val();
                if (nom == "" || telephone == "" || objet == "" || message == "" || email == "" || date ==
                    "" || heure == "") {
                    alert('Veuillez remplir tous les champs')
                } else {
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
                            'type': type,
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(data) {
                            console.log(data)
                            if (data.success) {
                                $('.success_message_simple').css('display', 'block');
                                setTimeout(() => {
                                    $('.success_message_simple').css('display', 'none');
                                }, 4000);
                                $(' .rendez-vous-simple #nom').val("");
                                $(' .rendez-vous-simple #telephone').val("");
                                $(' .rendez-vous-simple #objet').val("");
                                $(' .rendez-vous-simple #message').val("");
                                $(' .rendez-vous-simple #email').val("");
                                $(' .rendez-vous-simple #date').val("");
                                $(' .rendez-vous-simple #heure').val("");
                            }else{
                                $('.error_message_simple').css(
                                        'display', 'block');
                                    setTimeout(() => {
                                        $('.error_message_simple')
                                            .css('display', 'none');
                                    }, 5000);
                            }
                        }
                    })
                }
            })

            $('.rendez-vous-prophetique').submit(function(e) {
                e.preventDefault();
                let nom = $('.rendez-vous-prophetique #nom').val();
                telephone = $(' .rendez-vous-prophetique #telephone').val();
                objet = $(' .rendez-vous-prophetique #objet').val();
                message = $(' .rendez-vous-prophetique #message').val();
                email = $(' .rendez-vous-prophetique #email').val();
                date = $(' .rendez-vous-prophetique #date').val();
                heure = $(' .rendez-vous-prophetique #heure').val();
                type = $(' .rendez-vous-prophetique #type').val();
                if (nom == "" || telephone == "" || objet == "" || message == "" || email == "" || date ==
                    "" || heure == "") {
                    alert('Veuillez remplir tous les champs')
                } else {
                    openKkiapayWidget({
                        amount: "1",
                        position: "center",
                        phone: "97000000",
                        theme: "#032497F5",
                        key: "51a238face61d82775a074c24111dba9108523ec",

                    });

                    addSuccessListener(response => {

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
                                'type': type,
                                'transactionId':response.transactionId,
                                _token: "{{ csrf_token() }}"
                            },
                            success: function(data) {
                                console.log(data)
                                if (data.success) {
                                    $('.success_message_prophetique').css(
                                        'display', 'block');
                                    setTimeout(() => {
                                        $('.success_message_prophetique')
                                            .css('display', 'none');
                                    }, 6000);
                                    $(' .rendez-vous-prophetique #nom').val("");
                                    $(' .rendez-vous-prophetique #telephone').val("");
                                    $(' .rendez-vous-prophetique #objet').val("");
                                    $(' .rendez-vous-prophetique #message').val("");
                                    $(' .rendez-vous-prophetique #email').val("");
                                    $(' .rendez-vous-prophetique #date').val("");
                                    $(' .rendez-vous-prophetique #heure').val("");
                                }else{
                                    $('.error_message_prophetique').css(
                                        'display', 'block');
                                    setTimeout(() => {
                                        $('.error_message_prophetique')
                                            .css('display', 'none');
                                    }, 5000);
                                }
                            }
                        })
                    });
                }
            })
        })
    </script>
@endsection

