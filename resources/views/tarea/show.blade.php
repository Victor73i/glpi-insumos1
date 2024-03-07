@extends('layouts.app')

@section('title', $tarea->nombre)

@section('content')
    <div class="mb-4">
        <a href="{{route('tareas.index')}}"
           class="link">Regresar a Lista de Tareas</a>
    </div>
        <p class="parrafo">{{$tareas->tarea_id}}</p>
    <p class="parrafo">{{$tareas->glpi_user_name}}</p>

        <p class="parrafo">{{$tareas->tarea_nombre}}</p>
        <p class="parrafo">{{$tareas->tarea_descripcion}}</p>
        <p class="parrafo">{{$tareas->tarea_fecha_asignacion}}</p>
        <p class="parrafo">{{$tareas->tarea_fecha_aproximada}}</p>
        <p class="parrafo">{{$tareas->tarea_fecha_terminado}}</p>
        <p class="parrafo">{{$tareas->tarea_observacion}}</p>
        <p class="parrafo">{{$tareas->glpi_ticket_id}} * {{$tareas->glpi_ticket_name}}</p>

        <p class="parrafo">Created {{$tarea->created_at->diffForHumans()}} * Updated {{$tarea->updated_at->diffForHumans()}}</p>
        <p class="mb-4">
            @if($tarea->completado)
                <span class="completado">Completado</span>
            @else
                <span class="nocompletado">No Completado</span>
            @endif
        </p>

        <div class="flex gap-3">
            <form method="POST" action="{{route('tareas.toggle-complete',['tarea'=>$tarea])}}">
                @csrf
                @method('PUT')
                <button type="submit" class="btn">
                    Mark as {{$tarea->completado ? 'not completado' : 'completado'}}
                </button>
            </form>

            <a href="{{route('tareas.edit', ['tarea' =>$tarea->id])}}"
               class="btn">EDIT</a>


            {{--
                <div class="table-container">
                <div><h1>LIST STUDENT</h1>
                    <br><br>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
                    <table class="table">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">NOMBRE</th>
                            <th scope="col">EDAD</th>
                            <th scope="col">GENERO</th>
                            <th scope="col">TELEFONO</th>
                            <th scope="col">ENCARGADO</th>
                            <th scope="col">DIRECCION</th>

                            <th scope="col">GRADE</th>




                        </tr>
                        </thead>
                        <tbody>
                        @foreach($ubicacions as $ubicacion1)
                            <tr>

                                <td>{{$ubicacion1->ubicacion_id}}</td>
                                <td>{{$ubicacion1->ubicacion_nombre}}</td>
                                <td>{{$ubicacion1->area_nombre}}</td>
                                <td>{{$ubicacion1->area_descripcion}}</td>
                                <td>{{$ubicacion1->ubicacion_descripcion}}</td>




                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div> --}}


            <form action="{{route('tareas.destroy',['tarea' =>$tarea->id])}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn">DELETE</button>
            </form>
        </div>
        @endsection
