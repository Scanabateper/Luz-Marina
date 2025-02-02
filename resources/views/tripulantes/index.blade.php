@extends('layouts.app')

@section('title', 'Lista de Tripulantes')

@section('content')
<h1>Lista de Tripulantes</h1>
<a href="{{ route('tripulantes.create') }}" class="btn btn-primary mb-3">Añadir Tripulante</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Rol</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tripulantes as $tripulante)
            <tr>
                <td>{{ $tripulante->nombre }}</td>
                <td>{{ $tripulante->rol }}</td>
                <td>
                    <a href="{{ route('tripulantes.show', $tripulante->id) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('tripulantes.edit', $tripulante->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('tripulantes.destroy', $tripulante->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection