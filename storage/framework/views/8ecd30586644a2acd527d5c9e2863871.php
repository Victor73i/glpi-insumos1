<?php $__env->startSection('title', 'The list of Tareas'); ?>


<?php $__env->startSection('content'); ?>
    
    <nav class="mb-4">
        <a href="<?php echo e(route('tareas.create')); ?>"
           class="link">ADD Tarea</a>
    </nav>
    <?php $__empty_1 = true; $__currentLoopData = $tareas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tarea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div>
            <a href="<?php echo e(route('tareas.show', ['tarea'=>$tarea->id])); ?>"
                class="<?php echo \Illuminate\Support\Arr::toCssClasses(['line-through' =>$tarea->completado]); ?>"><?php echo e($tarea->nombre); ?></a>

        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

        <div>There are no Tareas!</div>
    <?php endif; ?>

    <?php if($tareas->count()): ?>
        <nav class="mt-4">
            <?php echo e($tareas->links()); ?>

        </nav>
    <?php endif; ?>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\glpi-insumos\resources\views/tarea/index.blade.php ENDPATH**/ ?>