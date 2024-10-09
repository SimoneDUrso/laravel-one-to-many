@extends('layouts.app')

@section('content')
    <div class="container edit mt-5">
        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="list-unstyled m-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}

        <form action="{{ route('admin.projects.update', ['project' => $project->id]) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row gy-4">

                <div class="col-12 col-md-6">
                    <label for="name" class="form-label">Nome Progetto</label>
                    <input value="{{ old('name', $project->name) }}" type="text"
                        class="form-control rounded-pill @error('name') is-invalid @enderror" name="name" id="name"
                        placeholder="Nome">
                    @error('name')
                        <div class="text-danger"> {{ $message }} </div>
                    @enderror
                </div>

                <div class="col-12 col-md-6">
                    <label for="date" class="form-label">Data di Creazione</label>
                    <input value="{{ old('date', $project->date) }}" type="date" class="form-control rounded-pill"
                        name="date" id="date">
                    @error('date')
                        <div class="text-danger"> {{ $message }} </div>
                    @enderror
                </div>

                <div class="col-12 col-md-6">
                    <label for="image_project" class="form-label">Immagine progetto</label>
                    <input type="file" class="form-control rounded-pill" name="image_project" id="image_project"
                        placeholder="URL Immagine progetto">
                    @error('image_project')
                        <div class="text-danger"> {{ $message }} </div>
                    @enderror
                </div>

                <div class="col-12 col-md-6">
                    <label for="description" class="form-label">Descrizione Progetto</label>
                    <input value="{{ old('description', $project->description) }}" type="text"
                        class="form-control rounded-pill" name="description" id="description" placeholder="Tipo">
                    @error('description')
                        <div class="text-danger"> {{ $message }} </div>
                    @enderror
                </div>

                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-success btn-lg rounded-pill px-5">Salva</button>
                    <a href="{{ route('admin.projects.index') }}" class="btn btn-primary btn-lg rounded-pill">Torna
                        indietro</a>
                </div>
            </div>
        </form>
    </div>
@endsection
