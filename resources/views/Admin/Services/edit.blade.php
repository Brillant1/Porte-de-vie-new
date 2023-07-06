@extends('Admin.Partials.template')
@section('content')
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Modifier service</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                <li class="breadcrumb-item active"><a href="edit-professor.html">Services</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Modifier service</a></li>
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
                    <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label">Intitulé du service</label>
                                    <input type="text" name="intitule" class="form-control" value="{{ $service->intitule }}" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label">Photo illustrative</label>
                                    <input type="file" name="photo" accept=".png,.jppeg,.jpg,.avif"  class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="commentmessage-input" class="form-label">Description</label>
                                    <textarea class="form-control" name="description" cols="10" rows="10" id="commentmessage-input" rows="3" required>{{ $service->description }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <button type="submit" class="btn btn-light ml-2" type="reset" >Annuler</button>
                                <button type="submit" class="btn btn-primary">Enrégister</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
