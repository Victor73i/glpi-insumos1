<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.projects'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> Dashboards <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> Projects <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    <div class="row project-wrapper">
        <div class="col-xxl-8">
            <div class="row">
                <div class="col-xl-4">
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm flex-shrink-0">
                                    <span
                                        class="avatar-title bg-soft-primary text-primary rounded-2 fs-2">
                                        <i data-feather="briefcase" class="text-primary"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 overflow-hidden ms-3">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-3">
                                        Active Projects</p>
                                    <div class="d-flex align-items-center mb-3">
                                        <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value"
                                                                                data-target="825">0</span></h4>
                                        <span class="badge badge-soft-danger fs-12"><i
                                                class="ri-arrow-down-s-line fs-13 align-middle me-1"></i>5.02
                                            %</span>
                                    </div>
                                    <p class="text-muted text-truncate mb-0">Projects this month</p>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div>
                </div><!-- end col -->

                <div class="col-xl-4">
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm flex-shrink-0">
                                    <span
                                        class="avatar-title bg-soft-warning text-warning rounded-2 fs-2">
                                        <i data-feather="award" class="text-warning"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <p class="text-uppercase fw-medium text-muted mb-3">New Leads</p>
                                    <div class="d-flex align-items-center mb-3">
                                        <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value"
                                                                                data-target="7522">0</span></h4>
                                        <span class="badge badge-soft-success fs-12"><i
                                                class="ri-arrow-up-s-line fs-13 align-middle me-1"></i>3.58
                                            %</span>
                                    </div>
                                    <p class="text-muted mb-0">Leads this month</p>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div>
                </div><!-- end col -->

                <div class="col-xl-4">
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-soft-info text-info rounded-2 fs-2">
                                        <i data-feather="clock" class="text-info"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1 overflow-hidden ms-3">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-3">
                                        Total Hours</p>
                                    <div class="d-flex align-items-center mb-3">
                                        <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value"
                                                                                data-target="168">0</span>h <span class="counter-value"
                                                                                                                  data-target="40">0</span>m</h4>
                                        <span class="badge badge-soft-danger fs-12"><i
                                                class="ri-arrow-down-s-line fs-13 align-middle me-1"></i>10.35
                                            %</span>
                                    </div>
                                    <p class="text-muted text-truncate mb-0">Work this month</p>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header border-0 align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Projects Overview</h4>
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
                                        <h5 class="mb-1"><span class="counter-value"
                                                               data-target="9851">0</span></h5>
                                        <p class="text-muted mb-0">Number of Projects</p>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-6 col-sm-3">
                                    <div class="p-3 border border-dashed border-start-0">
                                        <h5 class="mb-1"><span class="counter-value"
                                                               data-target="1026">0</span></h5>
                                        <p class="text-muted mb-0">Active Projects</p>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-6 col-sm-3">
                                    <div class="p-3 border border-dashed border-start-0">
                                        <h5 class="mb-1">$<span class="counter-value"
                                                                data-target="228.89">0</span>k</h5>
                                        <p class="text-muted mb-0">Revenue</p>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-6 col-sm-3">
                                    <div class="p-3 border border-dashed border-start-0 border-end-0">
                                        <h5 class="mb-1 text-success"><span class="counter-value"
                                                                            data-target="10589">0</span>h</h5>
                                        <p class="text-muted mb-0">Working Hours</p>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                        </div><!-- end card header -->
                        <div class="card-body p-0 pb-2">
                            <div>
                                <div id="projects-overview-chart"
                                     data-colors='["--vz-primary", "--vz-warning", "--vz-success"]'
                                     dir="ltr" class="apex-charts"></div>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end col -->

        <div class="col-xxl-4">
            <div class="card">
                <div class="card-header border-0">
                    <h4 class="card-title mb-0">Últimos Documentacion</h4>
                </div><!-- end cardheader -->
                <div class="card-body pt-0">
                    <h6 class="text-uppercase fw-semibold mt-4 mb-3 text-muted">Últimos Registros:</h6>
                    <div class="upcoming-scheduled">
                        
                        <?php $__currentLoopData = $ultimosDocumentacion; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $documentacion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="d-flex align-items-center mb-4">
                                
                                <div class="flex-shrink-0 avatar-sm">
                        <span class="avatar-title bg-soft-primary text-primary rounded-circle fs-4">
                            
                            <i class="ri-computer-line"></i>
                        </span>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mb-1"><?php echo e($documentacion->nombre); ?></h6>
                                    <p class="text-muted mb-0">Tipo: <?php echo e($documentacion->descripcion); ?> - <?php echo e($documentacion->tipo_documentacion->nombre); ?></p>
                                </div>
                                <div class="flex-shrink-0">
                                    
                                    <p class="text-muted mb-0"><?php echo e($documentacion->created_at->diffForHumans()); ?></p>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="mt-3 text-center">
                        <a href="<?php echo e(route('documentacions.index')); ?>" class="btn btn-primary">Ver Todos los Documentos</a>
                    </div>
                </div><!-- end cardbody -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->

    <div class="row">
        <div class="col-xl-9">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h4 class="card-title flex-grow-1 mb-0">EQUIPO IT</h4>

                </div><!-- end cardheader -->
                <div class="card-body">
                    <div class="table-responsive table-card">
                        <table class="table table-nowrap table-centered align-middle">
                            <thead class="bg-light text-muted">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Fecha Creacion</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col">Tipo</th>
                                    <th scope="col">Categoria</th>
                                    <th scope="col">Usuario</th>
                                <th scope="col">Action</th>

                            </tr><!-- end tr -->
                            </thead><!-- thead -->

                            <tbody>
                            <?php $__currentLoopData = $documentacions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $documentacion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <tr>

                                    <td class="id"><?php echo e($documentacion->id); ?></td>


                                    <td class="nombre"><?php echo e($documentacion->nombre); ?></td>

                                    <td class="descripcion"><?php echo e($documentacion->descripcion); ?></td>
                                    <td class="fecha_creacion"><?php echo e($documentacion->fecha_creacion); ?></td>
                                    <td class="descripcion"><?php echo e($documentacion->estado_documentacion->nombre); ?></td>
                                    <td class="descripcion"><?php echo e($documentacion->tipo_documentacion->nombre); ?></td>
                                    <td class="descripcion"><?php echo e($documentacion->categoria_documentacion->nombre); ?></td>
                                    <td class="descripcion"><?php echo e($documentacion->glpi_users->name); ?></td>


                                    <td>
                                        <ul class="list-inline hstack gap-2 mb-0">

                                            <li class="list-inline-item">
                                                <div class="dropdown">
                                                    <button
                                                        class="btn btn-soft-secondary btn-sm dropdown"
                                                        type="button" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="ri-more-fill align-middle"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item view-item-btn"
                                                               href="<?php echo e(route('documentacions.show', [$documentacion->id])); ?>"><i
                                                                    class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                Vista</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>
                        </table><!-- end table -->
                        <div class="pagination-container">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    
                                    <?php if($documentacions->onFirstPage()): ?>
                                        <li class="page-item disabled">
                                            <span class="page-link">Anterior</span>
                                        </li>
                                    <?php else: ?>
                                        <li class="page-item">
                                            <a class="page-link" href="<?php echo e($documentacions->previousPageUrl()); ?>">Anterior</a>
                                        </li>
                                    <?php endif; ?>

                                    
                                    <?php $__currentLoopData = range(1, $documentacions->lastPage()); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($i >= $documentacions->currentPage() - 2 && $i <= $documentacions->currentPage() + 2): ?>
                                            <?php if($i == $documentacions->currentPage()): ?>
                                                <li class="page-item active"><span class="page-link"><?php echo e($i); ?></span></li>
                                            <?php else: ?>
                                                <li class="page-item"><a class="page-link" href="<?php echo e($documentacions->url($i)); ?>"><?php echo e($i); ?></a></li>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    
                                    <?php if($documentacions->hasMorePages()): ?>
                                        <li class="page-item">
                                            <a class="page-link" href="<?php echo e($documentacions->nextPageUrl()); ?>">Siguiente</a>
                                        </li>
                                    <?php else: ?>
                                        <li class="page-item disabled">
                                            <span class="page-link">Siguiente</span>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </nav>
                        </div>
                        <div class="noresult" style="display: none">
                            <div class="text-center">
                                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json"
                                           trigger="loop" colors="primary:#121331,secondary:#08a88a"
                                           style="width:75px;height:75px">
                                </lord-icon>
                                <h5 class="mt-2">Sorry! No Result Found</h5>
                                <p class="text-muted mb-0">We've searched more than 150+ contacts We
                                    did not find any
                                    contacts for you search.</p>
                            </div>
                        </div>
                    </div>



                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xxl-4 col-lg-6">
            <div class="card card-height-100">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Projects Status</h4>
                    <div class="flex-shrink-0">
                        <div class="dropdown card-header-dropdown">
                            <a class="dropdown-btn text-muted" href="#" data-bs-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                All Time <i class="mdi mdi-chevron-down ms-1"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">All Time</a>
                                <a class="dropdown-item" href="#">Last 7 Days</a>
                                <a class="dropdown-item" href="#">Last 30 Days</a>
                                <a class="dropdown-item" href="#">Last 90 Days</a>
                            </div>
                        </div>
                    </div>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="prjects-status"
                         data-colors='["--vz-success", "--vz-primary", "--vz-warning", "--vz-danger"]'
                         class="apex-charts" dir="ltr"></div>
                    <div class="mt-3">
                        <div class="d-flex justify-content-center align-items-center mb-4">
                            <h2 class="me-3 ff-secondary mb-0">258</h2>
                            <div>
                                <p class="text-muted mb-0">Total Projects</p>
                                <p class="text-success fw-medium mb-0">
                                    <span class="badge badge-soft-success p-1 rounded-circle"><i
                                            class="ri-arrow-right-up-line"></i></span> +3 New
                                </p>
                            </div>
                        </div>

                        <div
                            class="d-flex justify-content-between border-bottom border-bottom-dashed py-2">
                            <p class="fw-medium mb-0"><i
                                    class="ri-checkbox-blank-circle-fill text-success align-middle me-2"></i>
                                Completed</p>
                            <div>
                                <span class="text-muted pe-5">125 Projects</span>
                                <span class="text-success fw-medium fs-12">15870hrs</span>
                            </div>
                        </div><!-- end -->
                        <div
                            class="d-flex justify-content-between border-bottom border-bottom-dashed py-2">
                            <p class="fw-medium mb-0"><i
                                    class="ri-checkbox-blank-circle-fill text-primary align-middle me-2"></i>
                                In Progress</p>
                            <div>
                                <span class="text-muted pe-5">42 Projects</span>
                                <span class="text-success fw-medium fs-12">243hrs</span>
                            </div>
                        </div><!-- end -->
                        <div
                            class="d-flex justify-content-between border-bottom border-bottom-dashed py-2">
                            <p class="fw-medium mb-0"><i
                                    class="ri-checkbox-blank-circle-fill text-warning align-middle me-2"></i>
                                Yet to Start</p>
                            <div>
                                <span class="text-muted pe-5">58 Projects</span>
                                <span class="text-success fw-medium fs-12">~2050hrs</span>
                            </div>
                        </div><!-- end -->
                        <div class="d-flex justify-content-between py-2">
                            <p class="fw-medium mb-0"><i
                                    class="ri-checkbox-blank-circle-fill text-danger align-middle me-2"></i>
                                Cancelled</p>
                            <div>
                                <span class="text-muted pe-5">89 Projects</span>
                                <span class="text-success fw-medium fs-12">~900hrs</span>
                            </div>
                        </div><!-- end -->
                    </div>
                </div><!-- end cardbody -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <!-- apexcharts -->
    <script src="<?php echo e(URL::asset('build/libs/apexcharts/apexcharts.min.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('build/js/pages/dashboard-projects.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/js/app.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\glpi-insumos\resources\views/documentacion/dashboard.blade.php ENDPATH**/ ?>