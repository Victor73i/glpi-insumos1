@extends('layouts.app')



@section('title','Agregar Tarea')

@section('content')

    <form method="POST" action="{{route('tareas.store')}}">
        @csrf
        <div class="mb-4">
            <label for="id_glpi_users" >GLPI USUARIO</label>
            <select style="background-color: #e3f2fd;" class="form-control" required name="id_glpi_users" id="id_glpi_users" @class(['border-red-500' => $errors->has('name')]) value="{{old('id_glpi_users')}}">
                <option value="">Seleccione un GLPI USUARIO</option>
                @foreach ($glpi_users as $glpi)
                    <option value="{{ $glpi->id }}">{{ $glpi->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="nombre">
                Nombre
            </label>
            <input text="text" name="nombre" id="nombre"
                   @class(['border-red-500' => $errors->has('nombre')])
                   value="{{ old('nombre')}}"/>
            @error('nombre')
            <p class="error">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="descripcion">Descripcion</label>
            <input text="text" name="descripcion" id="descripcion"
                   @class(['border-red-500' => $errors->has('descripcion')])
                   value="{{ old('descripcion')}}"/>
            @error('descripcion')
            <p class="error">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="fecha_asignacion">Fecha Asignacion</label>
            <input type="date" name="fecha_asignacion" id="fecha_asignacion"
                   @class(['border-red-500' => $errors->has('fecha_aproximada')])
                   value="{{ old('fecha_aproximada') }}"/>
            @error('fecha_aproximada')
            <p class="error">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="fecha_aproximada">Fecha Aproximada</label>
            <input type="date" name="fecha_aproximada" id="fecha_aproximada"
                   @class(['border-red-500' => $errors->has('fecha_aproximada')])
                   value="{{ old('fecha_aproximada') }}"/>
            @error('fecha_aproximada')
            <p class="error">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="fecha_terminado">Fecha Terminada</label>
            <input type="date" name="fecha_terminado" id="fecha_terminado"
                   @class(['border-red-500' => $errors->has('fecha_terminado')])
                   value="{{ old('fecha_terminado') }}"/>
            @error('fecha_terminado')
            <p class="error">{{$message}}</p>
            @enderror
        </div><div class="mb-4">
            <label for="observacion">Observacion</label>
            <input text="text" name="observacion" id="observacion"

                   value="{{ old('observacion') }}"/>

        </div>

        <div class="mb-4">
            <label for="id_glpi_tickets" >GLPI Tickets</label>
            <select style="background-color: #e3f2fd;" class="form-control"  name="id_glpi_tickets" id="id_glpi_tickets"  value="{{old('id_glpi_tickets')}}">
                <option value="">Seleccione un GLPI Tickets</option>
                @foreach ($glpi_tickets as $glpt)

                    <option value="{{ $glpt->id }}">{{$glpt->id}} * {{ $glpt->name }}</option>
                @endforeach

            </select>
        </div>
        <div class="flex items-center gap-2">
            <button type="submit" class="btn">Add Tarea</button>
            <a href="{{route('tareas.index')}}" class="link">Cancel</a>
        </div>
    </form>


@endsection
