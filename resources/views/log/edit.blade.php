@extends('layouts.app')



@section('title','Edit LOG')

@section('content')

    <form method="POST" action="{{route('logs.update', [$log->id])}}">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="observaciones">
                Observaciones
            </label>
            <input text="text" name="observaciones" id="observaciones"
                   @class(['border-red-500' => $errors->has('observaciones')])
                   value="{{$log->observaciones}}"/>
            @error('observaciones')
            <p class="error">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="id_estado_log">Estado</label>
            <select name="id_estado_log" id="id_estado_log"
                    @class(['border-red-500' => $errors->has('id_estado_log')])
                    value="{{$log->id_estado_log}}" >
                @foreach ($id_estado_logs as $id_estado_log)
                    <option value="{{$id_estado_log->id}}">{{ $id_estado_log->id }}: {{$id_estado_log->nombre}}</option>
                @endforeach
            </select>
            @error('id_estado_log')
            <p class="error">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="fecha_inicio">Fecha Inicio</label>
            <input type="date" name="fecha_inicio" id="fecha_inicio"
                   @class(['border-red-500' => $errors->has('fecha_inicio')])
                   value="{{$log->fecha_inicio}}"/>
            @error('fecha_inicio')
            <p class="error">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="fecha_finalizacion">Fecha Finalizacion</label>
            <input type="date" name="fecha_finalizacion" id="fecha_finalizacion"
                   @class(['border-red-500' => $errors->has('fecha_finalizacion')])
                   value="{{$log->fecha_finalizacion}}"/>
            @error('fecha_finalizacion')
            <p class="error">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="id_glpi_locations">Ubicacion</label>
            <select name="id_glpi_locations" id="id_glpi_locations"
                    @class(['border-red-500' => $errors->has('id_glpi_locations')])
                    value="{{$log->id_glpi_locations}}" >
                @foreach ($id_glpi_locations as $id_glpi_location)
                    <option value="{{$id_glpi_location->id}}">{{ $id_glpi_location->id }}: {{$id_glpi_location->name}}</option>
                @endforeach
            </select>
            @error('id_glpi_locations')
            <p class="error">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="id_glpi_tickets">Ticket</label>
            <select name="id_glpi_tickets" id="id_glpi_tickets"
                    @class(['border-red-500' => $errors->has('id_glpi_tickets')])
                    value="{{$log->id_glpi_tickets}}" >
                @foreach ($id_glpi_tickets as $id_glpi_ticket)
                    <option value="{{$id_glpi_ticket->id}}">{{ $id_glpi_ticket->id }}: {{$id_glpi_ticket->name}}</option>
                @endforeach
            </select>
            @error('id_glpi_tickets')
            <p class="error">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="id_equipo_computo[]">Equipo Computo</label>
            <select name="id_equipo_computo[]" id="id_equipo_computo"
                    @class(['border-red-500' => $errors->has('id_equipo_computo')])
                    value="{{$log->id_equipo_computo}}" multiple="multiple">
                @foreach ($equipos_it as $equipo_it)
                    @if($log->equiposIt->contains('id', $equipo_it->id))
                        <option value="{{$equipo_it->id}}" selected="">{{ $equipo_it->id }}: {{$equipo_it->nombre}}</option>
                    @else
                        <option value="{{$equipo_it->id}}">{{ $equipo_it->id }}: {{$equipo_it->nombre}}</option>
                    @endif
                @endforeach

            </select>
            @error('id_equipo_computo')
            <p class="error">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="id_glpi_users">Usuario</label>
            <select name="id_glpi_users" id="id_glpi_users"
                    @class(['border-red-500' => $errors->has('id_glpi_users')])
                    value="{{$log->id_glpi_users}}" >
                @foreach ($id_glpi_users as $id_glpi_user)
                    <option value="{{$id_glpi_user->id}}">{{ $id_glpi_user->id }}: {{$id_glpi_user->name}}</option>
                @endforeach
            </select>

            @error('id_glpi_users')
            <p class="error">{{$message}}</p>
            @enderror
        </div>


        <div class="flex items-center gap-2">
            <button type="submit" class="btn">Edit LOG</button>
            <a href="{{route('logs.index')}}" class="link">Cancel</a>
        </div>
    </form>

@endsection
