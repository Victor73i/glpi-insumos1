@extends('layouts.app')



@section('title','Edit Tarea')

@section('content')

    <form method="POST" action="{{route('tareas.update', ['tarea' => $tarea->id])}}">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="id_glpi_users" >Usuario</label>
            <select style="background-color: #e3f2fd;" class="form-control" required name="id_glpi_users" id="id_glpi_users" @class(['border-red-500' => $errors->has('name')]) value="{{old('id_glpi_users')}}">
                <option value="">Seleccione un Glpi Users</option>
                @foreach ($glpi_users as $glpi)
                    <option value="{{ $glpi->id }}" {{ (old('id_glpi_users', $tarea->id_glpi_users) == $glpi->id) ? 'selected' : '' }}>{{ $glpi->name }}</option>
                @endforeach
            </select>
            @error('id_glpi_users')
            <p class="error-message">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="nombre">
                Nombre
            </label>
            <input text="text" name="nombre" id="nombre"
                   @class(['border-red-500' => $errors->has('nombre')])
                   value="{{$tarea->nombre}}"/>
            @error('nombre')
            <p class="error">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="descripcion">Descripcion</label>
            <input text="text" name="descripcion" id="descripcion"
                   @class(['border-red-500' => $errors->has('descripcion')])
                   value="{{$tarea->descripcion}}"/>
            @error('descripcion')
            <p class="error">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="fecha_asignacion">Fecha Asignacion</label>
            <input type="date" name="fecha_asignacion" id="fecha_asignacion"
                   @class(['border-red-500' => $errors->has('fecha_asignacion')])
                   value="{{$tarea->fecha_asignacion}}"/>
            @error('fecha_asignacion')
            <p class="error">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="fecha_aproximada">Fecha Aproximada</label>
            <input type="date" name="fecha_aproximada" id="fecha_aproximada"
                   @class(['border-red-500' => $errors->has('fecha_aproximada')])
                   value="{{$tarea->fecha_aproximada}}"/>
            @error('fecha_aproximada')
            <p class="error">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="fecha_terminado">Fecha Terminada</label>
            <input type="date" name="fecha_terminado" id="fecha_terminado"
                   @class(['border-red-500' => $errors->has('fecha_terminado')])
                   value="{{$tarea->fecha_terminado}}"/>
            @error('fecha_terminado')
            <p class="error">{{$message}}</p>
            @enderror
        </div><div class="mb-4">
            <label for="observacion">observacion</label>
            <input text="text" name="observacion" id="observacion"
                   @class(['border-red-500' => $errors->has('observacion')])
                   value="{{$tarea->observacion}}"/>
            @error('fecha_terminado')
            <p class="error">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="id_glpi_tickets" >Ticket</label>
            <select style="background-color: #e3f2fd;" class="form-control" required name="id_glpi_tickets" id="id_glpi_tickets" @class(['border-red-500' => $errors->has('id_glpi_tickets')])
            value="{{old('id_glpi_tickets')}}">
                <option value="">Seleccione un Glpi Tickets</option>
                @foreach ($glpi_tickets as $glpt)
                    <option value="{{ $glpt->id }}" {{ (old('id_glpi_tickets', $tarea->id_glpi_tickets) == $glpt->id) ? 'selected' : '' }}> {{ $glpt->id }} * {{$glpt->name}}</option>
                @endforeach
            </select>
            @error('id_glpi_tickets')
            <p class="error-message">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex items-center gap-2">
            <button type="submit" class="btn">Edit Tarea</button>
            <a href="{{route('tareas.index')}}" class="link">Cancel</a>
        </div>
    </form>

@endsection
