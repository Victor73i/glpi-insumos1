@extends('layouts.master')
@section('title')
    @lang('translation.create-project')
@endsection
@section('css')
    <link href="{{ URL::asset('build/libs/dropzone/dropzone.css') }}" rel="stylesheet">
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Log
        @endslot
        @slot('title')
            Crear Log
        @endslot
    @endcomponent

    <form method="POST" action="{{ route('logs.store') }}" enctype="multipart/form-data">
        @csrf
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label" for="titulo">Titulo</label>
                        <input type="text" class="form-control" id="titulo" name="titulo"
                               @class(['border-red-500' => $errors->has('titulo')])
                               placeholder="Ingresa el Titulo" value="{{old('titulo')}}">
                        @error('titulo')
                        <p class="error">{{$message}}</p>
                        @enderror
                    </div>



                    <div class="mb-3">
                        <label class="form-label" for="observaciones">Observaciones</label>
                        <textarea class="form-control" name="observaciones" id="ckeditor-classic"
                            @class(['border-red-500' => $errors->has('observaciones')])>
        {{ old('observaciones') ?? 'Escribe la descripción del observacion aquí...' }} </textarea>
                        @error('observaciones')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="fecha_inicio">Fecha Inicio</label>
                        <input type="date" name="fecha_inicio" id="fecha_inicio" class="form-control"
                               @class(['border-red-500' => $errors->has('fecha_inicio')])
                               value="{{old('fecha_inicio')}}"/>
                        @error('fecha_inicio')
                        <p class="error">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="fecha_finalizacion">Fecha Finalizacion</label>
                        <input type="date" name="fecha_finalizacion" id="fecha_finalizacion" class="form-control"
                               @class(['border-red-500' => $errors->has('fecha_finalizacion')])
                               value="{{old('fecha_finalizacion')}}"/>
                        @error('fecha_finalizacion')
                        <p class="error">{{$message}}</p>
                        @enderror
                    </div>


                    <div class="row">
                        <div class="col-lg-4">
                            <div class="mb-3 mb-lg-0">
                                <label  class="form-label" for="id_estado_log">Estado</label>
                                <select class="form-select" data-choices data-choices-search-false
                                        name="id_estado_log" id="id_estado_log">
                                    @class(['border-red-500' => $errors->has('id_estado_log')])
                                    value="{{old('id_estado_log')}}" >
                                    @foreach ($id_estado_logs as $id_estado_log)
                                        <option value="{{$id_estado_log->id}}">{{ $id_estado_log->id }}: {{$id_estado_log->nombre}}</option>
                                    @endforeach
                                </select>
                                @error('id_estado_log')
                                <p class="error">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3 mb-lg-0">
                                <label class="form-label" for="id_glpi_locations">Ubicacion</label>
                                <select class="form-select" data-choices data-choices-search-false
                                        name="id_glpi_locations" id="id_glpi_locations"
                                        @class(['border-red-500' => $errors->has('id_glpi_locations')])
                                        value="{{old('id_glpi_locations')}}" >
                                    @foreach ($id_glpi_locations as $id_glpi_location)
                                        <option value="{{$id_glpi_location->id}}">{{ $id_glpi_location->id }}: {{$id_glpi_location->name}}</option>
                                    @endforeach
                                </select>
                                @error('id_glpi_locations')
                                <p class="error">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3 mb-lg-0">
                                <label class="form-label" for="id_glpi_tickets">Ticket</label>
                                <select class="form-select" data-choices data-choices-search-false
                                        name="id_glpi_tickets" id="id_glpi_tickets"
                                        @class(['border-red-500' => $errors->has('id_glpi_tickets')])
                                        value="{{old('id_glpi_tickets')}}" >
                                    @foreach ($id_glpi_tickets as $id_glpi_ticket)
                                        <option value="{{$id_glpi_ticket->id}}">{{ $id_glpi_ticket->id }}: {{$id_glpi_ticket->name}}</option>
                                    @endforeach
                                </select>
                                @error('id_glpi_tickets')
                                <p class="error">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="mb-3 mb-lg-0">
                                <label  class="form-label" for="id_equipo_computo[]">Equipo de Computo</label>
                                <select class="form-select" data-choices data-choices-search-false
                                        name="id_equipo_computo[]" id="multiselect-basic"
                                       >

                                    @foreach ($equipos_it as $equipo_it)
                                        <option value="{{$equipo_it->id}}">{{ $equipo_it->id }}: {{$equipo_it->nombre}}</option>
                                    @endforeach
                                </select>
                                @error('id_equipo_computo')
                                <p class="error">{{$message}}</p>
                                @enderror
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mt-4">
                                    <h5 class="fs-14 mb-1" for="id_equipo_computo[]">Equipo de Computo</h5>
                                    <form>
                                        <select multiple="multiple" name="id_equipo_computo[]" id="multiselect-optiongroup"
                                                @class(['border-red-500' => $errors->has('id_equipo_computo')])
                                                value="{{old('id_equipo_computo[]')}}">
                                            @foreach ($equipos_it as $equipo_it)
                                                <option value="{{$equipo_it->id}}">{{ $equipo_it->id }}: {{$equipo_it->nombre}}</option>
                                            @endforeach
                                        </select>
                                        @error('id_equipo_computo')
                                        <p class="error">{{$message}}</p>
                                    @enderror
                                    </form>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3 mb-lg-0">
                                <label class="form-label" for="id_glpi_users">Users</label>
                                <select class="form-select" data-choices data-choices-search-false
                                        name="id_glpi_users" id="id_glpi_users"
                                        @class(['border-red-500' => $errors->has('id_glpi_users')])
                                        value="{{old('id_glpi_users')}}" >
                                    @foreach ($id_glpi_users as $id_glpi_user)
                                        <option value="{{$id_glpi_user->id}}">{{ $id_glpi_user->id }}: {{$id_glpi_user->name}}</option>
                                    @endforeach
                                </select>

                                @error('id_glpi_users')
                                <p class="error">{{$message}}</p>
                                @enderror
                        </div>

                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="archivo">Thumbnail Image</label>
                    <input class="form-control" id="project-thumbnail-img" name="archivo" type="file"
                           accept="image/png, image/gif, image/jpeg">
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0" for="archivo">Archivo</h5>
                </div>
                <div class="card-body">
                    <div>
                        <p class="text-muted">Agregar Historico.</p>

                        <div class="dropzone">
                            <div class="fallback">
                                <input name="archivo" id="archivo" type="file" multiple="multiple">
                            </div>
                            <div class="dz-message needsclick">
                                <div class="mb-3">
                                    <i class="display-4 text-muted ri-upload-cloud-2-fill"></i>
                                </div>

                                <h5>Click Para subir Historico.</h5>
                            </div>
                        </div>

                        <ul class="list-unstyled mb-0" id="dropzone-preview">
                            <li class="mt-2" id="dropzone-preview-list">
                                <!-- This is used as the file preview template -->
                                <div class="border rounded">
                                    <div class="d-flex p-2">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar-sm bg-light rounded">
                                                <img src="#" alt="Project-Image" data-dz-thumbnail
                                                    class="img-fluid rounded d-block" />
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="pt-1">
                                                <h5 class="fs-14 mb-1" data-dz-name>&nbsp;</h5>
                                                <p class="fs-13 text-muted mb-0" data-dz-size></p>
                                                <strong class="error text-danger" data-dz-errormessage></strong>
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0 ms-3">
                                            <button data-dz-remove class="btn btn-sm btn-danger">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!-- end dropzon-preview -->
                    </div>
                </div>
            </div>
            <!-- end card -->
            <div class="text-end mb-4">
                <button type="submit" class="btn btn-danger w-sm">Delete</button>
                <button type="submit" class="btn btn-secondary w-sm">Draft</button>
                <button type="submit" class="btn btn-success w-sm">Create</button>
            </div>
        </div>
        <!-- end col -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Privacy</h5>
                </div>
                <div class="card-body">
                    <div>
                        <label for="choices-privacy-status-input" class="form-label">Status</label>
                        <select class="form-select" data-choices data-choices-search-false
                            id="choices-privacy-status-input">
                            <option value="Private" selected>Private</option>
                            <option value="Team">Team</option>
                            <option value="Public">Public</option>
                        </select>
                    </div>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Tags</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="choices-categories-input" class="form-label">Categories</label>
                        <select class="form-select" data-choices data-choices-search-false id="choices-categories-input">
                            <option value="Designing" selected>Designing</option>
                            <option value="Development">Development</option>
                        </select>
                    </div>

                    <div>
                        <label for="choices-text-input" class="form-label">Skills</label>
                        <input class="form-control" id="choices-text-input" data-choices
                            data-choices-limit="Required Limit" placeholder="Enter Skills" type="text"
                            value="UI/UX, Figma, HTML, CSS, Javascript, C#, Nodejs" />
                    </div>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Members</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="choices-lead-input" class="form-label">Team Lead</label>
                        <select class="form-select" data-choices data-choices-search-false id="choices-lead-input">
                            <option value="Brent Gonzalez" selected>Brent Gonzalez</option>
                            <option value="Darline Williams">Darline Williams</option>
                            <option value="Sylvia Wright">Sylvia Wright</option>
                            <option value="Ellen Smith">Ellen Smith</option>
                            <option value="Jeffrey Salazar">Jeffrey Salazar</option>
                            <option value="Mark Williams">Mark Williams</option>
                        </select>
                    </div>

                    <div>
                        <label class="form-label">Team Members</label>
                        <div class="avatar-group">
                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" data-bs-placement="top" title="Brent Gonzalez">
                                <div class="avatar-xs">
                                    <img src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt="" class="rounded-circle img-fluid">
                                </div>
                            </a>
                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" data-bs-placement="top" title="Sylvia Wright">
                                <div class="avatar-xs">
                                    <div class="avatar-title rounded-circle bg-secondary">
                                        S
                                    </div>
                                </div>
                            </a>
                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" data-bs-placement="top" title="Ellen Smith">
                                <div class="avatar-xs">
                                    <img src="{{ URL::asset('build/images/users/avatar-4.jpg') }}" alt="" class="rounded-circle img-fluid">
                                </div>
                            </a>
                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" data-bs-placement="top" title="Add Members">
                                <div class="avatar-xs" data-bs-toggle="modal" data-bs-target="#inviteMembersModal">
                                    <div
                                        class="avatar-title fs-16 rounded-circle bg-light border-dashed border text-primary">
                                        +
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    </form>

    <!-- Modal -->
    <div class="modal fade" id="inviteMembersModal" tabindex="-1" aria-labelledby="inviteMembersModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header p-3 ps-4 bg-soft-success">
                    <h5 class="modal-title" id="inviteMembersModalLabel">Members</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <div class="search-box mb-3">
                        <input type="text" class="form-control bg-light border-light" placeholder="Search here...">
                        <i class="ri-search-line search-icon"></i>
                    </div>

                    <div class="mb-4 d-flex align-items-center">
                        <div class="me-2">
                            <h5 class="mb-0 fs-13">Members :</h5>
                        </div>
                        <div class="avatar-group justify-content-center">
                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" data-bs-placement="top" title="Brent Gonzalez">
                                <div class="avatar-xs">
                                    <img src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt="" class="rounded-circle img-fluid">
                                </div>
                            </a>
                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" data-bs-placement="top" title="Sylvia Wright">
                                <div class="avatar-xs">
                                    <div class="avatar-title rounded-circle bg-secondary">
                                        S
                                    </div>
                                </div>
                            </a>
                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip"
                                data-bs-trigger="hover" data-bs-placement="top" title="Ellen Smith">
                                <div class="avatar-xs">
                                    <img src="{{ URL::asset('build/images/users/avatar-4.jpg') }}" alt="" class="rounded-circle img-fluid">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="mx-n4 px-4" data-simplebar style="max-height: 225px;">
                        <div class="vstack gap-3">
                            <div class="d-flex align-items-center">
                                <div class="avatar-xs flex-shrink-0 me-3">
                                    <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" alt="" class="img-fluid rounded-circle">
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="fs-13 mb-0"><a href="#" class="text-body d-block">Nancy Martino</a>
                                    </h5>
                                </div>
                                <div class="flex-shrink-0">
                                    <button type="button" class="btn btn-light btn-sm">Add</button>
                                </div>
                            </div>
                            <!-- end member item -->
                            <div class="d-flex align-items-center">
                                <div class="avatar-xs flex-shrink-0 me-3">
                                    <div class="avatar-title bg-soft-danger text-danger rounded-circle">
                                        HB
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="fs-13 mb-0"><a href="#" class="text-body d-block">Henry Baird</a></h5>
                                </div>
                                <div class="flex-shrink-0">
                                    <button type="button" class="btn btn-light btn-sm">Add</button>
                                </div>
                            </div>
                            <!-- end member item -->
                            <div class="d-flex align-items-center">
                                <div class="avatar-xs flex-shrink-0 me-3">
                                    <img src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt="" class="img-fluid rounded-circle">
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="fs-13 mb-0"><a href="#" class="text-body d-block">Frank Hook</a></h5>
                                </div>
                                <div class="flex-shrink-0">
                                    <button type="button" class="btn btn-light btn-sm">Add</button>
                                </div>
                            </div>
                            <!-- end member item -->
                            <div class="d-flex align-items-center">
                                <div class="avatar-xs flex-shrink-0 me-3">
                                    <img src="{{ URL::asset('build/images/users/avatar-4.jpg') }}" alt="" class="img-fluid rounded-circle">
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="fs-13 mb-0"><a href="#" class="text-body d-block">Jennifer Carter</a>
                                    </h5>
                                </div>
                                <div class="flex-shrink-0">
                                    <button type="button" class="btn btn-light btn-sm">Add</button>
                                </div>
                            </div>
                            <!-- end member item -->
                            <div class="d-flex align-items-center">
                                <div class="avatar-xs flex-shrink-0 me-3">
                                    <div class="avatar-title bg-soft-success text-success rounded-circle">
                                        AC
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="fs-13 mb-0"><a href="#" class="text-body d-block">Alexis Clarke</a>
                                    </h5>
                                </div>
                                <div class="flex-shrink-0">
                                    <button type="button" class="btn btn-light btn-sm">Add</button>
                                </div>
                            </div>
                            <!-- end member item -->
                            <div class="d-flex align-items-center">
                                <div class="avatar-xs flex-shrink-0 me-3">
                                    <img src="{{ URL::asset('build/images/users/avatar-7.jpg') }}" alt="" class="img-fluid rounded-circle">
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="fs-13 mb-0"><a href="#" class="text-body d-block">Joseph Parker</a>
                                    </h5>
                                </div>
                                <div class="flex-shrink-0">
                                    <button type="button" class="btn btn-light btn-sm">Add</button>
                                </div>
                            </div>
                            <!-- end member item -->
                        </div>
                        <!-- end list -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light w-xs" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success w-xs">Invite</button>
                </div>
            </div>
            <!-- end modal-content -->
        </div>
        <!-- modal-dialog -->
    </div>
    <!-- end modal -->
@endsection
@section('script')
    <script src="{{ URL::asset('build/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>
    <script src="{{ URL::asset('build/libs/dropzone/dropzone-min.js') }}"></script>
    <script src="{{ URL::asset('build/js/pages/project-create.init.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
