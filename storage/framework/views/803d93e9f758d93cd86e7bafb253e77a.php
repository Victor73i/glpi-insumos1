

<?php $__env->startSection('title', 'La Lista de Reporte Insumo Fungible'); ?>


<?php $__env->startSection('content'); ?>
    
    <nav class="mb-4">
        <a href="<?php echo e(route('reporte_insumo_fungibles.create')); ?>"
           class="link">ADD Reporte Insumo fungible</a>
    </nav>
    <?php $__empty_1 = true; $__currentLoopData = $reporte_insumo_fungibles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reporte_insumo_fungible): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div>
            <a href="<?php echo e(route('reporte_insumo_fungibles.show', ['reporte_insumo_fungible'=>$reporte_insumo_fungible->id])); ?>"
                class="<?php echo \Illuminate\Support\Arr::toCssClasses(['line-through' =>$reporte_insumo_fungible->completado]); ?>"><?php echo e($reporte_insumo_fungible->nota); ?></a>

        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

        <div>There are no Reporte Insumo Inventariados!</div>
    <?php endif; ?>

    <?php if($reporte_insumo_fungibles->count()): ?>
        <nav class="mt-4">
            <?php echo e($reporte_insumo_fungibles->links()); ?>

        </nav>
    <?php endif; ?>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\glpi-insumos\resources\views/reporte_insumo_fungible/index.blade.php ENDPATH**/ ?>