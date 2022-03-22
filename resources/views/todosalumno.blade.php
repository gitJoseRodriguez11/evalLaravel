@extends('layouts.app')

@section('content')
<h1>Todos los Alumnos</h1>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                

                <div class="card-body">      
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($entireTable as $item)
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <td>{{ $item->nombre }}</td>
                                <td>{{ $item->descripcion }}</td>
                                <td>Acción</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                   
                {{-- fin card body --}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
