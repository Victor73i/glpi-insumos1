@extends('layouts.app')

@section('title', $log->observaciones)

@section('content')
    <div class="mb-4">
        <a href="{{route('logs.index')}}"
           class="link">Regresar a Lista de Logs</a>
    </div>
    <label>Observación:</label>
    <p class="parrafo">{{$log->observaciones}}</p>

    <label>Estado Log:</label>
    <p class="parrafo">{{$log->estado_log}}</p>

    <label>Fecha Inicio</label>
    <p class="parrafo">{{$log->fecha_inicio}}</p>

    @if($log->fecha_finalizacion)
        <label>Fecha finalización:</label>
        <p class="parrafo">{{$log->fecha_finalizacion}}</p>
    @endif


    <label>Ubicación:</label>
    <p class="parrafo">{{$log->glpi_locations->id}}: {{$log->glpi_locations->name}}</p>

    <label>Ticket:</label>
    <p class="parrafo">{{$log->glpi_tickets->id}}: {{$log->glpi_tickets->name}}</p>


    <label>Equipo IT:</label>
    <p class="parrafo"><ul>
    @foreach($log->equiposIt as $equipoIt)
            <li>{{$equipoIt->id}}: {{$equipoIt->nombre}}</li>
    @endforeach
    </ul>
    </p>

    <label>User:</label>
    <p class="parrafo">{{$log->glpi_users->id}}: {{$log->glpi_users->name}}</p>

    <p class="parrafo">Created {{$log->created_at->diffForHumans()}} * Updated {{$log->updated_at->diffForHumans()}}</p>
    <p></p>
    <p class="mb-4">
        @if($log->completado)
            <span class="completado">Completado</span>
        @else
            <span class="nocompletado">No Completado</span>
        @endif
    </p>

    <div class="flex gap-3">
        <form method="POST" action="{{route('logs.toggle-complete',[$log->id])}}">
            @csrf
            @method('PUT')
            <button type="submit" class="btn">
                Mark as {{$log->completado ? 'not completado' : 'completado'}}
            </button>
        </form>

        <a href="{{route('logs.edit', [$log->id])}}"
           class="btn">EDIT</a>

        <form action="{{route('logs.destroy',[$log->id])}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn">DELETE</button>
        </form>
    </div>
    @isset($debug)
        echo("<script>console.log('PHP: " . {{$debug}} . "');</script>");
    @endisset
@endsection
