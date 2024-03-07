@extends('layouts.app')

@section('title', 'The list of LOGS')


@section('content')
   {{-- @if(count($tasks)) --}}
        <nav class="mb-4">
            <a href="{{route('logs.create')}}"
               class="link">ADD LOG</a>
        </nav>
   @forelse ($logs as $log)

       <div>
        <a href="{{route('logs.show', [$log->id])}}"
            @class(['line-through' =>$log->completado])>{{$log->observaciones}}</a>

    </div>
    @empty

    <div>There are no logs!</div>
    @endforelse

   @if ($logs->count())
       <nav class="mt-4">
           {{$logs->links()}}
       </nav>
   @endif
@endsection
    {{-- @endif --}}

