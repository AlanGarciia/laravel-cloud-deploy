@extends('layouts.plantilla')

@section('titulo', 'Detalles del Cicle')

@section('contenido')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h5>{{ $cicle->name }} ({{ $cicle->code }})</h5>
        </div>
        <div class="card-body">
            <img src="{{ $cicle->image }}" class="card-img-top" alt="Imagen del ciclo">
            <p class="mt-3">{{ $cicle->description }}</p>
            <p><strong>Numero de cursos:</strong> {{ $cicle->nomCursos }}</p>
        </div>
    </div>
    <a href="{{ route('dashboard') }}" class="btn btn-secondary mt-3">Tornar</a>
</div>
@endsection
