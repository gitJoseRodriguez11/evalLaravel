@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>CREAR ESTUDIANTES </span>
                    <a href="/crearstudents" class="btn btn-primary btn-sm">Volver a lista</a>
                </div>
                <div class="card-body">     
                  @if ( session('mensaje') )
                    <div class="alert alert-success">{{ session('mensaje') }}</div>
                  @endif
                  <form method="POST" action="/crearstudents">
                    @csrf
                    <input
                      type="text"
                      name="nombre"
                      placeholder="Nombre"
                      class="form-control mb-2"
                    />
                    <input
                      type="text"
                      name="rut"
                      placeholder="rut"
                      class="form-control mb-2"
                    />
                    <input
                      type="number"
                      name="f_nacimiento"
                      placeholder="Fecha Nacimiento Ejemplo 11051988"
                      class="form-control mb-2"
                    />
                    <button class="btn btn-primary btn-block" type="submit">Agregar</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection