@extends('Admin.Partials.template')
@section('content')
<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>Toutes les activités</h4>
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0);">Activités</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0);">Toutes les activités</a></li>
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
                        <h4 class="card-title">Toutes les activités</h4>
                        <a href="{{ route('activites.create') }}" class="btn btn-primary">+ Ajouter un nouveau</a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>Photo</th>
                                        <th>Titre</th>
                                        <th>Date de début</th>
                                        <th>Date de fin</th>
                                        <th>Lieu</th>
                                        <th>Contenu</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @forelse ($activites as $activite)
                                    <tr>

                                        <td><img class="rounded-circle" width="35" src="{{ asset('storage/'.$activite->photo) }}" alt=""></td>

                                        <td>{{ $activite->titre }}</td>
                                        <td>{{ \Carbon\Carbon::parse($activite->start_date)->format('d-m-Y') }}</td>
                                        <td>{{ \Carbon\Carbon::parse($activite->end_date)->format('d-m-Y') }}</td>

                                        <td>{{ $activite->zone }}</td>
                                        <td>{{ $activite->description }}</td>
                                        <td class="d-flex">
                                            <a href="{{ route('activites.edit', $activite->id) }}" class="btn btn-sm btn-primary "><i class="la la-pencil"></i></a>
                                            <a href="#" class="btn btn-sm btn-danger ml-2"data-toggle="modal" data-target="#exampleModal"><i class="la la-trash-o"></i></a>
                                             <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Suppression d'activité</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                    Êtes vous sûr de vouloir supprimer cet article ?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form action="{{ route('activites.destroy', $activite->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                                            <button type="submit" class="btn btn-primary">Confirmer</button>
                                                        </form>

                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty

                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
