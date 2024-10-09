@extends('layouts.app')

@section('content')
    <div class="container py-5 container-show">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="card shadow-lg border-0 rounded-3">
                    <div class="card-body p-5">
                        <!-- Titolo -->
                        <h2 class="display-6 text-center mb-4 text-uppercase fw-bold">Dettagli Progetto</h2>

                        <!-- Tabella dettagli progetto -->
                        <table class="table table-bordered table-hover shadow-sm rounded">
                            <tbody>
                                <tr>
                                    <th class="bg-light text-end w-50">Nome Progetto:</th>
                                    <td class="fw-bold">{{ $project->name }}</td>
                                </tr>
                                <tr>
                                    <th class="bg-light text-end">Data Progetto:</th>
                                    <td>{{ $project->date }}</td>
                                </tr>
                                <tr>
                                    <th class="bg-light text-end">Descrizione:</th>
                                    <td>{{ $project->description }}</td>
                                </tr>
                                <tr>
                                    <th class="bg-light text-end">Immagine relativa al progetto:</th>
                                    @if (Str::startsWith($project->image_project, 'https'))
                                        <td>
                                            <img src="{{ $project->image_project }}" alt="{{ $project->name }}">
                                        </td>
                                    @else
                                        <td>
                                            <img src="{{ asset('storage/' . $project->image_project) }}"
                                                alt="{{ $project->name }}" class="img-thumbnail">
                                        </td>
                                    @endif
                                </tr>
                            </tbody>
                        </table>

                        <!-- Pulsante di ritorno -->
                        <div class="text-center mt-5">
                            <a href="{{ route('admin.projects.index') }}"
                                class="btn btn-primary btn-lg rounded-pill px-4 shadow">
                                <i class="bi bi-arrow-left me-2"></i> Torna alla lista
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
