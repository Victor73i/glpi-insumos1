

<?php $__env->startSection('title', 'La Lista de Documentacion'); ?>


<?php $__env->startSection('content'); ?>
    
    <nav class="mb-4">
        <a href="<?php echo e(route('documentacions.create')); ?>"
           class="link">ADD Documentacion</a>
    </nav>
    <?php $__empty_1 = true; $__currentLoopData = $documentacions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $documentacion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div>
            <a href="<?php echo e(route('documentacions.show', ['documentacion'=>$documentacion->id])); ?>"
                class="<?php echo \Illuminate\Support\Arr::toCssClasses(['line-through' =>$documentacion->completado]); ?>"><?php echo e($documentacion->nombre); ?></a>

        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

        <div>There are no Documentacion!</div>
    <?php endif; ?>

    <?php if($documentacions->count()): ?>
        <nav class="mt-4">
            <?php echo e($documentacions->links()); ?>

        </nav>
    <?php endif; ?>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\glpi-insumos\resources\views/documentacion/index.blade.php ENDPATH**/ ?>