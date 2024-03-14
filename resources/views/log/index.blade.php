@extends('layouts.master')
@section('title')
    @lang('Lista de Tareas ')
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Project
        @endslot
        @slot('title')
            Lista de LOG
        @endslot
    @endcomponent
    <div class="row g-4 mb-3">
        <div class="col-sm-auto">
            <div>
                <a href="{{route('logs.create')}}" class="btn btn-success"><i class="ri-add-line align-bottom me-1"></i> Add
                    Log</a>
            </div>
        </div>
        <div class="col-sm">
            <div class="d-flex justify-content-sm-end gap-2">
                <div class="search-box ms-2">
                    <input type="text" class="form-control" placeholder="Search...">
                    <i class="ri-search-line search-icon"></i>
                </div>

                <select class="form-control w-md" data-choices data-choices-search-false>
                    <option value="All">All</option>
                    <option value="Today">Today</option>
                    <option value="Yesterday" selected>Yesterday</option>
                    <option value="Last 7 Days">Last 7 Days</option>
                    <option value="Last 30 Days">Last 30 Days</option>
                    <option value="This Month">This Month</option>
                    <option value="Last Year">Last Year</option>
                </select>
            </div>
        </div>
    </div>



    {{-- Continúa desde la parte superior de tu archivo Blade --}}

    <div class="row">

        @foreach($logs as $log)
            <div class="col-xxl-3 col-sm-6 project-card">

                <div class="card card-height-100">
                    {{-- El resto de la estructura de tu tarjeta --}}
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted mb-4">Ultima Vez Actualizado {{ $log->updated_at->diffForHumans()}}</p>
                            </div>
                            <div class="flex-shrink-0">
                                <div class="d-flex gap-1 align-items-center">
                                    <button type="button" class="btn avatar-xs mt-n1 p-0 favourite-btn">
                                        <span class="avatar-title bg-transparent fs-15">
                                            <i class="ri-star-fill"></i>
                                        </span>
                                    </button>
                                    <div class="dropdown">
                                        <button class="btn btn-link text-muted p-1 mt-n2 py-0 text-decoration-none fs-15"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <i data-feather="more-horizontal" class="icon-sm"></i>
                                        </button>

                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="{{route('logs.show', ['log'=>$log])}}"><i
                                                    class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                View</a>
                                            <a class="dropdown-item" href="{{route('logs.edit', [$log->id])}}"><i
                                                    class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                Editar</a>
                                            <div class="dropdown-divider"></div>

                                            <a class="dropdown-item"  data-bs-toggle="modal"
                                               data-bs-target="#removeProjectModal"><i
                                                    class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-column h-100">
                            {{-- Aquí iría el contenido de la tarjeta, como nombre del proyecto, estado, etc. --}}
                            <h5 class="mb-1 fs-15">

                                <a href="{{route('logs.show', ['log'=>$log])}}" class="text-dark">{{ $log->titulo }}</a> -
                                <a href="{{route('logs.show', ['log'=>$log])}}" class="text-dark">{{ $log->observaciones }}</a>
                            </h5>
                            <p class="text-muted text-truncate-two-lines mb-3"> {{ $log->archivo }}</p>
                            {{-- Fecha de asignación y aproximada (asegúrate de formatear las fechas como desees) --}}
                            <div class="text-muted">
                                <i class="ri-calendar-event-fill me-1 align-bottom"></i>
                                Fecha Inicio {{ $log->fecha_inicio }} -
                                Fecha Finalizacion {{ $log->fecha_finalizacion }} -
                            </div>
                            {{-- Otros detalles como el progreso de las tareas --}}
                            {{-- ... --}}
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-top-dashed py-2">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <p class="text-muted mb-4">Creado {{ $log->created_at->diffForHumans()}}</p>

                            </div>


                        </div>

                    </div>
                </div>
            </div>

        @endforeach
    </div>

    {{-- Continúa con el resto de tu archivo Blade --}}

    {{-- Asegúrate de incluir la paginación si es necesario --}}




    <!-- end row -->

        <!-- end col -->

        <div class="col-sm-6">
            @if($logs->count())
                <nav  class="mt-4">
                    {{$logs->links()}}
                </nav>

            @endif
        </div><!-- end col -->
    </div><!-- end row -->

    <!-- END layout-wrapper -->
    <!-- removeProjectModal -->
    <div id="removeProjectModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            id="close-modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mt-2 text-center">
                        <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                                   colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                        <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                            <h4>Estas Seguro ?</h4>
                            <p class="text-muted mx-4 mb-0">Estas Seguro que Quieres Eliminar Este Log ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Cerrar</button>
                        <form action="{{route('logs.destroy',['log' =>$log->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn w-sm btn-danger"  id="remove-project">Si, Borralo!</button>

                        </form>
                    </div>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
@section('script')
    <script src="{{ URL::asset('build/js/pages/project-list.init.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
