
<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.list-view'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('build/libs/sweetalert2/sweetalert2.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Tarea
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Lista de Tareas
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-xxl-3 col-sm-6">
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="fw-medium text-muted mb-0">Tareas Totales</p>
                            <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="234">0</span>k
                            </h2>
                            <p class="mb-0 text-muted"><span class="badge bg-light text-success mb-0">
                                <i class="ri-arrow-up-line align-middle"></i> 17.32 %
                            </span> vs. previous month</p>
                        </div>
                        <div>
                            <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-soft-info text-info rounded-circle fs-4">
                                <i class="ri-ticket-2-line"></i>
                            </span>
                            </div>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div> <!-- end card-->
        </div>
        <!--end col-->
        <div class="col-xxl-3 col-sm-6">
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="fw-medium text-muted mb-0">Tareas Pendientes</p>
                            <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="64.5">0</span>k</h2>
                            <p class="mb-0 text-muted"><span class="badge bg-light text-danger mb-0">
                                <i class="ri-arrow-down-line align-middle"></i> 0.87 %
                            </span> vs. previous month</p>
                        </div>
                        <div>
                            <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-soft-warning text-warning rounded-circle fs-4">
                                <i class="mdi mdi-timer-sand"></i>
                            </span>
                            </div>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div>
        </div><div class="col-xxl-3 col-sm-6">
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="fw-medium text-muted mb-0">Tareas En Proceso</p>
                            <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="64.5">0</span>k</h2>
                            <p class="mb-0 text-muted"><span class="badge bg-light text-danger mb-0">
                                <i class="ri-arrow-down-line align-middle"></i> 0.87 %
                            </span> vs. previous month</p>
                        </div>
                        <div>
                            <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-soft-warning text-warning rounded-circle fs-4">
                                <i class="mdi mdi-timer-sand"></i>
                            </span>
                            </div>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div>
        </div>
        <!--end col-->
        <div class="col-xxl-3 col-sm-6">
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="fw-medium text-muted mb-0">Tareas Completadas</p>
                            <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="116.21">0</span>K</h2>
                            <p class="mb-0 text-muted"><span class="badge bg-light text-danger mb-0">
                                <i class="ri-arrow-down-line align-middle"></i> 2.52 %
                            </span> vs. previous month</p>
                        </div>
                        <div>
                            <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-soft-success text-success rounded-circle fs-4">
                                <i class="ri-checkbox-circle-line"></i>
                            </span>
                            </div>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div>
        </div>
        <!--end col-->
        <div class="col-xxl-3 col-sm-6">
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="fw-medium text-muted mb-0">Tareas Borradas</p>
                            <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="14.84">0</span>%</h2>
                            <p class="mb-0 text-muted"><span class="badge bg-light text-success mb-0">
                                <i class="ri-arrow-up-line align-middle"></i> 0.63 %
                            </span> vs. previous month</p>
                        </div>
                        <div>
                            <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-soft-danger text-danger rounded-circle fs-4">
                                <i class="ri-delete-bin-line"></i>
                            </span>
                            </div>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->

    <div class="row">
        <div class="col-lg-12">
            <div class="card" id="tasksList">
                <div class="card-header border-0">
                    <div class="d-flex align-items-center">
                        <h5 class="card-title mb-0 flex-grow-1">Todas las Tareas</h5>
                        <div class="flex-shrink-0">
                            <div class="d-flex flex-wrap gap-2">
                                <button class="btn btn-danger add-btn" data-bs-toggle="modal" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Crear Tarea</button>
                                <button class="btn btn-soft-danger" id="remove-actions" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body border border-dashed border-end-0 border-start-0">
                    <form action="<?php echo e(route('tareas.index')); ?>" method="GET">
                        <div class="row g-3">
                            <div class="col-xxl-5 col-sm-12">
                                <div class="search-box">
                                    <input type="text" class="form-control search bg-light border-light" name="search" placeholder="Buscar por Tareas o Otra Cosa..." value="<?php echo e(request('search')); ?>">
                                    <i class="ri-search-line search-icon"></i>
                                </div>
                            </div>
                            <!--end col-->

                            <!--end col-->
                        </div>
                        <!--end row-->
                    </form>

                </div>
                <!--end card-body-->
                <div class="card-body">
                    <div class="table-responsive table-card mb-4">
                        <table class="table align-middle table-nowrap mb-0" id="tasksTable">
                            <thead class="table-light text-muted">
                            <tr>
                                <th scope="col" style="width: 40px;">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                    </div>
                                </th>
                                <th class="sort" data-sort="id">ID</th>
                                <th class="sort" data-sort="glpi_users">Tecnico Asignado</th>
                                <th class="sort" data-sort="nombre">Nombre</th>
                                <th class="sort" data-sort="descripcion">Descripcion</th>
                                <th class="sort" data-sort="fecha_asignacion">Fecha Asignacion</th>
                                <th class="sort" data-sort="fecha_aproximada">Fecha Aproximada</th>
                                <th class="sort" data-sort="fecha_terminada">Fecha Terminada</th>
                                <th class="sort" data-sort="estado">Estado</th>
                                <th class="sort" data-sort="prioridad">Prioridad</th>
                                <th class="sort" data-sort="glpi_tickets">TIcket</th>
                            </tr>
                            </thead>
                            <tbody class="list form-check-all">
                            <?php $__currentLoopData = $tareas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tarea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                        </div>
                                    </th>
                                    <td class="id">

                                        <div class="d-flex">
                                            <a href="<?php echo e(route('tareas.show', ['tarea'=>$tarea])); ?>" class="flex-grow-1"><?php echo e($tarea->id); ?></a>
                                            <div class="flex-shrink-0 ms-4">
                                                <ul class="list-inline tasks-list-menu mb-0">
                                                    <li class="list-inline-item"><a href="<?php echo e(route('tareas.show', ['tarea'=>$tarea])); ?>"><i class="ri-eye-fill align-bottom me-2 text-muted"></i></a>
                                                    </li>
                                                    
                                                    <li class="list-inline-item">
                                                        <a class="remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="project_name"><a href="apps-projects-overview" class="fw-medium link-primary"><?php echo e($tarea->glpi_users->name ?? 'Sin Usuario'); ?></a></td>
                                    <td class="client_name">
                                        <div class="d-flex">
                                            <div class="flex-grow-1" name="nombre"><?php echo e($tarea->nombre); ?></div>

                                        </div>
                                    </td>
                                    <td class="assignedto"><?php echo e($tarea->descripcion); ?></td>

                                    <td class="due_date"><?php echo e($tarea->fecha_asignacion); ?></td>
                                    <td class=""><?php echo e($tarea->fecha_aproximada); ?></td>
                                    <td class=""><?php echo e($tarea->fecha_terminado); ?></td>
                                    <td class="status"><span class="badge badge-soft-secondary text-uppercase"><?php echo e($tarea->estado); ?></span></td>
                                    <td class="priority"><span class="badge bg-danger text-uppercase"><?php echo e($tarea->prioridad); ?></span>
                                    <td class=""><?php echo e($tarea->glpi_tickets->name ?? 'Sin Tickets'); ?></td>

                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>
                        </table>

                        <!--end table-->
                        <div class="noresult" style="display: none">
                            <div class="text-center">
                                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                <h5 class="mt-2">Lo Siento! El Resultado no es encontrado</h5>
                                <p class="text-muted mb-0">Talvez sea Otra busqueda de Tarea.</p>
                            </div>
                        </div>
                    </div>

                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
    </div>
    <!--end row-->
    <div class="col-sm-6">
        <?php if($tareas->count()): ?>
            <nav  class="mt-4">
                <?php echo e($tareas->links()); ?>

            </nav>

        <?php endif; ?>
    </div><!-- end col -->
    <div class="modal fade flip" id="deleteOrder" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body p-5 text-center">
                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#405189,secondary:#f06548" style="width:90px;height:90px"></lord-icon>
                    <div class="mt-4 text-center">
                        <h4>Estas Seguro de Borrar Esta Tarea ?</h4>
                        <p class="text-muted fs-14 mb-4">Borrar Esta Tarea podra Remover toda esa informacion de la Base de Datos.</p>
                        <div class="hstack gap-2 justify-content-center remove">
                            <button class="btn btn-link btn-ghost-success fw-medium text-decoration-none" data-bs-dismiss="modal" id="deleteRecord-close"><i class="ri-close-line me-1 align-middle"></i> Cerrar</button>
                            <form action="<?php echo e(route('tareas.destroy',['tarea' =>$tarea->id])); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button class="btn btn-danger" id="delete-record">Si, Borralo</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end delete modal -->

    <div class="modal fade zoomIn" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0">
                <div class="modal-header p-3 bg-soft-info">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Tarea</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                </div>
                <form method="POST" class="tablelist-form" action="<?php echo e(route('tareas.store')); ?>" autocomplete="off">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-lg-12">
                                <label for="id_glpi_users" class="form-label">TECNICO ASIGNADO</label>
                                <select class="form-select" data-choices data-choices-search-false
                                        name="id_glpi_users" id="id_glpi_users"
                                        class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('id_glpi_users')]); ?>"
                                        value="<?php echo e(old('id_glpi_users')); ?>" >
                                    <option value="">Seleccione un Usuario</option>

                                    <?php $__currentLoopData = $id_glpi_users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id_glpi_user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($id_glpi_user->id); ?>"><?php echo e($id_glpi_user->id); ?>: <?php echo e($id_glpi_user->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php $__errorArgs = ['id_glpi_users'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="error"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <!--end col-->
                            <div class="col-lg-12">
                                <div>
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese el Nombre" required
                                           class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('nombre')]); ?>"
                                           value="<?php echo e(old('nombre')); ?>"/>
                                    <?php $__errorArgs = ['nombre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="error"><?php echo e($message); ?></p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-12">
                                <label for="descripcion" class="form-label">Descripcion</label>
                                <input type="text" name="descripcion" id="descripcion" class="form-control" placeholder="Ingrese Descripcion" required
                                       class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('descripcion')]); ?>"
                                       value="<?php echo e(old('descripcion')); ?>"/>
                                <?php $__errorArgs = ['descripcion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="error"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <!--end col-->
                            <div class="col-lg-12">
                                <label for="fecha_asignacion" class="form-label">Fecha Asignacion</label>
                                <input type="date" name="fecha_asignacion" id="fecha_asignacion" class="form-control"
                                       class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('fecha_asignacion')]); ?>"
                                       value="<?php echo e(old('fecha_asignacion')); ?>"/>
                                <?php $__errorArgs = ['fecha_asignacion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="error"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <!--end col--><div class="col-lg-12">
                                <label for="fecha_aproximada" class="form-label">Fecha Aproximada</label>
                                <input type="date" name="fecha_aproximada" id="fecha_aproximada" class="form-control"
                                       class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('fecha_aproximada')]); ?>"
                                       value="<?php echo e(old('fecha_aproximada')); ?>"/>
                                <?php $__errorArgs = ['fecha_aproximada'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="error"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <!--end col--><div class="col-lg-12">
                                <label for="fecha_terminado" class="form-label">Fecha Terminado</label>
                                <input type="date" name="fecha_terminado" id="fecha_terminado" class="form-control"
                                       class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('fecha_terminado')]); ?>"
                                       value="<?php echo e(old('fecha_terminado')); ?>"/>
                                <?php $__errorArgs = ['fecha_terminado'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="error"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <!--end col-->
                            <div class="col-lg-6">
                                <label for="estado" class="form-label">Estado</label>
                                <select required name="estado" class="form-control" data-choices data-choices-search-false id="estado">
                                    <option value="">Estado</option>
                                    <option value="nuevo">nuevo</option>
                                    <option value="en proceso">en proceso</option>
                                    <option value="en espera">en espera</option>
                                    <option value="finalizado">Finalizado</option>
                                </select>
                            </div>
                            <!--end col-->
                            <div class="col-lg-6">
                                <label for="prioridad" class="form-label">Prioridad</label>
                                <select required name="prioridad" class="form-control" data-choices data-choices-search-false id="prioridad">
                                    <option value="">Prioridad</option>
                                    <option value="baja">Baja</option>
                                    <option value="media">Media</option>
                                    <option value="Alta">Alta</option>
                                </select>
                            </div>
                            <!--end col-->
                            <div class="col-lg-12">
                                <label for="observacion" class="form-label">Observacion</label>
                                <input type="text" name="observacion" id="observacion" class="form-control" placeholder="Ingrese Observacion" required
                                       class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('observacion')]); ?>"
                                       value="<?php echo e(old('observacion')); ?>"/>
                                <?php $__errorArgs = ['observacion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="error"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <!--end col-->
                            <div class="col-lg-12">
                                <label for="id_glpi_tickets" class="form-label">Ticket</label>
                                <select class="form-select" data-choices data-choices-search-false
                                        name="id_glpi_tickets" id="id_glpi_tickets"
                                        class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('id_glpi_tickets')]); ?>"
                                        value="<?php echo e(old('id_glpi_tickets')); ?>" >
                                    <option value="">Seleccione una ticket</option>
                                    <?php $__currentLoopData = $id_glpi_tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id_glpi_ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($id_glpi_ticket->id); ?>"><?php echo e($id_glpi_ticket->id); ?>: <?php echo e($id_glpi_ticket->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </select>
                                <?php $__errorArgs = ['id_glpi_tickets'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="error"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <div class="modal-footer">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-light" id="close-modal" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success" id="add-btn">Add Task</button>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--end modal-->
    <div class="modal fade zoomIn" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0">
                <div class="modal-header p-3 bg-soft-info">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Tarea</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                </div>
                <form method="POST" class="tablelist-form" action="<?php echo e(route('tareas.update' , ['tarea'=>$tarea])); ?>" autocomplete="off">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <input type="hidden" name="tarea_id" id="tareaId" value="" />

                    <div class="modal-body">
                        <input type="hidden" id="tasksId" />
                        <div class="row g-3">
                            <div class="col-lg-12">

                                <label for="id_glpi_users" class="form-label">TECNICO ASIGNADO</label>
                                <select class="form-select" data-choices data-choices-search-false
                                        name="id_glpi_users" id="id_glpi_users"
                                    class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('id_glpi_users')]); ?>">

                                    <?php $__currentLoopData = $id_glpi_users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id_glpi_user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($id_glpi_user->id); ?>" <?php echo e($tarea->id_glpi_users == $id_glpi_user->id ? 'selected' : ''); ?>>
                                            <?php echo e($id_glpi_user->id); ?>: <?php echo e($id_glpi_user->name); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php $__errorArgs = ['id_glpi_users'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="error"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                            </div>
                            <!--end col-->
                            <div class="col-lg-12">
                                <div>
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese el Nombre" required
                                           class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('nombre')]); ?>"
                                           value="<?php echo e($tarea->nombre); ?>"/>
                                    <?php $__errorArgs = ['nombre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="error"><?php echo e($message); ?></p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-12">
                                <label for="descripcion" class="form-label">Descripcion</label>
                                <input type="text" name="descripcion" id="descripcion" class="form-control" placeholder="Ingrese Descripcion" required
                                       class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('descripcion')]); ?>"
                                       value="<?php echo e($tarea->descripcion); ?>"/>
                                <?php $__errorArgs = ['descripcion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="error"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <!--end col-->
                            <div class="col-lg-12">
                                <label for="fecha_asignacion" class="form-label">Fecha Asignacion</label>
                                <input type="date" name="fecha_asignacion" id="fecha_asignacion" class="form-control"
                                       class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('fecha_asignacion')]); ?>"
                                       value="<?php echo e($tarea->fecha_asignacion); ?>"/>
                                <?php $__errorArgs = ['fecha_asignacion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="error"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <!--end col--><div class="col-lg-12">
                                <label for="fecha_aproximada" class="form-label">Fecha Aproximada</label>
                                <input type="date" name="fecha_aproximada" id="fecha_aproximada" class="form-control"
                                       class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('fecha_aproximada')]); ?>"
                                       value="<?php echo e($tarea->fecha_aproximada); ?>"/>
                                <?php $__errorArgs = ['fecha_aproximada'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="error"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <!--end col--><div class="col-lg-12">
                                <label for="fecha_terminado" class="form-label">Fecha Terminado</label>
                                <input type="date" name="fecha_terminado" id="fecha_terminado" class="form-control"
                                       class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('fecha_terminado')]); ?>"
                                       value="<?php echo e($tarea->fecha_terminado); ?>"/>
                                <?php $__errorArgs = ['fecha_terminado'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="error"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <!--end col-->
                            <div class="col-lg-6">
                                <label for="estado" class="form-label">Estado</label>
                                <select required name="estado" class="form-control" data-choices data-choices-search-false id="estado">
                                    <option value="nuevo" <?php echo e($tarea->estado == 'nuevo' ? 'selected' : ''); ?>>nuevo</option>
                                    <option value="en espera" <?php echo e($tarea->estado == 'en espera' ? 'selected' : ''); ?>>en espera</option>
                                    <option value="en proceso" <?php echo e($tarea->estado == 'en proceso' ? 'selected' : ''); ?>>en proceso</option>
                                    <option value="finalizado" <?php echo e($tarea->estado == 'finalizado' ? 'selected' : ''); ?>>completado</option>
                                    <option value="borrado" <?php echo e($tarea->estado == 'borrado' ? 'selected' : ''); ?>>borrado</option>
                                </select>
                            </div>



                            <!--end col-->
                            <div class="col-lg-6">
                                <label for="prioridad" class="form-label">Prioridad</label>
                                <select required name="prioridad" class="form-control" data-choices data-choices-search-false id="prioridad">
                                    <option value="">Seleccione la prioridad</option>
                                    <option value="baja" <?php echo e($tarea->prioridad == 'baja' ? 'selected' : ''); ?>>Baja</option>
                                    <option value="media" <?php echo e($tarea->prioridad == 'media' ? 'selected' : ''); ?>>Media</option>
                                    <option value="alta" <?php echo e($tarea->prioridad == 'alta' ? 'selected' : ''); ?>>Alta</option>
                                </select>
                            </div>

                            <!--end col-->
                            <div class="col-lg-12">
                                <label for="observacion" class="form-label">Observacion</label>
                                <input type="text" name="observacion" id="observacion" class="form-control" placeholder="Ingrese Observacion" required
                                       class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('observacion')]); ?>"
                                       value="<?php echo e($tarea->observacion); ?>"/>
                                <?php $__errorArgs = ['observacion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="error"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <!--end col-->
                            <div class="col-lg-12">

                            <label for="id_glpi_tickets" class="form-label">Ticket</label>
                            <select class="form-select" data-choices data-choices-search-false
                                    name="id_glpi_tickets" id="id_glpi_tickets"
                                class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('id_glpi_tickets')]); ?>">

                                <?php $__currentLoopData = $id_glpi_tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id_glpi_ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($id_glpi_ticket->id); ?>" <?php echo e($tarea->id_glpi_tickets == $id_glpi_ticket->id ? 'selected' : ''); ?>>
                                        <?php echo e($id_glpi_ticket->id); ?>: <?php echo e($id_glpi_ticket->name); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php $__errorArgs = ['id_glpi_tickets'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="error"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <div class="modal-footer">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-light" id="close-modal" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success" id="add-btn">Add Task</button>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $('#editModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Botón que disparó el modal
            var tareaId = button.data('tarea-id'); // Extrae el ID de la tarea desde el botón
            var modal = $(this);
            modal.find('#tareaId').val(tareaId); // Actualiza el campo oculto con el ID de la tarea
        });

    </script>

    <!--end modal-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('build/libs/list.js/list.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/libs/list.pagination.js/list.pagination.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/js/pages/tasks-list.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/libs/sweetalert2/sweetalert2.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/js/app.js')); ?>"></script>

    <script>
        $(document).ready(function() {
            $('#editModal').on('hidden.bs.modal', function () {
                window.history.pushState({}, document.title, window.location.pathname);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            // Limpia la URL después de cerrar el modal de edición
            $('#editModal').on('hidden.bs.modal', function () {
                window.history.pushState({}, document.title, window.location.pathname);
            });

            // Limpia la URL después de cerrar el modal de creación
            $('#showModal').on('hidden.bs.modal', function () {
                window.history.pushState({}, document.title, window.location.pathname);
            });

            // Opcional: Limpia la URL después de una operación de creación exitosa
            // Esto dependerá de cómo manejes la respuesta de la creación
            // Si recargas la página o rediriges al usuario, puedes incluir la lógica aquí
        });
    </script>
    <script>
        flatpickr('#demo-datepicker', {
            mode: 'range',
            dateFormat: 'Y-m-d',
        });
    </script>
    <script>
        flatpickr('#fecha_inicio', {
            dateFormat: 'Y-m-d',
        });
        flatpickr('#fecha_fin', {
            dateFormat: 'Y-m-d',
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\glpi-insumos\resources\views/tarea/index.blade.php ENDPATH**/ ?>