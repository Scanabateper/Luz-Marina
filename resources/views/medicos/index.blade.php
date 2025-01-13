<!-- Lista de Médicos -->
<h1>Lista de Médicos</h1>
<a href="{{ route('medicos.create') }}">Añadir Médico</a>
<ul>
    @foreach ($medicos as $medico)
        <li>{{ $medico->nombre }} {{ $medico->apellido }} 
            <a href="{{ route('medicos.show', $medico->id) }}">Ver</a> |
            <a href="{{ route('medicos.edit', $medico->id) }}">Editar</a> |
            <form action="{{ route('medicos.destroy', $medico->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Eliminar</button>
            </form>
        </li>
    @endforeach
</ul>