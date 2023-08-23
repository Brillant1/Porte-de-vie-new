@extends('Admin.Partials.template')
@section('content')
    <style>


            .mfp-arrow-left{
                margin-left: 300px;
            }
            .mfp-arrow-right{
                margin-right: 300px;
            }

    </style>


            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Liste des médias</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashbord</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">Médias</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">Liste des médias</a></li>
                    </ol>
                </div>
            </div>

            @if(session('success'))
                <div class="alert" style="  color: #0f5132;
                background-color: #d1e7dd;
                border-color: #badbcc;
                " >
                    <span>{{ session('success') }}</span>
                </div>
            @endif
            <div class="row">
                <div class="col-lg-12">
                    <div class="row tab-content">
                        <div id="list-view" class="tab-pane fade active show col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Liste des médias </h4>
                                    <a href="{{ route('medias.create') }}" class="btn btn-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                            <path
                                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                        </svg>
                                        Ajouter un nouveau</a>
                                </div>

                                <div class="card-body">
                                    <div class="row gallerys">
                                        @foreach ($medias as $media)
                                            <div class="col-lg-3 col-md-4 mb-4  gallery" style="height: 300px">
                                                <a href="{{ asset('storage/' . $media->url) }}"
                                                    class=" shadow-1-strong rounded mb-4" alt="image galerrie"
                                                    style="height: 300px">
                                                    <img src="{{ asset('storage/' . $media->url) }}" alt=""
                                                        style="height: 300px; width:100%;">
                                                </a>

                                                <a href="#" class="btn btn-sm btn-danger ml-2"data-toggle="modal" data-target="#exampleModal"><i class="la la-trash-o"></i></a>
                                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Suppression de média</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                        Êtes vous sûr de vouloir supprimer cet média ?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <form action="{{ route('medias.destroy', $media->id) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                                                <button type="submit" class="btn btn-primary">Confirmer</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>

                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('document').ready(function() {
                    $('.gallerys').magnificPopup({
                        type: 'image',
                        delegate: 'a',
                        gallery: {
                            enabled: true,
                        },
                        removalDelay: 300,
                        zoom: {
                            enabled: true,
                            duration: 650,
                            easing: 'ease-in-out',
                        },
                        tCounter: '%curr% of %total%'
                    })
                })
            </script>
        @endsection
