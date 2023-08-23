@extends('Admin.Partials.template')
@section('content')
<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>Tous les messages</h4>
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0);">Messages</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0);">Tous les messages</a></li>
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
                        <h4 class="card-title">Tous les messages</h4>
                        {{-- <a href="{{ route('temoignages.create') }}" class="btn btn-primary">+ Ajouter un nouveau</a> --}}
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Téléphone</th>
                                        <th>Email</th>
                                        <th>Objet</th>
                                        <th>Message</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($messages as $message)

                                    <tr>

                                        <td>{{ $message->nom }}</td>

                                        <td>{{ $message->phone }}</td>
                                        <td>{{ $message->email }}</td>
                                        <td>{{ $message->objet }}</td>
                                        <td>{{ $message->message }}</td>
                                        <td >
                                            {{ \Carbon\Carbon::parse($message->created_at)->format('d-m-Y') }}
                                            {{-- <a href="{{ route('temoignages.edit', $temoignage->id) }}" class="btn btn-sm btn-primary "><i class="la la-pencil"></i></a> --}}
                                            {{-- <a href="#" class="btn btn-sm btn-danger ml-2"data-toggle="modal" data-target="#exampleModal"><i class="la la-trash-o"></i></a> --}}
                                             <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Suppression d'un temoignage</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                    Êtes vous sûr de vouloir supprimer ce témoignage ?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form action="{{ route('temoignages.destroy', $message->id) }}" method="POST">
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
