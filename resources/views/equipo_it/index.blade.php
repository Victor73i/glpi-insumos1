@extends('layouts.master')
@section('title')
    @lang('Lista Equipo IT')
@endsection
@section('css')
    <link href="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />

@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Equipo IT
        @endslot
        @slot('title')
            Lista Equipo IT
        @endslot
    @endcomponent
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <p class="text-uppercase fw-medium text-muted mb-0">Impresoras</p>
                        </div>
                        <div class="flex-shrink-0">
                            <h5 class="text-success fs-14 mb-0">
                                <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +89.24 %
                            </h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-end justify-content-between mt-4">
                        <div>
                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value" data-target="559.25">0</span>k</h4>
                            <span class="badge bg-warning me-1">2,258</span> <span class="text-muted">
                            Impresoras Registradas</span>
                        </div>
                        <div class="avatar-sm flex-shrink-0">
                        <span class="avatar-title bg-light rounded fs-3">
                            <i data-feather="file-text" class="text-success icon-dual-success"></i>
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
                        <div class="flex-grow-1">
                            <p class="text-uppercase fw-medium text-muted mb-0">Computadoras</p>
                        </div>
                        <div class="flex-shrink-0">
                            <h5 class="text-danger fs-14 mb-0">
                                <i class="ri-arrow-right-down-line fs-13 align-middle"></i> +8.09 %
                            </h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-end justify-content-between mt-4">
                        <div>
                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value" data-target="409.66">0</span>k</h4>
                            <span class="badge bg-warning me-1">1,958</span> <span class="text-muted">
                            Computadoras Registradas</span>
                        </div>
                        <div class="avatar-sm flex-shrink-0">
                        <span class="avatar-title bg-light rounded fs-3">
                            <i data-feather="check-square" class="text-success icon-dual-success"></i>
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
                        <div class="flex-grow-1">
                            <p class="text-uppercase fw-medium text-muted mb-0">UPS</p>
                        </div>
                        <div class="flex-shrink-0">
                            <h5 class="text-danger fs-14 mb-0">
                                <i class="ri-arrow-right-down-line fs-13 align-middle"></i> +9.01 %
                            </h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-end justify-content-between mt-4">
                        <div>
                            <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value" data-target="136.98">0</span>k</h4>
                            <span class="badge bg-warning me-1">338</span> <span class="text-muted">
                            UPS Registrados</span>
                        </div>
                        <div class="avatar-sm flex-shrink-0">
                        <span class="avatar-title bg-light rounded fs-3">
                            <i data-feather="clock" class="text-success icon-dual-success"></i>
                        </span>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->


    </div> <!-- end row-->

    <div class="row">
        <div class="col-lg-12">
            <div class="card" id="invoiceList">
                <div class="card-header border-0">
                    <div class="d-flex align-items-center">
                        <h5 class="card-title mb-0 flex-grow-1">EQUIPO IT</h5>

                    </div>
                </div>
                <div class="card-body bg-soft-light border border-dashed border-start-0 border-end-0">
                    <form>
                        <div class="row g-3">
                            <div class="col-xxl-5 col-sm-12">
                                <div class="search-box">
                                    <input type="text" class="form-control search bg-light border-light" placeholder="Buscar...">
                                    <i class="ri-search-line search-icon"></i>
                                </div>
                            </div>
                            <!--end col-->

                            <!--end col-->
                            <div class="col-xxl-3 col-sm-4">
                                <div class="input-light">
                                    <select class="form-control" data-choices data-choices-search-false name="choices-single-default" id="idTipo">
                                        <option value="all" selected>Todo</option>
                                        <option value="impresora">Impresora</option>
                                        <option value="impresora">Computadora</option>
                                        <option value="Cancel">UPS</option>
                                    </select>
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-xxl-1 col-sm-4">
                                <button type="button" class="btn btn-primary w-100" onclick="SearchData();">
                                    <i class="ri-equalizer-fill me-1 align-bottom"></i> Filtrar
                                </button>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </form>
                </div>
                <div class="card-body">
                    <div>
                        <div class="table-responsive table-card">
                            <table class="table align-middle table-nowrap" id="invoiceTable">
                                <thead class="text-muted">
                                <tr>
                                    <th scope="col" style="width: 50px;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                        </div>
                                    </th>
                                    <th class="sort text-uppercase" data-sort="ID">ID</th>
                                    <th class="sort text-uppercase" data-sort="nombre">
                                        Nombre</th>
                                    <th class="sort text-uppercase" data-sort="tipo">Tipo</th>
                                    <th class="sort text-uppercase" data-sort="equipo">Equipo</th>

                                    <th class="sort text-uppercase" data-sort="action">Accion</th>
                                </tr>
                                </thead>
                                <tbody class="list form-check-all" >
                                @foreach($equiposIt as $equipoit)
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                            </div>
                                        </th>
                                        <td class="id">

                                            <div class="d-flex">
                                                <a href="{{route('equipo_its.show', [$equipoit->id])}}" class="flex-grow-1">{{$equipoit->id}}</a>
                                                <div class="flex-shrink-0 ms-4">
                                                    <ul class="list-inline tasks-list-menu mb-0">
                                                        <li class="list-inline-item"><a href="{{route('equipo_its.show', [$equipoit->id])}}"><i class="ri-eye-fill align-bottom me-2 text-muted"></i></a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="nombre">{{$equipoit->nombre}}</td>

                                        <td class="tipo">{{$equipoit->type}}</td>

                                        @if($equipoit->glpiComputers)
                                            <td class="equipo">{{$equipoit->glpiComputers->name}}</td>
                                        @elseif($equipoit->glpiPdus)
                                            <td class="equipo">{{$equipoit->glpiPdus->name}}</td>
                                        @else
                                            <td class="equipo">{{$equipoit->glpiPrinters->name}}</td>
                                        @endif
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="noresult" style="display: none">
                                <div class="text-center">
                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
                                    </lord-icon>
                                    <h5 class="mt-2">Lo Siento! Resultado no Buscado</h5>
                                    <p class="text-muted mb-0">Nosotros Buscamos todo el resultado
                                        En la Base de Datos.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    @if ($equiposIt->count())
                        <nav class="mt-4">
                            {{$equiposIt->links()}}
                        </nav>
                    @endif
                </div>
            </div>

        </div>
        <!--end col-->
    </div>
    <!--end row-->
@endsection
@section('script')
    <script src="{{ URL::asset('build/libs/list.js/list.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/list.pagination.js/list.pagination.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/pages/invoiceslist.init.js') }}"></script>
    <script src="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
