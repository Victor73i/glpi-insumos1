
<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Editar Documentacion '); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('build/libs/dropzone/dropzone.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Documentacion
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Editar Documentacion
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <form method="POST" action="<?php echo e(route('documentacions.update', [$documentacion->id])); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre"
                                   class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('nombre')]); ?>" value="<?php echo e($documentacion->nombre); ?>"
                                   placeholder="Ingresa el Titulo" >
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



                        <div class="mb-3">
                            <label class="form-label" for="descripcion">descripcion</label>
                            <textarea class="form-control" name="descripcion" id="ckeditor-classic" placeholder="Ingresa la Descripcion"
                                      class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('Descripcion')]); ?>" value="<?php echo e($documentacion->Descripcion); ?>">
        <?php echo e($documentacion->descripcion); ?> </textarea>
                            <?php $__errorArgs = ['descripcion'];
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
                            <label for="fecha_creacion">Fecha Creacion</label>
                            <input type="date" name="fecha_creacion" id="fecha_creacion" class="form-control"
                                   class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('fecha_creacion')]); ?>"
                                   value="<?php echo e($documentacion->fecha_creacion); ?>"/>
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

                        <div class="row">
                            <div class="col-lg-4">

                                <div class="mb-3 mb-lg-0">
                                    <label  class="form-label" for="id_estado_documentacion">Estado</label>
                                    <select class="form-select" data-choices data-choices-search-true
                                            name="id_estado_documentacion" id="id_estado_documentacion">

                                        class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('id_estado_documentacion')]); ?>"
                                        >
                                        <?php $__currentLoopData = $id_estado_documentacion; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id_estado_documentacions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($id_estado_documentacions->id); ?>" <?php echo e($documentacion->id_estado_documentacion == $id_estado_documentacions->id ? 'selected' : ''); ?>>
                                                <?php echo e($id_estado_documentacions->id); ?>: <?php echo e($id_estado_documentacions->nombre); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php $__errorArgs = ['id_estado_documentacion'];
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
                                <div class="mb-3 mb-lg-0">
                                    <label  class="form-label" for="id_tipo_documentacion">Tipo</label>
                                    <select class="form-select" data-choices data-choices-search-true
                                            name="id_tipo_documentacion" id="id_tipo_documentacion">

                                        class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('id_tipo_documentacion')]); ?>"
                                        >
                                        <?php $__currentLoopData = $id_tipo_documentacion; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id_tipo_documentacions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($id_tipo_documentacions->id); ?>" <?php echo e($documentacion->id_tipo_documentacion == $id_tipo_documentacions->id ? 'selected' : ''); ?>>
                                                <?php echo e($id_tipo_documentacions->id); ?>: <?php echo e($id_tipo_documentacions->nombre); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php $__errorArgs = ['id_tipo_documentacion'];
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
                                <div class="mb-3 mb-lg-0">
                                    <label  class="form-label" for="id_categoria_documentacion">Categoria</label>
                                    <select class="form-select" data-choices data-choices-search-true
                                            name="id_categoria_documentacion" id="id_categoria_documentacion">

                                        class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('id_categoria_documentacion')]); ?>"
                                        >
                                        <?php $__currentLoopData = $id_categoria_documentacion; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id_categoria_documentacions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($id_categoria_documentacions->id); ?>" <?php echo e($documentacion->id_categoria_documentacion == $id_categoria_documentacions->id ? 'selected' : ''); ?>>
                                                <?php echo e($id_categoria_documentacions->id); ?>: <?php echo e($id_categoria_documentacions->nombre); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php $__errorArgs = ['id_categoria_documentacion'];
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
                                    >

                                        <?php $__currentLoopData = $id_glpi_users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id_glpi_user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($id_glpi_user->id); ?>" <?php echo e($documentacion->id_glpi_users == $id_glpi_user->id ? 'selected' : ''); ?>><?php echo e($id_glpi_user->id); ?>: <?php echo e($id_glpi_user->name); ?></option>
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

                        <hr>

                        <!-- end card body -->
                    </div>
                    <!-- end card -->

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Archivo</h5>
                        </div>
                        <div class="card-body">
                            
                            <?php if(!empty($existingFiles) && count($existingFiles) > 0 && $existingFiles[0] != ''): ?>
                                <ul>
                                    <?php $__currentLoopData = $existingFiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($file != ''): ?> 
                                        <li>
                                            <?php echo e($file); ?> -
                                            <a href="<?php echo e(asset('documentacion/archivo/' . $file)); ?>" target="_blank">Ver</a>
                                            <!-- Botón que dispara el modal -->
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteOrder" data-file="<?php echo e($file); ?>">
                                                Eliminar
                                            </button>
                                        </li>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            <?php else: ?>
                                <p>No hay archivos adjuntos.</p>
                            <?php endif; ?>

                            
                            <div class="mb-3">
                                <label for="archivo" class="form-label">Agregar más archivos</label>
                                <input class="form-control" type="file" name="archivo[]" id="archivo" multiple>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- end card -->
                <div class="text-end mb-4">

                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteOrder1">
                        Eliminar Log
                    </button>
                    <a href="<?php echo e(route('documentacions.index')); ?>" class="btn btn-secondary w-sm">Cancel</a>
                    <button type="submit" class="btn btn-success w-sm">Editar</button>
                </div>
            </div>
            <!-- end col -->

            <!-- end row -->
        </div>
        </div>

    </form>
    <div class="modal fade flip" id="deleteOrder" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body p-5 text-center">
                    <div class="modal-body p-5 text-center">
                        <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#405189,secondary:#f06548" style="width:90px;height:90px"></lord-icon>
                        <div class="mt-4 text-center">
                            <h4>Estas Seguro de Borrar Esta Tarea ?</h4>
                            <p class="text-muted fs-14 mb-4">Borrar Esta Tarea podra Remover toda esa informacion de la Base de Datos.</p>
                            <div class="hstack gap-2 justify-content-center remove">
                                <button class="btn btn-link btn-ghost-success fw-medium text-decoration-none" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Cerrar</button>
                                <!-- Formulario de eliminación -->
                                <form action="<?php echo e(route('documentacions.remove-file', ['id' => $documentacion->id])); ?>" method="POST" id="deleteFileForm">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="file_to_remove" id="fileToRemove">
                                    <button type="submit" class="btn btn-danger">Confirmar Eliminación</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade flip" id="deleteOrder1" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body p-5 text-center">
                    <div class="modal-body p-5 text-center">
                        <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#405189,secondary:#f06548" style="width:90px;height:90px"></lord-icon>
                        <div class="mt-4 text-center">
                            <h4>Estas Seguro de Borrar Esta Tarea ?</h4>
                            <p class="text-muted fs-14 mb-4">Borrar Esta Tarea podra Remover toda esa informacion de la Base de Datos.</p>
                            <div class="hstack gap-2 justify-content-center remove">
                                <button class="btn btn-link btn-ghost-success fw-medium text-decoration-none" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Cerrar</button>
                                <!-- Formulario de eliminación -->
                                <form action="<?php echo e(route('documentacions.destroy', $documentacion->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger">Eliminar Documentacion</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var deleteModal = document.getElementById('deleteOrder');
            deleteModal.addEventListener('show.bs.modal', function (event) {
                // Botón que dispara el modal
                var button = event.relatedTarget;
                // Extrae la información del atributo data-file
                var file = button.getAttribute('data-file');
                // Actualiza el formulario con la información del archivo
                var input = deleteModal.querySelector('#fileToRemove');
                input.value = file;
            });
        });
    </script>

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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\glpi-insumos\resources\views/documentacion/edit.blade.php ENDPATH**/ ?>