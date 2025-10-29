@extends('layouts.plantilla')

@section('titulo')
    Crear Cicle
@endsection

@section('contenido')
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow-lg">
                <div class="card-body">
                    <h2 class="text-center mb-4">Crear Cicle</h2>

                    <form action="{{ route('cicles.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Codi del cicle:</label>
                            <input type="text" name="code" class="form-control @error('code') is-invalid @enderror" required>
                            @error('code')
                                <div class="missatgeErroni">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nom del cicle:</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" required>
                            @error('name')
                                <div class="missatgeErroni">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Descripció:</label>
                            <textarea name="description" class="form-control @error('description') is-invalid @enderror" required></textarea>
                            @error('description')
                                <div class="missatgeErroni">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Número de cursos:</label>
                            <input type="number" name="nomCursos" class="form-control @error('nomCursos') is-invalid @enderror" required>
                            @error('nomCursos')
                                <div class="missatgeErroni">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Imatge del cicle:</label>
                            <input type="text" name="image" class="form-control @error('image') is-invalid @enderror" required>
                            @error('image')
                                <div class="missatgeErroni">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Crear Cicle</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection