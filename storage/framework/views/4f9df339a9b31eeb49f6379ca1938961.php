<?php $__env->startSection('title', 'La Lista de Reporte Insumo Inventariado'); ?>


<?php $__env->startSection('content'); ?>
    
    <nav class="mb-4">
        <a href="<?php echo e(route('reporte_insumo_inventariados.create')); ?>"
           class="link">ADD Reporte Insumo Inventariado</a>
    </nav>
    <?php $__empty_1 = true; $__currentLoopData = $reporte_insumo_inventariados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reporte_insumo_inventariado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div>
            <a href="<?php echo e(route('reporte_insumo_inventariados.show', ['reporte_insumo_inventariado'=>$reporte_insumo_inventariado->id])); ?>"
                class="<?php echo \Illuminate\Support\Arr::toCssClasses(['line-through' =>$reporte_insumo_inventariado->completado]); ?>"><?php echo e($reporte_insumo_inventariado->nota); ?></a>

        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

        <div>There are no Reporte Insumo Inventariados!</div>
    <?php endif; ?>

    <?php if($reporte_insumo_inventariados->count()): ?>
        <nav class="mt-4">
            <?php echo e($reporte_insumo_inventariados->links()); ?>

        </nav>
    <?php endif; ?>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\glpi-insumos\resources\views/reporte_insumo_inventariado/index.blade.php ENDPATH**/ ?>