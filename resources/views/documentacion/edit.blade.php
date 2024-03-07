@extends('layouts.app')



@section('title','Edit Documentacion')

@section('content')

    <form method="POST" action="{{route('documentacions.update', ['documentacion' => $documentacion->id])}}">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="nombre">
                Nota
            </label>
            <input text="text" name="nombre" id="nombre"
                   @class(['border-red-500' => $errors->has('nombre')])
                   value="{{$documentacion->nombre}}"/>
            @error('nombre')
            <p class="error">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="descripcion">Descripcion</label>
            <input text="text" name="descripcion" id="descripcion"
                   @class(['border-red-500' => $errors->has('descripcion')])
                   value="{{$documentacion->descripcion}}"/>
            @error('descripcion')
            <p class="error">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="fecha_creacion">Fecha Creacion</label>
            <input type="date" name="fecha_creacion" id="fecha_creacion"
                   @class(['border-red-500' => $errors->has('fecha_creacion')])
                   value="{{$documentacion->fecha_creacion}}"/>
            @error('fecha_creacion')
            <p class="error">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="archivo">Archivo</label>
            <input text="text" name="archivo" id="archivo"
                   @class(['border-red-500' => $errors->has('archivo')])
                   value="{{$documentacion->archivo}}"/>
            @error('archivo')
            <p class="error">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="id_estado_documentacion" >Estado</label>
            <select style="background-color: #e3f2fd;" class="form-control" required name="id_estado_documentacion" id="id_estado_documentacion"
                    @class(['border-red-500' => $errors->has('id_estado_documentacion')]) value="{{old('id_estado_documentacion')}}">
                <option value="">Seleccione un Estado</option>
                @foreach ($estado_documentacions as $estado)
                    <option value="{{ $estado->id }}" {{ (old('id_estado_documentacion', $documentacion->id_estado_documentacion) == $estado->id) ? 'selected' : '' }}>{{ $estado->nombre }}</option>
                @endforeach
            </select>
            @error('id_estado_documentacion')
            <p class="error-message">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="id_tipo_documentacion" >Tipo</label>
            <select style="background-color: #e3f2fd;" class="form-control" required name="id_tipo_documentacion" id="id_tipo_documentacion"
                    @class(['border-red-500' => $errors->has('id_tipo_documentacion')]) value="{{old('id_tipo_documentacion')}}">
                <option value="">Seleccione un Tipo</option>
                @foreach ($tipo_documentacions as $tipo)
                    <option value="{{ $tipo->id }}" {{ (old('id_tipo_documentacion', $documentacion->id_tipo_documentacion) == $tipo->id) ? 'selected' : '' }}>{{ $tipo->nombre }}</option>
                @endforeach
            </select>
            @error('id_tipo_documentacion')
            <p class="error-message">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="id_categoria_documentacion" >Categoria</label>
            <select style="background-color: #e3f2fd;" class="form-control" required name="id_categoria_documentacion" id="id_categoria_documentacion"
                    @class(['border-red-500' => $errors->has('id_categoria_documentacion')]) value="{{old('id_categoria_documentacion')}}">
                <option value="">Seleccione un Estado</option>
                @foreach ($categoria_documentacions as $categoria)
                    <option value="{{ $categoria->id }}" {{ (old('id_categoria_documentacion', $documentacion->id_categoria_documentacion) == $categoria->id) ? 'selected' : '' }}>{{ $categoria->nombre }}</option>
                @endforeach
            </select>
            @error('id_estado_documentacion')
            <p class="error-message">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="id_glpi_users" >Usuario</label>
            <select style="background-color: #e3f2fd;" class="form-control" required name="id_glpi_users" id="id_glpi_users" @class(['border-red-500' => $errors->has('id_glpi_users')]) value="{{old('id_glpi_users')}}">
                <option value="">Seleccione un Glpi Users</option>
                @foreach ($glpi_users as $glpiu)
                    <option value="{{ $glpiu->id }}" {{ (old('id_glpi_users', $documentacion->id_glpi_users) == $glpiu->id) ? 'selected' : '' }}>{{ $glpiu->name }}</option>
                @endforeach
            </select>
            @error('id_glpi_users')
            <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center gap-2">
            <button type="submit" class="btn">Editar Reporte</button>
            <a href="{{route('reporte_insumo_consumibles.index')}}" class="link">Cancel</a>
        </div>
    </form>

@endsection
