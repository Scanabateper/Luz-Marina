@extends('layouts.app')

@section('title', 'Lista de Médicos')

@section('content')
<h1>Lista de Médicos</h1>
<a href="{{ route('medicos.create') }}" class="btn btn-primary mb-3">Añadir Médico</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Fecha de Incorporación</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($medicos as $medico)
            <tr>
                <td>{{ $medico->nombre }}</td>
                <td>{{ $medico->apellido }}</td>
                <td>{{ $medico->fecha_incorporacion }}</td>
                <td>
                    <a href="{{ route('medicos.show', $medico->id) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('medicos.edit', $medico->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('medicos.destroy', $medico->id) }}" method="POST" style="display:inline;">
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