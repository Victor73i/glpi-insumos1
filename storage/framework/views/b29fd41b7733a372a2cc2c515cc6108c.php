
<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Lista de Tareas '); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Project
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Lista de LOG
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    <div class="row g-4 mb-3">
        <div class="col-sm-auto">
            <div>
                <a href="<?php echo e(route('logs.create')); ?>" class="btn btn-success"><i class="ri-add-line align-bottom me-1"></i> Add
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



    

    <div class="row">

        <?php $__currentLoopData = $logs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-xxl-3 col-sm-6 project-card">

                <div class="card card-height-100">
                    
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted mb-4">Ultima Vez Actualizado <?php echo e($log->updated_at->diffForHumans()); ?></p>
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
                                            <a class="dropdown-item" href="<?php echo e(route('logs.show', ['log'=>$log])); ?>"><i
                                                    class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                View</a>
                                            <a class="dropdown-item" href="<?php echo e(route('logs.edit', [$log->id])); ?>"><i
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
                            
                            <h5 class="mb-1 fs-15">

                                <a href="<?php echo e(route('logs.show', ['log'=>$log])); ?>" class="text-dark"><?php echo e($log->titulo); ?></a> -
                                <a href="<?php echo e(route('logs.show', ['log'=>$log])); ?>" class="text-dark"><?php echo e($log->observaciones); ?></a>
                            </h5>
                            <p class="text-muted text-truncate-two-lines mb-3"> <?php echo e($log->archivo); ?></p>
                            
                            <div class="text-muted">
                                <i class="ri-calendar-event-fill me-1 align-bottom"></i>
                                Fecha Inicio <?php echo e($log->fecha_inicio); ?> -
                                Fecha Finalizacion <?php echo e($log->fecha_finalizacion); ?> -
                            </div>
                            <div class="mt-2 text-center">
                                <h4 class="card-title mb-0 flex-grow-1">Archivo</h4>

                            </div>
                            <hr>
                            <div class="text-muted">
                                <?php if($log->archivo): ?>
                                    <?php
                                        $archivos = explode(',', $log->archivo);
                                    ?>

                                    <?php $__currentLoopData = $archivos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $archivo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if(pathinfo($archivo, PATHINFO_EXTENSION) === 'pdf'): ?>
                                            <a href="<?php echo e(asset('log/archivo/' . $archivo)); ?>" target="_blank">Ver PDF</a>
                                        <?php elseif(in_array(pathinfo($archivo, PATHINFO_EXTENSION), ['png', 'jpg', 'jpeg', 'gif'])): ?>
                                            <!-- Utilizamos data-bs-toggle y data-bs-target para activar el modal -->
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#imagenZoomModal" onclick="showImage('<?php echo e(asset('log/archivo/' . $archivo)); ?>')">
                                                <img src="<?php echo e(asset('log/archivo/' . $archivo)); ?>" alt="archivo" width="50px" height="50px">
                                            </a>
                                        <?php else: ?>
                                            <a href="<?php echo e(asset('log/archivo/' . $archivo)); ?>" >No hay archivo</a>
                                        <?php endif; ?>
                                        <br>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </div>


                            
                            
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-top-dashed py-2">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <p class="text-muted mb-4">Creado <?php echo e($log->created_at->diffForHumans()); ?></p>

                            </div>


                        </div>

                    </div>
                </div>
            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    

    




    <!-- end row -->

        <!-- end col -->

        <div class="col-sm-6">
            <?php if($logs->count()): ?>
                <nav  class="mt-4">
                    <?php echo e($logs->links()); ?>

                </nav>

            <?php endif; ?>
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
                        <form action="<?php echo e(route('logs.destroy',['log' =>$log->id])); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn w-sm btn-danger"  id="remove-project">Si, Borralo!</button>

                        </form>
                    </div>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <div class="modal fade" id="imagenZoomModal" tabindex="-1" aria-labelledby="imagenZoomModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <!-- Aquí se mostrará la imagen -->
                    <img id="imagenZoom" src="" class="img-fluid" alt="Zoom Imagen">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function showImage(src) {
            // Configura el src de la imagen en el modal
            document.getElementById('imagenZoom').src = src;
            // Puedes agregar aquí más lógica si necesitas
        }
    </script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('build/js/pages/project-list.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/js/app.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\glpi-insumos\resources\views/log/index.blade.php ENDPATH**/ ?>