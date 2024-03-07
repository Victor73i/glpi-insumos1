@extends('layouts.app')

@section('title', 'La Lista de Equipos It')


@section('content')
    {{-- @if(count($tasks)) --}}
    <nav class="mb-4">
    </nav>
    @forelse ($equiposIt as $equipoIt)
        <div>
            <a href="{{route('equipo_its.show', [$equipoIt->id])}}">{{$equipoIt->nombre}}</a>

        </div>
    @empty

        <div>There are no equipo it!</div>
    @endforelse

    @if ($equiposIt->count())
        <nav class="mt-4">
            {{$equiposIt->links()}}
        </nav>
    @endif
@endsection
{{-- @endif --}}

