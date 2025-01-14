@extends('layouts.app')

@section('title', 'Lista de Viajes')

@section('content')
<h1>Lista de Viajes</h1>
<a href="{{ route('viajes.create') }}" class="btn btn-primary mb-3">Añadir Viaje</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Destino</th>
            <th>Fecha de Salida</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($viajes as $viaje)
            <tr>
                <td>{{ $viaje->destino }}</td>
                <td>{{ $viaje->fecha_salida }}</td>
                <td>
                    <a href="{{ route('viajes.show', $viaje->id) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('viajes.edit', $viaje->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('viajes.destroy', $viaje->id) }}" method="POST" style="display:inline;">
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