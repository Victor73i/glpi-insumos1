@extends('layouts.app')

@section('title','Agregar Documentacion')

@section('content')

    <form method="POST" action="{{route('documentacions.store')}}">
        @csrf
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
            <label for="fecha_creacion">Fecha Creacion</label>
            <input type="date" name="fecha_creacion" id="fecha_creacion"
                   @class(['border-red-500' => $errors->has('fecha_creacion')])
                   value="{{ old('fecha_creacion') }}"/>
            @error('fecha_creacion')
            <p class="error">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="archivo">Archivo</label>
            <input text="text" name="archivo" id="archivo"
                   @class(['border-red-500' => $errors->has('archivo')])
                   value="{{ old('archivo') }}"/>
            @error('archivo')
            <p class="error">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="id_estado_documentacion" >Estado Documentacion</label>
            <select style="background-color: #e3f2fd;" class="form-control" required name="id_estado_documentacion" id="id_estado_documentacion" @class(['border-red-500' => $errors->has('id_estado_documentacion')]) value="{{old('id_estado_documentacion')}}">
                <option value="">Seleccione un Estado</option>
                @foreach ($estado_documentacions as $estado)
                    <option value="{{ $estado->id }}">{{ $estado->nombre }}</option>
                @endforeach
            </select>
        </div><div class="mb-4">
            <label for="id_tipo_documentacion" >Tipo Documentacion</label>
            <select style="background-color: #e3f2fd;" class="form-control" required name="id_tipo_documentacion" id="id_tipo_documentacion" @class(['border-red-500' => $errors->has('id_tipo_documentacion')]) value="{{old('id_tipo_documentacion')}}">
                <option value="">Seleccione un Tipo</option>
                @foreach ($tipo_documentacions as $tipo)
                    <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
                @endforeach
            </select>
        </div><div class="mb-4">
            <label for="id_categoria_documentacion" >Categoria Documentacion</label>
            <select style="background-color: #e3f2fd;" class="form-control" required name="id_categoria_documentacion" id="id_categoria_documentacion" @class(['border-red-500' => $errors->has('id_categoria_documentacion')]) value="{{old('id_categoria_documentacion')}}">
                <option value="">Seleccione una Categoria</option>
                @foreach ($categoria_documentacions as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="id_glpi_users" >GLPI USUARIO</label>
            <select style="background-color: #e3f2fd;" class="form-control" required name="id_glpi_users" id="id_glpi_users" @class(['border-red-500' => $errors->has('id_glpi_users')]) value="{{old('id_glpi_users')}}">
                <option value="">Seleccione un GLPI USUARIO</option>
                @foreach ($glpi_users as $glpiu)
                    <option value="{{ $glpiu->id }}">{{ $glpiu->name }}</option>
                @endforeach
            </select>

        <div class="flex items-center gap-2">
            <button type="submit" class="btn">Add Tarea</button>
            <a href="{{route('reporte_insumo_consumibles.index')}}" class="link">Cancel</a>
        </div>
    </form>


@endsection
