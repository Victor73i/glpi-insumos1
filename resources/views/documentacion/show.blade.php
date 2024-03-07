@extends('layouts.app')

@section('title', $documentacion->nombre)

@section('content')
    <div class="mb-4">
        <a href="{{route('documentacions.index')}}"
           class="link">Regresar a Lista de Documentacion</a>
    </div>
        <p class="parrafo">{{$documentacions->documentacion_id}}</p>

        <p class="parrafo">{{$documentacions->documentacion_nombre}}</p>
        <p class="parrafo">{{$documentacions->documentacion_descripcion}}</p>
        <p class="parrafo">{{$documentacions->documentacion_fecha_creacion}}</p>
        <p class="parrafo">{{$documentacions->documentacion_archivo}}</p>
        <p class="parrafo">{{$documentacions->estado_documentacion_nombre}}</p>
        <p class="parrafo">{{$documentacions->tipo_documentacion_nombre}}</p>
        <p class="parrafo">{{$documentacions->categoria_documentacion_nombre}}</p>
        <p class="parrafo">{{$documentacions->glpi_user_name}}</p>

        <p class="parrafo">Created {{$documentacion->created_at->diffForHumans()}} * Updated {{$documentacion->updated_at->diffForHumans()}}</p>
        <p class="mb-4">
            @if($documentacion->completado)
                <span class="completado">Completado</span>
            @else
                <span class="nocompletado">No Completado</span>
            @endif
        </p>

        <div class="flex gap-3">
            <form method="POST" action="{{route('documentacions.toggle-complete',['documentacion'=>$documentacion])}}">
                @csrf
                @method('PUT')
                <button type="submit" class="btn">
                    Mark as {{$documentacion->completado ? 'not completado' : 'completado'}}
                </button>
            </form>

            <a href="{{route('documentacions.edit', ['documentacion'=>$documentacion->id])}}"
               class="btn">EDIT</a>




            <form action="{{route('documentacions.destroy',['documentacion' =>$documentacion->id])}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn">DELETE</button>
            </form>
        </div>
        @endsection
