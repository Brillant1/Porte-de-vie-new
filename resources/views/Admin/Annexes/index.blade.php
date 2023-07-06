@extends('Admin.Partials.template')
@section('content')
<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>Toutes les annexes</h4>
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0);">Annexes</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0);">Toutes les annexes</a></li>
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
                        <h4 class="card-title">Toutes les annexes</h4>
                        <a href="{{ route('annexes.create') }}" class="btn btn-primary">+ Ajouter une nouvelle</a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>Photo</th>
                                        <th>Nom</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @forelse ($annexes as $annexe)
                                    <tr>

                                        <td><img class="rounded-circle" width="35" src="{{ asset('storage/'.$annexe->photo) }}" alt=""></td>
                                        <td>{{ $annexe->nom }}</td>

                                        <td>{{ $annexe->description }}</td>
                                        <td class="d-flex">
                                            <a href="{{ route('annexes.edit', $annexe->id) }}" class="btn btn-sm btn-primary "><i class="la la-pencil"></i></a>
                                            <a href="#" class="btn btn-sm btn-danger ml-2"data-toggle="modal" data-target="#exampleModal"><i class="la la-trash-o"></i></a>
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
                                                    Êtes vous sûr de vouloir supprimer cet article ?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form action="{{ route('annexes.destroy', $annexe->id) }}" method="POST">
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
