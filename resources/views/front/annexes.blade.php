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

{{-- @foreach ($annexes as $annexe) --}}

    {{-- @php
        $color = ["rgba(254,228,179,0.1)","rgba(113, 168, 50,0.06)", "rgba(255, 255, 255,0.06)"  ]
    @endphp --}}
    <section class="section d-flex justify-content-center" style="background-color: rgba(254,228,179,0.1);" >
        <div class="" style="width:75%;">
            <div class=" d-flex justify-content-between">
                <div class="col-12 text-center">
                    {{-- <h5 class="section-title-sm">Best Service</h5> --}}
                </div>
                <div class="col-lg-7">
                    <div class="mb-40">
                    <h2 class="section-title section-title-border text-center">Godomey Cocotomey</h2>
                        <div class="text-dark">
                            Lorem ipsum dolor sit amet consectetur adipiscing elit ut fermentum tristique, magna nisi accumsan dictum conubia nibh sollicitudin gravida dignissim nunc mi, sed libero tempus quis id inceptos fringilla curae phasellus.
                            Nisl ut sapien leo libero quisque cursus tincidunt cras habitant imperdiet taciti lacus,
                            sollicitudin pulvinar tortor nam quis sagittis mollis pellentesque nibh accumsan auctor. At tempus venenatis maecenas per curae rutrum tincidunt, ad interdum malesuada congue nec curabitur conubia augue
                        </div>
                    </div>
                </div>
                <!-- progressbar -->
                <div class="col-lg-4">
                    <img class="" src="{{ asset('front/images/service/service-single.jpg')  }}" alt="">
                </div>
            </div>
        </div>
    </section>
{{-- @endforeach --}}

@endsection
