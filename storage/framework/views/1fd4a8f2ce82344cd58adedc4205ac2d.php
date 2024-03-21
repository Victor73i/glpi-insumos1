

<?php $__env->startSection('title', $documentacion->nombre); ?>

<?php $__env->startSection('content'); ?>
    <div class="mb-4">
        <a href="<?php echo e(route('documentacions.index')); ?>"
           class="link">Regresar a Lista de Documentacion</a>
    </div>
        <p class="parrafo"><?php echo e($documentacions->documentacion_id); ?></p>

        <p class="parrafo"><?php echo e($documentacions->documentacion_nombre); ?></p>
        <p class="parrafo"><?php echo e($documentacions->documentacion_descripcion); ?></p>
        <p class="parrafo"><?php echo e($documentacions->documentacion_fecha_creacion); ?></p>
        <p class="parrafo"><?php echo e($documentacions->documentacion_archivo); ?></p>
        <p class="parrafo"><?php echo e($documentacions->estado_documentacion_nombre); ?></p>
        <p class="parrafo"><?php echo e($documentacions->tipo_documentacion_nombre); ?></p>
        <p class="parrafo"><?php echo e($documentacions->categoria_documentacion_nombre); ?></p>
        <p class="parrafo"><?php echo e($documentacions->glpi_user_name); ?></p>

        <p class="parrafo">Created <?php echo e($documentacion->created_at->diffForHumans()); ?> * Updated <?php echo e($documentacion->updated_at->diffForHumans()); ?></p>
        <p class="mb-4">
            <?php if($documentacion->completado): ?>
                <span class="completado">Completado</span>
            <?php else: ?>
                <span class="nocompletado">No Completado</span>
            <?php endif; ?>
        </p>

        <div class="flex gap-3">
            <form method="POST" action="<?php echo e(route('documentacions.toggle-complete',['documentacion'=>$documentacion])); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <button type="submit" class="btn">
                    Mark as <?php echo e($documentacion->completado ? 'not completado' : 'completado'); ?>

                </button>
            </form>

            <a href="<?php echo e(route('documentacions.edit', ['documentacion'=>$documentacion->id])); ?>"
               class="btn">EDIT</a>




            <form action="<?php echo e(route('documentacions.destroy',['documentacion' =>$documentacion->id])); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn">DELETE</button>
            </form>
        </div>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\glpi-insumos\resources\views/documentacion/show.blade.php ENDPATH**/ ?>