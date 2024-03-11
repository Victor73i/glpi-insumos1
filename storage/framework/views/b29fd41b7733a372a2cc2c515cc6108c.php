<?php $__env->startSection('title', 'The list of LOGS'); ?>


<?php $__env->startSection('content'); ?>
   
        <nav class="mb-4">
            <a href="<?php echo e(route('logs.create')); ?>"
               class="link">ADD LOG</a>
        </nav>
   <?php $__empty_1 = true; $__currentLoopData = $logs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

       <div>
        <a href="<?php echo e(route('logs.show', [$log->id])); ?>"
            class="<?php echo \Illuminate\Support\Arr::toCssClasses(['line-through' =>$log->completado]); ?>"><?php echo e($log->observaciones); ?></a>

    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

    <div>There are no logs!</div>
    <?php endif; ?>

   <?php if($logs->count()): ?>
       <nav class="mt-4">
           <?php echo e($logs->links()); ?>

       </nav>
   <?php endif; ?>
<?php $__env->stopSection(); ?>
    


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\glpi-insumos\resources\views/log/index.blade.php ENDPATH**/ ?>