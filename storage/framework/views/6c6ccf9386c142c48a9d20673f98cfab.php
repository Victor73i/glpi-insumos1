
<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('Tarea Detalle '); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-xxl-3">
        <div class="card">
            <div class="card-body text-center">
                <h6 class="card-title mb-3 flex-grow-1 text-start">Tiempo Para Realizar La Tarea</h6>
                <div class="mb-2">
                    <lord-icon src="https://cdn.lordicon.com/kbtmbyzy.json" trigger="loop"
                        colors="primary:#405189,secondary:#02a8b5" style="width:90px;height:90px">
                    </lord-icon>
                </div>
                <h3 class="mb-1">9 hrs 13 min</h3>
                <h5 class="fs-14 mb-4">HORA POR TERMINAR</h5>
                <div class="hstack gap-2 justify-content-center">
                    <button class="btn btn-danger btn-sm"><i class="ri-stop-circle-line align-bottom me-1"></i> Borrar</button>
                    <button class="btn btn-success btn-sm"><i class="ri-play-circle-line align-bottom me-1"></i> Editar</button>
                </div>
            </div>
        </div><!--end card-->
        <div class="card mb-3">
            <div class="card-body">
                <div class="mb-4">
                    <select class="form-control" name="choices-single-default" data-choices data-choices-search-false>
                        <option value="">Seleccione Estado de la Tarea</option>
                        <option value="nuevo">Nuevo</option>
                        <option value="en espera">En espera</option>
                        <option value="en proceso">En proceso</option>
                        <option value="completado" selected>Completado</option>
                    </select>
                </div>
                <div class="table-card">
                    <table class="table mb-0">
                        <tbody>
                            <tr>
                                <td class="fw-medium">No. Tarea</td>
                                <td><?php echo e($tareas->id); ?></td>
                            </tr>
                            <tr>
                                <td class="fw-medium">Nombre Tarea</td>
                                <td><?php echo e($tareas->nombre); ?></td>
                            </tr>
                            <tr>
                                <td class="fw-medium">Project Name</td>
                                <td>Velzon - Admin Dashboard</td>
                            </tr>
                            <tr>
                                <td class="fw-medium">Prioridad</td>
                                <td><span class="badge badge-soft-danger"><?php echo e($tareas->prioridad); ?></span></td>
                            </tr>
                            <tr>
                                <td class="fw-medium">Estado</td>
                                <td><span class="badge badge-soft-secondary"><?php echo e($tareas->estado); ?></span></td>
                            </tr>
                            <tr>
                                <td class="fw-medium">Fecha Terminada</td>
                                <td><?php echo e($tareas->fecha_terminado); ?></td>
                            </tr>
                        </tbody>
                    </table><!--end table-->
                </div>
            </div>
        </div><!--end card-->
        <div class="card mb-3">
            <div class="card-body">
                <div class="d-flex mb-3">
                    <h6 class="card-title mb-0 flex-grow-1">Tecnico Asignado</h6>
                    
                </div>
                <ul class="list-unstyled vstack gap-3 mb-0">
                    <li>
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <h6 class="mb-1"><a href=""><?php echo e($tareas->glpi_users->id); ?></a></h6>

                            </div>
                            <div class="flex-grow-1 ms-2">
                                <h6 class="mb-1"><a href=""><?php echo e($tareas->glpi_users->name); ?></a></h6>
                                <p class="text-muted mb-0"><?php echo e($tareas->glpi_users->name); ?></p>
                            </div>

                        </div>
                    </li>

                </ul>
            </div>
        </div><!--end card-->
         <!--end card-->
    </div><!---end col-->
    <div class="col-xxl-9">
        <div class="card">
            <div class="card-body">
                <div class="text-muted">
                    <h6 class="mb-3 fw-semibold text-uppercase">Descripcion</h6>
                    <p><?php echo e($tareas->descripcion); ?></p>

                    <h6 class="mb-3 fw-semibold text-uppercase">Observacion</h6>
                    <ul class=" ps-3 list-unstyled vstack gap-2">
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="productTask">
                                <label class="form-check-label" for="productTask">
                                    <?php echo e($tareas->observacion); ?>

                                </label>
                            </div>
                        </li>

                    </ul>

                    <div class="pt-3 border-top border-top-dashed mt-4">
                        <h6 class="mb-3 fw-semibold text-uppercase">Historico</h6>
                        <div class="hstack flex-wrap gap-2 fs-15">
                            <div class="badge fw-medium badge-soft-info"><?php echo e($tareas->created_at); ?></div>
                            <div class="badge fw-medium badge-soft-info"><?php echo e($tareas->updated_at); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end card-->

    </div><!--end col-->
