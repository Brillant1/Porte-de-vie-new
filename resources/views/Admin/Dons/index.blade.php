@extends('Admin.Partials.template')
@section('content')
<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>Tous les dons</h4>
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0);">Dons</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0);">Tous les dons</a></li>
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
                        <h4 class="card-title">Tous les dons</h4>
                        {{-- <a href="{{ route('activites.create') }}" class="btn btn-primary">+ Ajouter un nouveau</a> --}}
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Téléphone</th>

                                        <th>Type</th>
                                        <th>Montant</th>
                                        <th>Date</th>
                                        <th>Message</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @forelse ($dons as $don)
                                   
                                    <tr>
                                        <td>{{ $don->nom.' '.$don->prenom }}</td>
                                        <td>{{ $don->telephone}}</td>
                                        <td>{{ $don->type}}</td>
                                        <td>{{ $don->price }}</td>

                                        <td>{{ \Carbon\Carbon::parse($don->created_at)->format('d-m-Y') }}</td>
                                        <td>{{ $don->message }}</td>

                                        <td class="d-flex">
                                            {{-- <a href="#" class="btn btn-sm btn-danger ml-2"data-toggle="modal" data-target="#exampleModal"><i class="la la-trash-o"></i></a> --}}
                                             <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                    Êtes vous sûr de vouloir supprimer ce don ?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form action="{{ route('activites.destroy', $don->id) }}" method="POST">
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
