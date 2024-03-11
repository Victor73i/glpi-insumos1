<?php $__env->startSection('title', $equipoIt->nombre); ?>

<?php $__env->startSection('content'); ?>
    <div class="mb-4">
        <a href="<?php echo e(route('equipo_its.index')); ?>"
           class="link">Regresar a Lista de EquipoIt</a>
    </div>

        <p class="parrafo"><?php echo e($equipoIt->nombre); ?></p>
        <p class="parrafo"><?php echo e($equipoIt->descripcion); ?></p>
    <?php if($equipoIt->glpiComputers): ?>
        <p class="parrafo"><?php echo e($equipoIt->glpiComputers->name); ?></p>
    <?php elseif($equipoIt->glpiPdus): ?>
        <p class="parrafo"><?php echo e($equipoIt->glpiPdus->name); ?></p>
    <?php else: ?>
        <p class="parrafo"><?php echo e($equipoIt->glpiPrinters->name); ?></p>
    <?php endif; ?>
        <p class="parrafo"><?php echo e($equipoIt->type); ?></p>

        <p class="parrafo">Created <?php echo e($equipoIt->created_at->diffForHumans()); ?> *
            Updated <?php echo e($equipoIt->updated_at->diffForHumans()); ?></p>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\glpi-insumos\resources\views/equipo_it/show.blade.php ENDPATH**/ ?>