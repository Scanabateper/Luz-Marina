@extends('layouts.app')

@section('title', 'Lista de Rescates')

@section('content')
<h1>Lista de Rescates</h1>
<a href="{{ route('rescates.create') }}" class="btn btn-primary mb-3">Añadir Rescate</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Fecha</th>
            <th>Lugar</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($rescates as $rescate)
            <tr>
                <td>{{ $rescate->fecha }}</td>
                <td>{{ $rescate->lugar }}</td>
                <td>
                    <a href="{{ route('rescates.show', $rescate->id) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('rescates.edit', $rescate->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('rescates.destroy', $rescate->id) }}" method="POST" style="display:inline;">
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