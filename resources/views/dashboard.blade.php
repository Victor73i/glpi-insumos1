@extends('layouts.master')
@section('title') @lang('Index') @endsection
@section('css')
    <link href="{{ URL::asset('build/libs/jsvectormap/css/jsvectormap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('build/libs/swiper/swiper-bundle.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')

    <div class="row">
        <div class="col">

            <div class="h-100">
                <div class="row mb-3 pb-1">
                    <div class="col-12">
                        <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                            <div class="flex-grow-1">
                                <h4 class="fs-16 mb-1">Buenos Dias, {{Auth::user()->name}}</h4>
                                <p class="text-muted mb-0">Hola Que Quieres hacer Hoy.</p>
                            </div>
                            <div class="mt-3 mt-lg-0">
                                <form action="javascript:void(0);">
                                    <div class="row g-3 mb-0 align-items-center">
                                        <div class="col-sm-auto">

                                        </div>
                                        <!--end col-->
                                        <div class="col-auto">
                                            <a href="{{route('tareas.create')}}" type="button" class="btn btn-soft-success"><i class="ri-add-circle-line align-middle me-1"></i>
                                                Agregar Tarea</a>
                                        </div>
                                        <div class="col-auto">
                                            <a href="{{route('documentacions.create')}}" type="button" class="btn btn-soft-success"><i class="ri-add-circle-line align-middle me-1"></i>
                                                Agregar Documentacion</a>
                                        </div>
                                        <div class="col-auto">
                                            <a href="{{route('reporte_insumo_consumibles.create')}}" type="button" class="btn btn-soft-success"><i class="ri-add-circle-line align-middle me-1"></i>
                                                Agregar Reporte Consumible</a>
                                        </div>
                                        <div class="col-auto">
                                            <a href="{{route('reporte_insumo_inventariados.create')}}" type="button" class="btn btn-soft-success"><i class="ri-add-circle-line align-middle me-1"></i>
                                                Agregar Reporte Inventariado</a>
                                        </div><div class="col-auto">
                                            <a href="{{route('reporte_insumo_fungibles.create')}}" type="button" class="btn btn-soft-success"><i class="ri-add-circle-line align-middle me-1"></i>
                                                Agregar Reporte Fungible</a>
                                        </div>
                                        <div class="col-auto">
                                            <a href="{{route('logs.create')}}" type="button" class="btn btn-soft-success"><i class="ri-add-circle-line align-middle me-1"></i>
                                                Agregar LOG</a>
                                        </div>
                                        <!--end col-->

                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </form>
                            </div>
                        </div><!-- end card header -->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                            Logs</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <h5 class="text-success fs-14 mb-0">
                                            <i class="ri-arrow-right-up-line fs-13 align-middle"></i>
                                            {{$totalLog}}
                                        </h5>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4">                                        {{$totalLog}}

                                        </h4>
                                        <a href="{{route('logs.index')}}" class="text-decoration-underline">Ver Logs</a>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-soft-success rounded fs-3">
                                        <i class="bx bx-dollar-circle text-success"></i>
                                    </span>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                            Documentacion</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <h5 class="text-success fs-14 mb-0">
                                            <i class="ri-arrow-right-up-line fs-13 align-middle"></i>
                                            {{$totalDocumentacion}}

                                        </h5>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4">                                        {{$totalDocumentacion}}

                                        </h4>
                                        <a href="{{route('documentacions.index')}}" class="text-decoration-underline">Ver Documentacion</a>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-soft-primary rounded fs-3">
                                        <i class="bx bx-wallet text-primary"></i>
                                    </span>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                            Tareas</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <h5 class="text-danger fs-14 mb-0">
                                            <i class="ri-arrow-right-up-line fs-13 align-middle"></i>
                                            {{$totalTarea}}
                                        </h5>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4">{{$totalTarea }}</h4>
                                        <a href="{{route('tareas.index')}}" class="text-decoration-underline">Ver Tareas</a>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-soft-info rounded fs-3">
                                        <i class="bx bx-shopping-bag text-info"></i>
                                    </span>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                        <!-- card -->
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                            Reporte Fungible</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <h5 class="text-danger fs-14 mb-0">
                                            <i class="ri-arrow-right-down-line fs-13 align-middle"></i>
                                            -3.57 %
                                        </h5>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="36894">0</span></h4>
                                        <a href="{{route('reporte_insumo_fungibles.index')}}" class="text-decoration-underline">Ver Reporte</a>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-soft-info rounded fs-3">
                                        <i class="bx bx-shopping-bag text-info"></i>
                                    </span>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                            Reporte Consumible</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <h5 class="text-success fs-14 mb-0">
                                            <i class="ri-arrow-right-up-line fs-13 align-middle"></i>
                                            +29.08 %
                                        </h5>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="183.35">0</span>M
                                        </h4>
                                        <a href="{{route('reporte_insumo_consumibles.index')}}" class="text-decoration-underline">Ver Reporte</a>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-soft-warning rounded fs-3">
                                        <i class="bx bx-user-circle text-warning"></i>
                                    </span>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div>
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                            EQUIPO IT</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <h5 class="text-success fs-14 mb-0">
                                            <i class="ri-arrow-right-up-line fs-13 align-middle"></i>
                                            {{$totalEquiposIT}}
                                        </h5>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4">{{$totalEquiposIT}}
                                        </h4>
                                        <a href="{{route('equipo_its.index')}}" class="text-decoration-underline">Ver Equipo IT</a>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-soft-warning rounded fs-3">
                                        <i class="bx bx-user-circle text-warning"></i>
                                    </span>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                            Reporte Inventariado</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <h5 class="text-muted fs-14 mb-0">
                                            +0.00 %
                                        </h5>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value" data-target="165.89">0</span>k
                                        </h4>
                                        <a href="{{route('reporte_insumo_inventariados.index')}}" class="text-decoration-underline">Ver Reporte</a>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-soft-primary rounded fs-3">
                                        <i class="bx bx-wallet text-primary"></i>
                                    </span>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div>
                    </div><!-- end col -->
                </div> <!-- end row-->

                <div class="row">
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-header border-0 align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Calendario Reportes</h4>
                                <div>
                                    <button type="button" class="btn btn-soft-secondary btn-sm">
                                        ALL
                                    </button>
                                    <button type="button" class="btn btn-soft-secondary btn-sm">
                                        1M
                                    </button>
                                    <button type="button" class="btn btn-soft-secondary btn-sm">
                                        6M
                                    </button>
                                    <button type="button" class="btn btn-soft-primary btn-sm">
                                        1Y
                                    </button>
                                </div>
                            </div><!-- end card header -->

                            <div class="card-header p-0 border-0 bg-soft-light">
                                <div class="row g-0 text-center">
                                    <div class="col-6 col-sm-3">
                                        <div class="p-3 border border-dashed border-start-0">
                                            <h5 class="mb-1"><span class="counter-value" data-target="7585">0</span></h5>
                                            <p class="text-muted mb-0">Orders</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-6 col-sm-3">
                                        <div class="p-3 border border-dashed border-start-0">
                                            <h5 class="mb-1">$<span class="counter-value" data-target="22.89">0</span>k</h5>
                                            <p class="text-muted mb-0">Earnings</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-6 col-sm-3">
                                        <div class="p-3 border border-dashed border-start-0">
                                            <h5 class="mb-1"><span class="counter-value" data-target="367">0</span></h5>
                                            <p class="text-muted mb-0">Refunds</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-6 col-sm-3">
                                        <div class="p-3 border border-dashed border-start-0 border-end-0">
                                            <h5 class="mb-1 text-success"><span class="counter-value" data-target="18.92">0</span>%</h5>
                                            <p class="text-muted mb-0">Conversation Ratio</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                            </div><!-- end card header -->

                            <div class="card-body p-0 pb-2">
                                <div class="w-100">
                                    <div id="customer_impression_charts" data-colors='["--vz-primary", "--vz-success", "--vz-danger"]' class="apex-charts" dir="ltr"></div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->


                </div>

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Log</h4>
                                <div class="flex-shrink-0">
                                    <div class="dropdown card-header-dropdown">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="fw-semibold text-uppercase fs-12">Sort by:
                                        </span><span class="text-muted">Today<i class="mdi mdi-chevron-down ms-1"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Today</a>
                                            <a class="dropdown-item" href="#">Yesterday</a>
                                            <a class="dropdown-item" href="#">Last 7 Days</a>
                                            <a class="dropdown-item" href="#">Last 30 Days</a>
                                            <a class="dropdown-item" href="#">This Month</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div class="table-responsive table-card">
                                    <table class="table table-hover table-centered align-middle table-nowrap mb-0">
                                        <thead class="text-muted table-light">
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Usuario</th>
                                            <th scope="col">Titulo</th>
                                            <th scope="col">Observaciones</th>
                                            <th scope="col">Fecha Inicio</th>
                                            <th scope="col">Ubicacion</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($logs as $log1)

                                            <tr>
                                                <td>
                                                    <a href="{{ route('logs.show', $log1->id) }}" class="fw-medium link-primary">{{ $log1->id }}</a>

                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-2">
                                                            <img src="{{ URL::asset('build/images/users/avatar-tecnico.jpg') }}" alt="" class="avatar-xs rounded-circle" />
                                                        </div>
                                                        <div class="flex-grow-1">{{ $log1->glpi_users->name }}</div>
                                                    </div>
                                                </td>
                                                <td>{{ $log1->titulo }}</td>
                                                <td>
                                                    <span class="text-success">{{ $log1->observaciones }}</span>
                                                </td>
                                                <td>{{ $log1->fecha_inicio }}</td>
                                                <td>
                                                    <span class="badge badge-soft-success">{{ $log1->glpi_locations->name }}</span>
                                                </td>

                                            </tr><!-- end tr -->

                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>


                                <div class="align-items-center mt-4 pt-2 justify-content-between row text-center text-sm-start">
                                    <div class="pagination-container">
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination justify-content-center">
                                                {{-- Previous Page Link --}}
                                                @if ($logs->onFirstPage())
                                                    <li class="page-item disabled">
                                                        <span class="page-link">Anterior</span>
                                                    </li>
                                                @else
                                                    <li class="page-item">
                                                        <a class="page-link" href="{{ $logs->previousPageUrl() }}">Anterior</a>
                                                    </li>
                                                @endif

                                                {{-- Pagination Elements --}}
                                                @foreach(range(1, $logs->lastPage()) as $i)
                                                    @if($i >= $logs->currentPage() - 2 && $i <= $logs->currentPage() + 2)
                                                        @if ($i == $logs->currentPage())
                                                            <li class="page-item active"><span class="page-link">{{ $i }}</span></li>
                                                        @else
                                                            <li class="page-item"><a class="page-link" href="{{ $logs->url($i) }}">{{ $i }}</a></li>
                                                        @endif
                                                    @endif
                                                @endforeach

                                                {{-- Next Page Link --}}
                                                @if ($logs->hasMorePages())
                                                    <li class="page-item">
                                                        <a class="page-link" href="{{ $logs->nextPageUrl() }}">Siguiente</a>
                                                    </li>
                                                @else
                                                    <li class="page-item disabled">
                                                        <span class="page-link">Siguiente</span>
                                                    </li>
                                                @endif
                                            </ul>
                                        </nav>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="card card-height-100">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Documentacion</h4>
                                <div class="flex-shrink-0">
                                    <div class="dropdown card-header-dropdown">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted">Report<i class="mdi mdi-chevron-down ms-1"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Download Report</a>
                                            <a class="dropdown-item" href="#">Export</a>
                                            <a class="dropdown-item" href="#">Import</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div class="table-responsive table-card">
                                    <table class="table table-centered table-hover align-middle table-nowrap mb-0">
                                        <thead class="text-muted table-light">
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Usuario</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Descripcion</th>
                                            <th scope="col">Fecha</th>
                                            <th scope="col">Estado</th>
                                            <th scope="col">Tipo</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($documentacions as $documentacion1)

                                            <tr>
                                                <td>
                                                    <a href="{{ route('documentacions.show', $documentacion1->id) }}" class="fw-medium link-primary">{{ $documentacion1->id }}</a>

                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-2">
                                                            <img src="{{ URL::asset('build/images/users/avatar-tecnico.jpg') }}" alt="" class="avatar-xs rounded-circle" />
                                                        </div>
                                                        <div class="flex-grow-1">{{ $documentacion1->glpi_users->name }}</div>
                                                    </div>
                                                </td>
                                                <td>{{ $documentacion1->nombre }}</td>
                                                <td>
                                                    <span class="text-success">{{ $documentacion1->descripcion }}</span>
                                                </td>
                                                <td>{{ $documentacion1->fecha_creacion }}</td>
                                                <td>
                                                    <span class="badge badge-soft-success">{{ $documentacion1->estado_documentacion->nombre }}</span>
                                                </td>
                                                <td>
                                                    <h5 class="fs-14 fw-medium mb-0">{{ $documentacion1->tipo_documentacion->nombre }}
                                                </td>
                                            </tr><!-- end tr -->

                                        @endforeach
                                        </tbody>
                                    </table><!-- end table -->

                                </div>

                            </div>
                            <div class="align-items-center mt-4 pt-2 justify-content-between row text-center text-sm-start">

                                <div class="pagination-container">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-center">
                                            {{-- Previous Page Link --}}
                                            @if ($documentacions->onFirstPage())
                                                <li class="page-item disabled">
                                                    <span class="page-link">Anterior</span>
                                                </li>
                                            @else
                                                <li class="page-item">
                                                    <a class="page-link" href="{{ $documentacions->previousPageUrl() }}">Anterior</a>
                                                </li>
                                            @endif

                                            {{-- Pagination Elements --}}
                                            @foreach(range(1, $documentacions->lastPage()) as $i)
                                                @if($i >= $documentacions->currentPage() - 2 && $i <= $documentacions->currentPage() + 2)
                                                    @if ($i == $documentacions->currentPage())
                                                        <li class="page-item active"><span class="page-link">{{ $i }}</span></li>
                                                    @else
                                                        <li class="page-item"><a class="page-link" href="{{ $documentacions->url($i) }}">{{ $i }}</a></li>
                                                    @endif
                                                @endif
                                            @endforeach

                                            {{-- Next Page Link --}}
                                            @if ($documentacions->hasMorePages())
                                                <li class="page-item">
                                                    <a class="page-link" href="{{ $documentacions->nextPageUrl() }}">Siguiente</a>
                                                </li>
                                            @else
                                                <li class="page-item disabled">
                                                    <span class="page-link">Siguiente</span>
                                                </li>
                                            @endif
                                        </ul>
                                    </nav>
                                </div>
                            </div> <!-- .card-body-->
                        </div> <!-- .card-->
                    </div> <!-- .col-->
                </div> <!-- end row-->

                <div class="row">
                    <div class="col-xl-4">
                        <div class="card card-height-100">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Reportes</h4>
                                <div class="flex-shrink-0">
                                    <div class="dropdown card-header-dropdown">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted">Report<i class="mdi mdi-chevron-down ms-1"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Download Report</a>
                                            <a class="dropdown-item" href="#">Export</a>
                                            <a class="dropdown-item" href="#">Import</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div id="store-visits-source" data-colors='["--vz-primary", "--vz-success", "--vz-warning", "--vz-danger", "--vz-info"]' class="apex-charts" dir="ltr"></div>
                            </div>
                        </div> <!-- .card-->
                    </div> <!-- .col-->

                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Tareas Nuevas</h4>
                                <div class="flex-shrink-0">
                                    <a type="button" class="btn btn-soft-info btn-sm" href="{{route('tareas.create')}}">
                                        <i class="ri-file-list-3-line align-middle"></i> Generar Tarea
                                    </a>
                                </div>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div class="table-responsive table-card">
                                    <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                        <thead class="text-muted table-light">
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Tecnico</th>
                                            <th scope="col">Tarea</th>
                                            <th scope="col">Descripcion</th>
                                            <th scope="col">Fecha Por Terminar</th>
                                            <th scope="col">Observacion</th>
                                            <th scope="col">Ticket</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($tareas as $tarea1)

                                            <tr>
                                                <td>
                                                    <a href="{{ route('tareas.show', $tarea1->id) }}" class="fw-medium link-primary">{{ $tarea1->id }}</a>

                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-2">
                                                            <img src="{{ URL::asset('build/images/users/avatar-tecnico.jpg') }}" alt="" class="avatar-xs rounded-circle" />
                                                        </div>
                                                        <div class="flex-grow-1">{{ $tarea1->glpi_users->name }}</div>
                                                    </div>
                                                </td>
                                                <td>{{ $tarea1->nombre }}</td>
                                                <td>
                                                    <span class="text-success">{{ $tarea1->descripcion }}</span>
                                                </td>
                                                <td>{{ $tarea1->fecha_aproximada }}</td>
                                                <td>
                                                    <span class="badge badge-soft-success">{{ $tarea1->observacion }}</span>
                                                </td>
                                                <td>
                                                    <h5 class="fs-14 fw-medium mb-0">{{ $tarea1->glpi_tickets->name }}
                                                </td>
                                            </tr><!-- end tr -->

                                        @endforeach

                                        </tbody><!-- end tbody -->
                                    </table><!-- end table -->


                                </div> <!-- .card-body-->

                            </div>
                            <div class="pagination-container">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">
                                        {{-- Previous Page Link --}}
                                        @if ($tareas->onFirstPage())
                                            <li class="page-item disabled">
                                                <span class="page-link">Anterior</span>
                                            </li>
                                        @else
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $tareas->previousPageUrl() }}">Anterior</a>
                                            </li>
                                        @endif

                                        {{-- Pagination Elements --}}
                                        @foreach(range(1, $tareas->lastPage()) as $i)
                                            @if($i >= $tareas->currentPage() - 2 && $i <= $tareas->currentPage() + 2)
                                                @if ($i == $tareas->currentPage())
                                                    <li class="page-item active"><span class="page-link">{{ $i }}</span></li>
                                                @else
                                                    <li class="page-item"><a class="page-link" href="{{ $tareas->url($i) }}">{{ $i }}</a></li>
                                                @endif
                                            @endif
                                        @endforeach

                                        {{-- Next Page Link --}}
                                        @if ($tareas->hasMorePages())
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $tareas->nextPageUrl() }}">Siguiente</a>
                                            </li>
                                        @else
                                            <li class="page-item disabled">
                                                <span class="page-link">Siguiente</span>
                                            </li>
                                        @endif
                                    </ul>
                                </nav>
                            </div>

                        </div> <!-- .card-->


                    </div> <!-- .col-->

                </div> <!-- end row-->

            </div> <!-- end .h-100-->

        </div> <!-- end col -->


    </div>

@endsection
@section('script')
    <!-- apexcharts -->
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/jsvectormap/maps/world-merc.js') }}"></script>
    <script src="{{ URL::asset('build/libs/swiper/swiper-bundle.min.js')}}"></script>
    <!-- dashboard init -->
    <script src="{{ URL::asset('build/js/pages/dashboard-ecommerce.init.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection