@extends('Admin.Partials.template')
@section('content')
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Ajouter activité</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                <li class="breadcrumb-item active"><a href="add-professor.html">Activités</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Ajout activité</a></li>
            </ol>
        </div>
    </div>
        @if(session('success'))
            <div class=" alert alert-success alert-dismissible fade show" style=" color: #0f5132 !important;
            background-color: #d1e7dd !important;
            border-color: #badbcc !important;">
                <span class="">{{ session('success') }}</span>
            </div>
        @endif

    <div class="row">
        <div class="col-xl-12 col-xxl-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Remplissez tous les champs du formulaire</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('activites.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Date de publication</label>
                                    <input type="date" class="form-control" name="publish_at" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Date de début</label>
                                    <input type="date" class="form-control" name="start_date" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Date de fin</label>
                                    <input type="date" class="form-control" name="end_date" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Lieu</label>
                                    <input class="form-control" name="zone" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Titre</label>
                                    <input type="text" class="form-control" name="titre" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group ">
                                    <label class="form-label">Photo illustrative</label>
                                    <input type="file" class=" form-control" name="photo" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" cols="30" rows="10"  id="editor" name="description" required> </textarea>
                                </div>
                            </div>



                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <button type="submit" class="btn btn-primary">Enrégistrer</button>
                                <button type="reset" class="btn btn-light">Annuler</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>

        $(document).ready(function() {
            alert('dd');
            // ClassicEditor
            //     .create(document.querySelector('#editor'))

            //     .catch(error => {
            //         console.error(error);
            //     });
        })
    </script>
@endsection
