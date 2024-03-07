<?php $__env->startSection('title', $tarea->nombre); ?>

<?php $__env->startSection('content'); ?>
    <div class="mb-4">
        <a href="<?php echo e(route('tareas.index')); ?>"
           class="link">Regresar a Lista de Tareas</a>
    </div>
        <p class="parrafo"><?php echo e($tareas->tarea_id); ?></p>
    <p class="parrafo"><?php echo e($tareas->glpi_user_name); ?></p>

        <p class="parrafo"><?php echo e($tareas->tarea_nombre); ?></p>
        <p class="parrafo"><?php echo e($tareas->tarea_descripcion); ?></p>
        <p class="parrafo"><?php echo e($tareas->tarea_fecha_asignacion); ?></p>
        <p class="parrafo"><?php echo e($tareas->tarea_fecha_aproximada); ?></p>
        <p class="parrafo"><?php echo e($tareas->tarea_fecha_terminado); ?></p>
        <p class="parrafo"><?php echo e($tareas->tarea_observacion); ?></p>
        <p class="parrafo"><?php echo e($tareas->glpi_ticket_id); ?> * <?php echo e($tareas->glpi_ticket_name); ?></p>

        <p class="parrafo">Created <?php echo e($tarea->created_at->diffForHumans()); ?> * Updated <?php echo e($tarea->updated_at->diffForHumans()); ?></p>
        <p class="mb-4">
            <?php if($tarea->completado): ?>
                <span class="completado">Completado</span>
            <?php else: ?>
                <span class="nocompletado">No Completado</span>
            <?php endif; ?>
        </p>

        <div class="flex gap-3">
            <form method="POST" action="<?php echo e(route('tareas.toggle-complete',['tarea'=>$tarea])); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <button type="submit" class="btn">
                    Mark as <?php echo e($tarea->completado ? 'not completado' : 'completado'); ?>

                </button>
            </form>

            <a href="<?php echo e(route('tareas.edit', ['tarea' =>$tarea->id])); ?>"
               class="btn">EDIT</a>


            


            <form action="<?php echo e(route('tareas.destroy',['tarea' =>$tarea->id])); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn">DELETE</button>
            </form>
        </div>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\glpi-insumos\resources\views/tarea/show.blade.php ENDPATH**/ ?>