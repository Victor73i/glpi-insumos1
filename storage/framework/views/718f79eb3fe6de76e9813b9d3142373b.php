<?php $__env->startSection('title', 'La Lista de Equipos It'); ?>


<?php $__env->startSection('content'); ?>
    
    <nav class="mb-4">
    </nav>
    <?php $__empty_1 = true; $__currentLoopData = $equiposIt; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $equipoIt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div>
            <a href="<?php echo e(route('equipo_its.show', [$equipoIt->id])); ?>"><?php echo e($equipoIt->nombre); ?></a>

        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

        <div>There are no equipo it!</div>
    <?php endif; ?>

    <?php if($equiposIt->count()): ?>
        <nav class="mt-4">
            <?php echo e($equiposIt->links()); ?>

        </nav>
    <?php endif; ?>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\glpi-insumos\resources\views/equipo_it/index.blade.php ENDPATH**/ ?>