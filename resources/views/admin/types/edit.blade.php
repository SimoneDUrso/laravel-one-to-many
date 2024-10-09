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

        <form action="{{ route('admin.types.update', ['type' => $type->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row gy-4">

                <div class="col-12 col-md-6">
                    <label for="name" class="form-label">Nome Tipo</label>
                    <input value="{{ old('name', $type->name) }}" type="text"
                        class="form-control rounded-pill @error('name') is-invalid @enderror" name="name" id="name"
                        placeholder="Nome">
                    @error('name')
                        <div class="text-danger"> {{ $message }} </div>
                    @enderror
                </div>

                <div class="col-12 col-md-6">
                    <label for="date" class="form-label">Data di Creazione</label>
                    <input value="{{ old('date', $type->date) }}" type="date" class="form-control rounded-pill"
                        name="date" id="date">
                    @error('date')
                        <div class="text-danger"> {{ $message }} </div>
                    @enderror
                </div>

                {{-- Tipo progetto --}}
                <div class="col-md-6">
                    <div class="mb-4">
                        <label for="" class="form-label">Seleziona tipo progetto</label>
                        <select name="type_id" id="type" class="form-select form-select-lg">
                            <option value="">-Seleziona un tipo-</option>
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}" @selected($type->id == old('type_id'))>{{ $type->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('type_id')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <label for="image_type" class="form-label">Immagine progetto</label>
                    <input type="file" class="form-control rounded-pill" name="image_type" id="image_type"
                        placeholder="URL Immagine progetto">
                    @error('image_type')
                        <div class="text-danger"> {{ $message }} </div>
                    @enderror
                </div>

                <div class="col-12 col-md-6">
                    <label for="description" class="form-label">Descrizione Progetto</label>
                    <input value="{{ old('description', $type->description) }}" type="text"
                        class="form-control rounded-pill" name="description" id="description" placeholder="Tipo">
                    @error('description')
                        <div class="text-danger"> {{ $message }} </div>
                    @enderror
                </div>

                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-success btn-lg rounded-pill px-5">Salva</button>
                    <a href="{{ route('admin.types.index') }}" class="btn btn-primary btn-lg rounded-pill">Torna
                        indietro</a>
                </div>
            </div>
        </form>
    </div>
@endsection
