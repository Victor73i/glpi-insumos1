<?php $__env->startSection('title', $equipoIt->nombre); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?> EQUIPO IT <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?> DETALLE EQUIPO IT <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row justify-content-center">
        <div class="col-xxl-9">
            <div class="card" id="demo">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-header border-bottom-dashed p-4">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <img src="<?php echo e(URL::asset('build/images/empornac.png')); ?>" class="card-logo card-logo-dark" alt="logo dark" height="100">

                                </div>
                                <div class="flex-shrink-0 mt-sm-0 mt-3">
                                    <h6><span class="text-muted fw-normal">ID:</span>
                                        <span id="legal-register-no"><?php echo e($equipoIt->id); ?></span>

                                </div>
                            </div>
                        </div>
                        <!--end card-header-->
                    </div>
                    <!--end col-->
                    <div class="col-lg-12">
                        <div class="card-body p-4">
                            <div class="row g-3">
                                <div class="col-lg-3 col-6">
                                    <p class="text-muted mb-2 text-uppercase fw-semibold">ID</p>
                                    <h5 class="fs-14 mb-0"><span id="invoice-no"><?php echo e($equipoIt->id); ?></span></h5>
                                </div><div class="col-lg-3 col-6">
                                    <p class="text-muted mb-2 text-uppercase fw-semibold">Nombre</p>
                                    <h5 class="fs-14 mb-0"><span id="invoice-no"><?php echo e($equipoIt->nombre); ?></span></h5>

                                </div>
                                <!--end col-->
                                <div class="col-lg-3 col-6">
                                    <p class="text-muted mb-2 text-uppercase fw-semibold">Tipo</p>
                                    <span class="badge badge-soft-success fs-11" id="payment-status"><?php echo e($equipoIt->type); ?></span>
                                </div>
                                <!--end col-->

                                <!--end col-->

                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end col-->

                    <!--end card-body-->
                </div>
                <!--end col-->
                <div class="col-lg-12">
                    <div class="card-body p-4">
                        <div class="table-responsive">
                            <table class="table table-borderless text-center table-nowrap align-middle mb-0">
                                <thead>
                                <tr class="table-active">
                                    <th scope="col" style="width: 50px;">#</th>
                                    <th scope="col">Equipo</th>
                                    <th scope="col">Serial</th>
                                    <th scope="col">Cod. de Inventario</th>
                                    <th scope="col" class="text-end">Comentario</th>
                                </tr>
                                </thead>
                                <tbody id="products-list">
                                <tr>
                                    <th scope="row"><?php echo e($equipoIt->id); ?></th>
                                    <?php if($equipoIt->glpiComputers): ?>
                                        <td class="text-start">
                                            <span class="fw-medium"><?php echo e($equipoIt->glpiComputers->name); ?></span>
                                        </td>
                                        <td><?php echo e($equipoIt->glpiComputers->serial); ?></td>
                                        <td><?php echo e($equipoIt->glpiComputers->otherserial); ?></td>
                                        <td class="text-end"><?php echo e($equipoIt->glpiComputers->comment); ?></td>
                                    <?php elseif($equipoIt->glpiPdus): ?>
                                        <td class="text-start">
                                            <span class="fw-medium"><?php echo e($equipoIt->glpiPdus->name); ?></span>
                                        </td>
                                        <td><?php echo e($equipoIt->glpiPdus->serial); ?></td>
                                        <td><?php echo e($equipoIt->glpiPdus->otherserial); ?></td>
                                        <td class="text-end"><?php echo e($equipoIt->glpiPdus->comment); ?></td>
                                    <?php else: ?>
                                        <td class="text-start">
                                            <span class="fw-medium"><?php echo e($equipoIt->glpiPrinters->name); ?></span>
                                        </td>
                                        <td><?php echo e($equipoIt->glpiPrinters->serial); ?></td>
                                        <td><?php echo e($equipoIt->glpiPrinters->otherserial); ?></td>
                                        <td class="text-end"><?php echo e($equipoIt->glpiPrinters->comment); ?></td>
                                    <?php endif; ?>


                                </tr>

                                </tbody>
                            </table>
                            <!--end table-->
                        </div>

                        <div class="mt-3">
                            <h6 class="text-muted text-uppercase fw-semibold mb-3">EQUIPO IT Detalles:</h6>
                            <p class="text-muted mb-1">Creado en: <span class="fw-medium" id="payment-method"><?php echo e($equipoIt->created_at); ?></span></p>

                            <p class="text-muted">Actualizado en: <span class="fw-medium" id=""> </span><span id="card-total-amount"><?php echo e($equipoIt->updated_at); ?></span></p>
                        </div>
                        <div class="mt-4">
                            <div class="alert alert-info">
                                <p class="mb-0"><span class="fw-semibold">NOTAS:</span>
                                    <span id="note">Todos los EQUIPOS IT que apareceran solo podran ser visualizados y mostrados a detalle de los Equipos Respectivos que tiene registrados actualmente en el GLPI
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="hstack gap-2 justify-content-end d-print-none mt-4">
                            <a href="javascript:window.print()" class="btn btn-success"><i class="ri-printer-line align-bottom me-1"></i> IMPRIMIR</a>
                            <a href="<?php echo e(route('equipo_its.index')); ?>" class="btn btn-primary"><i class="ri-dashboard-2-line align-bottom me-1"></i> INDEX</a>

                        </div>
                    </div>
                    <!--end card-body-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    </div>
    <!--end row-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('build/js/pages/invoicedetails.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/js/app.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\glpi-insumos\resources\views/equipo_it/show.blade.php ENDPATH**/ ?>