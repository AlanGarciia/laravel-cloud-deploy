@extends('layouts.plantilla')

@section('contenido')

@if(Auth::user()->email === 'admin@admin.cat')
    <div class="container mt-4">
        <h4>Tots els cicles</h4>
        <div class="row">
            @foreach($cicles as $cicle)
                <div class="col-md-4">
                    <div class="card mb-3">
                        <img src="{{ $cicle->image }}" class="card-img-top" alt="Imagen del ciclo">
                        <div class="card-body">
                            <h5 class="card-title">{{ $cicle->name }}</h5>
                            <p class="card-text">Codi: {{ $cicle->code }}</p>
                            <a href="{{ route('cicles.show', $cicle->id) }}" class="btn btn-info">Show</a>
                            <form action="{{ route('cicles.destroy', $cicle->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container mt-4">
        <h4>Tots els estudiants</h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Direcció</th>
                    <th>Telefon</th>
                    <th>Cicle</th>
                </tr>
            </thead>
            <tbody>
                @foreach($alumnes as $alumne)
                    <tr>
                        <td>{{ $alumne->id }}</td>
                        <td>{{ $alumne->name }}</td>
                        <td>{{ $alumne->email }}</td>
                        <td>{{ $alumne->address }}</td>
                        <td>{{ $alumne->tel }}</td>
                        <td>{{ $alumne->ciclo_id }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@else

    <div class="container mt-4">
        <h4>Llista de Cicles Disponibles</h4>
        <div class="row">
            @foreach($cicles as $cicle)
                <div class="col-md-4">
                    <div class="card mb-3">
                        <img src="{{ $cicle->image }}" class="card-img-top" alt="Imatge del cicle">
                        <div class="card-body">
                            <h5 class="card-title">{{ $cicle->name }}</h5>
                            <p class="card-text">Codi: {{ $cicle->code }}</p>
                            <a href="{{ route('cicles.show', $cicle->id) }}" class="btn btn-info">Show</a>
                            <form action="{{ route('cicles.matricular', $cicle->id) }}" method="POST" class="mt-2">
                                @csrf
                                <button type="submit" class="btn btn-success">Matricular-se</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container mt-4">
        <h1>Les teves dades</h1>
        @if(Auth::user()->student)
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Telefon</th>
                        <th>Adreça</th>
                        <th>Data Neixement</th>
                        <th>Cicle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ Auth::user()->student->name }}</td>
                        <td>{{ Auth::user()->student->email }}</td>
                        <td>{{ Auth::user()->student->tel }}</td>
                        <td>{{ Auth::user()->student->address }}</td>
                        <td>{{ Auth::user()->student->dataN }}</td>
                        <td>
                            @if(Auth::user()->student->cicle)
                                {{ Auth::user()->student->cicle->name }}
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        @endif
    </div>

    <div class="container mt-4">
        <h4>Cicle Matriculat</h4>
        @if(Auth::user()->student && Auth::user()->student->cicle)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ Auth::user()->student->cicle->name }}</h5>
                    <p class="card-text">Codi: {{ Auth::user()->student->cicle->code }}</p>
                    <img src="{{ Auth::user()->student->cicle->image }}" class="img-fluid" alt="Imatge del cicle">
                    <a href="{{ route('cicles.show', Auth::user()->student->cicle->id) }}" class="btn btn-info mt-2">Veure Cicle</a>
                </div>
            </div>
        @endif
    </div>

@endif
@endsection

