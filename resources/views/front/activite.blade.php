@extends('front.partials.template')
@section('content')



<section class="page-title overlay" style="background-image: url({{ asset('front/images/page-img1.svg') }});">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="text-white font-weight-bold">Nos activités</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('accueil') }}">Accueil</a>
                    </li>
                    <li>Activités</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- cta -->
<section class="py-3 bg-gray">
    <div class="container">
        <div class="row py-3">
            <div class="col-lg-9 text-center text-lg-left mb-3 mb-lg-0">
                <h3>Nous menons diverses activités pour impacter et sauver des vies </h3>
            </div>
            <div class="col-lg-3 text-lg-right text-center align-self-center">
                <a href="#" class="btn btn-primary btn-sm">Nous donnez un coup de main ?</a>
            </div>
        </div>
    </div>
</section>
<!-- /cta -->

<!-- service -->
<section class="section d-flex justify-content-center">
    <div class="" style="width:75%;">
        <div class="row justify-content-start">
            <!-- service item -->
            <div class="row justify-content-start">
                @forelse ($activites as $activite)
                        <div class="col-md-4 atout-item">
                            <div class="card h-100">
                                <img src="{{ asset('storage/' . $activite->photo) }}" class="card-img-top"
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
                        Aucune activité disponible pour le moment
                    </p>
                @endforelse
            </div>
        </div>
    </div>
</section>
@endsection
