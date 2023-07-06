@extends('Admin.Partials.template')
@section('content')
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Editer activité</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                <li class="breadcrumb-item active"><a href="edit-professor.html">Activité</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Editer activité</a></li>
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
        <div class="col-xl-12 col-xxl-12 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('activites.update', $activite->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Date de début</label>
                                    <input type="date" name="start_date" class="form-control" value="{{ $activite->start_date }}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Date de fin</label>
                                    <input type="date" name="end_date" class="form-control"  value="{{ $activite->end_date }}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Titre</label>
                                    <input type="text" name="titre" class="form-control" value="{{ $activite->titre }}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Zone d'intervention</label>
                                    <input type="text" class="form-control" name="zone" value="{{ $activite->zone}}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Date de publication</label>
                                    <input name="publish_at" type="date" class="datepicker-default form-control" id="datepicker" value="{{ $activite->publish_at }}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label class="form-label">Image illustrative</label>
                                        <input type="file" accept=".png,.jpeg,.jpg,.avif" name="photo" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="commentmessage-input" class="form-label">Message</label>
                                    <textarea class="form-control" name="description" cols="10" rows="10" id="commentmessage-input"rows="3">{{ $activite->description }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <button type="submit" class="btn btn-light ml-2" type="reset" >Annuler</button>
                                <button type="submit" class="btn btn-primary">Enrégister les modifications</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