</div><!--end row-->

<div class="modal fade" id="inviteMembersModal" tabindex="-1" aria-labelledby="inviteMembersModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="modal-header p-3 ps-4 bg-soft-success">
                <h5 class="modal-title" id="inviteMembersModalLabel">AGREGAR OTRO TECNICO</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <div class="search-box mb-3">
                    <input type="text" class="form-control bg-light border-light" placeholder="Search here...">
                    <i class="ri-search-line search-icon"></i>
                </div>

                <div class="mb-4 d-flex align-items-center">
                    <div class="me-2">
                        <h5 class="mb-0 fs-13">Tecnicos :</h5>
                    </div>
                    <div class="avatar-group justify-content-center">
                        <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Tonya Noble">
                            <div class="avatar-xs">
                                <img src="<?php echo e(URL::asset('build/images/users/avatar-10.jpg')); ?>" alt="" class="rounded-circle img-fluid">
                            </div>
                        </a>
                        <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Thomas Taylor">
                            <div class="avatar-xs">
                                <img src="<?php echo e(URL::asset('build/images/users/avatar-8.jpg')); ?>" alt="" class="rounded-circle img-fluid">
                            </div>
                        </a>
                        <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Nancy Martino">
                            <div class="avatar-xs">
                                <img src="<?php echo e(URL::asset('build/images/users/avatar-2.jpg')); ?>" alt="" class="rounded-circle img-fluid">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="mx-n4 px-4" data-simplebar style="max-height: 225px;">
                    <div class="vstack gap-3">
                        <div class="d-flex align-items-center">
                            <div class="avatar-xs flex-shrink-0 me-3">
                                <img src="<?php echo e(URL::asset('build/images/users/avatar-2.jpg')); ?>" alt="" class="img-fluid rounded-circle">
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fs-13 mb-0"><a href="javascript:void(0);" class="text-body d-block">Nancy Martino</a></h5>
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
                                <h5 class="fs-13 mb-0"><a href="javascript:void(0);" class="text-body d-block">Henry Baird</a></h5>
                            </div>
                            <div class="flex-shrink-0">
                                <button type="button" class="btn btn-light btn-sm">Add</button>
                            </div>
                        </div>
                        <!-- end member item -->
                        <div class="d-flex align-items-center">
                            <div class="avatar-xs flex-shrink-0 me-3">
                                <img src="<?php echo e(URL::asset('build/images/users/avatar-3.jpg')); ?>" alt="" class="img-fluid rounded-circle">
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fs-13 mb-0"><a href="javascript:void(0);" class="text-body d-block">Frank Hook</a></h5>
                            </div>
                            <div class="flex-shrink-0">
                                <button type="button" class="btn btn-light btn-sm">Add</button>
                            </div>
                        </div>
                        <!-- end member item -->
                        <div class="d-flex align-items-center">
                            <div class="avatar-xs flex-shrink-0 me-3">
                                <img src="<?php echo e(URL::asset('build/images/users/avatar-4.jpg')); ?>" alt="" class="img-fluid rounded-circle">
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fs-13 mb-0"><a href="javascript:void(0);" class="text-body d-block">Jennifer Carter</a></h5>
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
                                <h5 class="fs-13 mb-0"><a href="javascript:void(0);" class="text-body d-block">Alexis Clarke</a></h5>
                            </div>
                            <div class="flex-shrink-0">
                                <button type="button" class="btn btn-light btn-sm">Add</button>
                            </div>
                        </div>
                        <!-- end member item -->
                        <div class="d-flex align-items-center">
                            <div class="avatar-xs flex-shrink-0 me-3">
                                <img src="<?php echo e(URL::asset('build/images/users/avatar-7.jpg')); ?>" alt="" class="img-fluid rounded-circle">
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fs-13 mb-0"><a href="javascript:void(0);" class="text-body d-block">Joseph Parker</a></h5>
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
                <button type="button" class="btn btn-success w-xs">Assigned</button>
            </div>
        </div>
        <!-- end modal-content -->
    </div>
    <!-- modal-dialog -->
</div>
<!-- end modal -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('build/js/app.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\glpi-insumos\resources\views/apps-tasks-details.blade.php ENDPATH**/ ?>