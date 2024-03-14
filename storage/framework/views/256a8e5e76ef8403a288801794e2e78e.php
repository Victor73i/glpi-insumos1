

<?php $__env->startSection('title', $estado_log->nombre); ?>

<?php $__env->startSection('content'); ?>
    <div class="mb-4">
        <a href="<?php echo e(route('estado_logs.index')); ?>"
           class="link">Regresar a Lista de Estado Log</a>
    </div>
<p class="parrafo"><?php echo e($estado_log->descripcion); ?></p>
<p class="parrafo"><?php echo e($estado_log->completado); ?></p>

<p class="parrafo">Created <?php echo e($estado_log->created_at->diffForHumans()); ?> * Updated <?php echo e($estado_log->updated_at->diffForHumans()); ?></p>
<p></p>


<div class="flex gap-3">


    <a href="<?php echo e(route('estado_logs.edit', ['estado_log' =>$estado_log->id])); ?>"
    class="btn">EDIT</a>

    <form action="<?php echo e(route('estado_logs.destroy',['estado_log' =>$estado_log->id])); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button type="submit" class="btn">DELETE</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\glpi-insumos\resources\views/estado_log/show.blade.php ENDPATH**/ ?>