

<?php $__env->startSection('title', $tipo_documentacion->nombre); ?>

<?php $__env->startSection('content'); ?>
    <div class="mb-4">
        <a href="<?php echo e(route('tipo_documentacions.index')); ?>"
           class="link">Regresar a Lista de Tareas</a>
    </div>
<p class="parrafo"><?php echo e($tipo_documentacion->descripcion); ?></p>
<p class="parrafo"><?php echo e($tipo_documentacion->completado); ?></p>
<p class="parrafo">Created <?php echo e($tipo_documentacion->created_at->diffForHumans()); ?> * Updated <?php echo e($tipo_documentacion->updated_at->diffForHumans()); ?></p>
<p></p>
<p class="mb-4">
    <?php if($tipo_documentacion->completado): ?>
    <span class="completado">Completado</span>
    <?php else: ?>
    <span class="nocompletado">No Completado</span>
    <?php endif; ?>
</p>

<div class="flex gap-3">
    <form method="POST" action="<?php echo e(route('tipo_documentacions.toggle-complete',['tipo_documentacion'=>$tipo_documentacion])); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <button type="submit" class="btn">
            Mark as <?php echo e($tipo_documentacion->completado ? 'not completado' : 'completado'); ?>

        </button>
    </form>

    <a href="<?php echo e(route('tipo_documentacions.edit', ['tipo_documentacion' =>$tipo_documentacion->id])); ?>"
    class="btn">EDIT</a>

    <form action="<?php echo e(route('tipo_documentacions.destroy',['tipo_documentacion' =>$tipo_documentacion->id])); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button type="submit" class="btn">DELETE</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\glpi-insumos\resources\views/tipo_documentacion/show.blade.php ENDPATH**/ ?>