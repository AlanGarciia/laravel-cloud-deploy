<!DOCTYPE html>
@extends('layouts.plantilla')

@section('titulo')
  Editar Alumne
@endsection

@section('contenido')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h2 class="text-center mb-4">Editar Alumne</h2>

                        <form action="{{route('student.update', $student->id)}}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label class="form-label">Nombre:</label>
                                <input type="text" name="name" class="form-control" value="{{$student->name}}" class="form-control" class="form-control" class="form-control @error('name') 
                                is-invalid   @enderror" required>
                                @error('name')
                                    <div class="missatgeErroni">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email:</label>
                                <input type="email" name="email" class="form-control" value="{{$student->email}}" class="form-control" class="form-control" class="form-control @error('name') 
                                is-invalid   @enderror" required>
                                @error('name')
                                    <div class="missatgeErroni">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Dirección:</label>
                                <input type="text" name="address" class="form-control" value="{{$student->address}}" class="form-control" class="form-control" class="form-control @error('name') 
                                is-invalid   @enderror" required>
                                @error('name')
                                    <div class="missatgeErroni">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Editar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
