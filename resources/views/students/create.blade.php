@extends('layouts.plantilla')
    
@section('titulo')
    Crear Alumne
@endsection

@section('contenido')
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow-lg">
                <div class="card-body">
                    <h2 class="text-center mb-4">Afegir Alumne</h2>

                    <form action="{{route('student.store')}}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Nombre:</label>
                            <input type="text" name="name" class="form-control @error('name') 
                            is-invalid   @enderror" required >
                            @error('name')
                                <div class="missatgeErroni">
                                    {{$message}}
                                </div>
                            @enderror


                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email:</label>
                            <input type="email" name="email" class="form-control" class="form-control @error('email') 
                            is-invalid   @enderror" required>
                            @error('email')
                                <div class="missatgeErroni">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Direcció:</label>
                            <input type="text" name="address" class="form-control" class="form-control" class="form-control @error('address') 
                            is-invalid   @enderror" required>
                            @error('address')
                                <div class="missatgeErroni">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Data Neixament:</label>
                            <input type="date" name="data" class="form-control" class="form-control" class="form-control @error('data') 
                            is-invalid   @enderror" required>
                            @error('data')
                                <div class="missatgeErroni">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Telefon:</label>
                            <input type="text" name="tel" class="form-control" class="form-control" class="form-control @error('tel') 
                            is-invalid   @enderror" required>
                            @error('tel')
                                <div class="missatgeErroni">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
        
    



