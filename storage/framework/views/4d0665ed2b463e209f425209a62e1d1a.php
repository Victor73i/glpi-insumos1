<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Crear Log '); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('build/libs/dropzone/dropzone.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Log
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Crear Log
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <form method="POST" action="<?php echo e(route('logs.update', [$log->id])); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="titulo">Titulo</label>
                            <input type="text" class="form-control" id="titulo" name="titulo"
                                   class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('titulo')]); ?>" value="<?php echo e($log->titulo); ?>"
                                   placeholder="Ingresa el Titulo" >
                            <?php $__errorArgs = ['titulo'];
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



                        <div class="mb-3">
                            <label class="form-label" for="observaciones">Observaciones</label>
                            <textarea class="form-control" name="observaciones" id="ckeditor-classic" placeholder="Ingresa la Observacion"
                                      class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('observaciones')]); ?>" value="<?php echo e($log->observaciones); ?>">
        <?php echo e($log->observaciones); ?> </textarea>
                            <?php $__errorArgs = ['observaciones'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-danger"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="mb-3">
                            <label for="fecha_inicio">Fecha Inicio</label>
                            <input type="date" name="fecha_inicio" id="fecha_inicio" class="form-control"
                                   class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('fecha_inicio')]); ?>"
                                   value="<?php echo e($log->fecha_inicio); ?>"/>
                            <?php $__errorArgs = ['fecha_inicio'];
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
                        <div class="mb-4">
                            <label for="fecha_finalizacion">Fecha Finalizacion</label>
                            <input type="date" name="fecha_finalizacion" id="fecha_finalizacion" class="form-control"
                                   class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('fecha_finalizacion')]); ?>"
                                   value="<?php echo e($log->fecha_finalizacion); ?>"/>
                            <?php $__errorArgs = ['fecha_finalizacion'];
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


                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3 mb-lg-0">
                                    <label  class="form-label" for="id_estado_log">Estado</label>
                                    <select class="form-select" data-choices data-choices-search-true
                                            name="id_estado_log" id="id_estado_log">

                                        class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('id_estado_log')]); ?>"
                                        value="<?php echo e($log->id_estado_log); ?>" >
                                        <?php $__currentLoopData = $id_estado_logs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id_estado_log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($id_estado_log->id); ?>"><?php echo e($id_estado_log->id); ?>: <?php echo e($id_estado_log->nombre); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php $__errorArgs = ['id_estado_log'];
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
                            <div class="col-lg-4">
                                <div class="mb-3 mb-lg-0">
                                    <label class="form-label" for="id_glpi_locations">Ubicacion</label>
                                    <select class="form-select" data-choices data-choices-search-false
                                            name="id_glpi_locations" id="id_glpi_locations"
                                            class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('id_glpi_locations')]); ?>"
                                            value="<?php echo e($log->id_glpi_locations); ?>" >

                                        <?php $__currentLoopData = $id_glpi_locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id_glpi_location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($id_glpi_location->id); ?>"><?php echo e($id_glpi_location->id); ?>: <?php echo e($id_glpi_location->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php $__errorArgs = ['id_glpi_locations'];
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
                            <div class="col-lg-4">
                                <div class="mb-3 mb-lg-0">
                                    <label class="form-label" for="id_glpi_tickets">Ticket</label>
                                    <select class="form-select" data-choices data-choices-search-false
                                            name="id_glpi_tickets" id="id_glpi_tickets"
                                            class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('id_glpi_tickets')]); ?>"
                                            value="<?php echo e($log->id_glpi_tickets); ?>" >

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
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3 mb-lg-0">
                                    <label class="form-label" for="id_glpi_users">Users</label>
                                    <select class="form-select" data-choices data-choices-search-false
                                            name="id_glpi_users" id="id_glpi_users"
                                            class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('id_glpi_users')]); ?>"
                                            value="<?php echo e($log->id_glpi_users); ?>" >

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

                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3 mb-lg-0">
                                    <label class="form-label" for="id_equipo_computo[]">Equipo IT</label>
                                    <select class="form-select" data-choices
                                            name="id_equipo_computo[]" id="multiselect-basic"
                                            class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('id_equipo_computo')]); ?>"
                                            required multiple="multiple" value="<?php echo e($log->id_equipo_computo); ?>">

                                        <?php $__currentLoopData = $equipos_it; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $equipo_it): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($log->equiposIt->contains('id', $equipo_it->id)): ?>
                                                <option value="<?php echo e($equipo_it->id); ?>" selected=""><?php echo e($equipo_it->id); ?>: <?php echo e($equipo_it->nombre); ?></option>
                                            <?php else: ?>
                                                <option value="<?php echo e($equipo_it->id); ?>"><?php echo e($equipo_it->id); ?>: <?php echo e($equipo_it->nombre); ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php $__errorArgs = ['id_equipo_computo'];
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



                        </div>
                        <hr>

                        <!-- end card body -->
                    </div>
                    <!-- end card -->

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Archivo</h5>
                        </div>
                        <div class="card-body">
                            <p class="text-muted">Agregar Histórico.</p>
                            <div class="dropzone">
                                <div class="fallback">
                                    <input name="archivo" type="file" class="form-control" multiple="multiple" value="<?php echo e($log->archivo); ?>">


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
                                                <button data-dz-remove class="btn btn-sm btn-danger">Borrar</button>
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
                    <button href="#" class="btn btn-danger w-sm">Delete</button>
                    <a href="<?php echo e(route('logs.index')); ?>" class="btn btn-secondary w-sm">Cancel</a>
                    <button type="submit" class="btn btn-success w-sm">Editar</button>
                </div>
            </div>
            <!-- end col -->

            <!-- end row -->
        </div>
        </div>
    </form>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var element = document.getElementById('multiselect-basic');
            var choices = new Choices(element, {
                removeItemButton: true,
                searchEnabled: true,
                searchChoices: true,
                searchFloor: 1,
                searchResultLimit: 5,
                renderChoiceLimit: -1
            });
        });
    </script>
    <!-- Modal -->

    <!-- end modal -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('build/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/libs/dropzone/dropzone-min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/js/pages/project-create.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/js/app.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\glpi-insumos\resources\views/log/edit.blade.php ENDPATH**/ ?>