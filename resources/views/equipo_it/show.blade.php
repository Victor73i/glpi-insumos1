@extends('layouts.app')

@section('title', $equipoIt->nombre)

@section('content')
    <div class="mb-4">
        <a href="{{route('equipo_its.index')}}"
           class="link">Regresar a Lista de EquipoIt</a>
    </div>

        <p class="parrafo">{{$equipoIt->nombre}}</p>
        <p class="parrafo">{{$equipoIt->descripcion}}</p>
    @if($equipoIt->glpiComputers)
        <p class="parrafo">{{$equipoIt->glpiComputers->name}}</p>
    @elseif($equipoIt->glpiPdus)
        <p class="parrafo">{{$equipoIt->glpiPdus->name}}</p>
    @else
        <p class="parrafo">{{$equipoIt->glpiPrinters->name}}</p>
    @endif
        <p class="parrafo">{{$equipoIt->type}}</p>

        <p class="parrafo">Created {{$equipoIt->created_at->diffForHumans()}} *
            Updated {{$equipoIt->updated_at->diffForHumans()}}</p>

    @endsection
