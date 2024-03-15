@extends('layouts.app')

@section('title', 'La Lista de Documentacion')


@section('content')
    {{-- @if(count($tasks)) --}}
    <nav class="mb-4">
        <a href="{{route('documentacions.create')}}"
           class="link">ADD Documentacion</a>
    </nav>
    @forelse ($documentacions as $documentacion)
        <div>
            <a href="{{route('documentacions.show', ['documentacion'=>$documentacion->id])}}"
                @class(['line-through' =>$documentacion->completado])>{{$documentacion->nombre}}</a>

        </div>
    @empty

        <div>There are no Documentacion!</div>
    @endforelse

    @if ($documentacions->count())
        <nav class="mt-4">
            {{$documentacions->links()}}
        </nav>
    @endif
@endsection
{{-- @endif --}}

<div class="col-lg-auto">
    <button class="btn btn-primary createTask" type="button" data-bs-toggle="modal" data-bs-target="#createTask">
        <i class="ri-add-fill align-bottom"></i> Agregar Documento
    </button>
</div>
