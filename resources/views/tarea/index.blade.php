@extends('layouts.app')

@section('title', 'The list of Tareas')


@section('content')
    {{-- @if(count($tasks)) --}}
    <nav class="mb-4">
        <a href="{{route('tareas.create')}}"
           class="link">ADD Tarea</a>
    </nav>
    @forelse ($tareas as $tarea)
        <div>
            <a href="{{route('tareas.show', ['tarea'=>$tarea->id])}}"
                @class(['line-through' =>$tarea->completado])>{{$tarea->nombre}}</a>

        </div>
    @empty

        <div>There are no Tareas!</div>
    @endforelse

    @if ($tareas->count())
        <nav class="mt-4">
            {{$tareas->links()}}
        </nav>
    @endif
@endsection
{{-- @endif --}}

