@extends('front.partials.template')
@section('content')
<section class="page-title overlay" style="background-image: url({{ asset('front/images/background/page-title.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="text-white font-weight-bold">Nous contacter</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('accueil') }}">Accueil</a>
                    </li>
                    <li>Contact</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- contact -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5">
                <h2 class="section-title">Contactez-nous</h2>
                <ul class="pl-0">
                    <!-- contact items -->
                    <li class="d-flex mb-30">
                        <i class="round-icon mr-3 ti-mobile"></i>
                        <div class="align-self-center font-primary">
                            <p>+229 95371154</p>
                            <p>+229 91598299</p>
                        </div>
                    </li>
                    <li class="d-flex mb-30">
                        <i class="round-icon mr-3 ti-email"></i>
                        <div class="align-self-center font-primary">
                            <p>esaietchagnoni@gmail.com.com</p>
                            <p>esaietchagnoni@email.com</p>
                        </div>
                    </li>
                    <li class="d-flex mb-30">
                        <i class="round-icon mr-3 ti-map-alt"></i>
                        <div class="align-self-center font-primary">
                            <p>Ville de Godomey, Abomey-Calavi</p>
                            <p>Atlantique, Bénin</p>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- form -->
            <div class="col-lg-8 col-md-7">
                <div class="p-5 rounded box-shadow">
                    <form action="#" class="row">
                        <div class="col-12 pb-2">
                            <h4>Envoyez-nous un message</h4>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Nom" required>
                        </div>
                        <div class="col-lg-6">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Adresse email" required>
                        </div>
                        <div class="col-12">
                            <input type="text" name="subject" id="subject" class="form-control" placeholder="Sujet" required>
                        </div>
                        <div class="col-12">
                            <textarea class="form-control p-2" name="message" id="message" placeholder="Tapez votre message..." required style="height: 150px;"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit" value="send">ENVOYER</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="row">
    <div class="col-12">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1982.5910467058536!2d2.389754338792072!3d6.370476148404934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1023550538e66381%3A0x89a26d7aff083d!2sIBK%20CORPORATE!5e0!3m2!1sfr!2sbj!4v1683487105252!5m2!1sfr!2sbj" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-100"></iframe>
    </div>
</section>


@endsection
