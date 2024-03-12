<?php $__env->startSection('title', $log->observaciones); ?>

<?php $__env->startSection('content'); ?>
    <div class="mb-4">
        <a href="<?php echo e(route('logs.index')); ?>"
           class="link">Regresar a Lista de Logs</a>
    </div>
    <label>Observación:</label>
    <p class="parrafo"><?php echo e($log->observaciones); ?></p>

    <label>Estado Log:</label>
    <p class="parrafo"><?php echo e($log->estado_log); ?></p>

    <label>Fecha Inicio</label>
    <p class="parrafo"><?php echo e($log->fecha_inicio); ?></p>

    <?php if($log->fecha_finalizacion): ?>
        <label>Fecha finalización:</label>
        <p class="parrafo"><?php echo e($log->fecha_finalizacion); ?></p>
    <?php endif; ?>


    <label>Ubicación:</label>
    <p class="parrafo"><?php echo e($log->glpi_locations->id); ?>: <?php echo e($log->glpi_locations->name); ?></p>

    <label>Ticket:</label>
    <p class="parrafo"><?php echo e($log->glpi_tickets->id); ?>: <?php echo e($log->glpi_tickets->name); ?></p>


    <label>Equipo IT:</label>
    <p class="parrafo"><ul>
    <?php $__currentLoopData = $log->equiposIt; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $equipoIt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($equipoIt->id); ?>: <?php echo e($equipoIt->nombre); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    </p>

    <label>User:</label>
    <p class="parrafo"><?php echo e($log->glpi_users->id); ?>: <?php echo e($log->glpi_users->name); ?></p>

    <p class="parrafo">Created <?php echo e($log->created_at->diffForHumans()); ?> * Updated <?php echo e($log->updated_at->diffForHumans()); ?></p>
    <p></p>
    <p class="mb-4">
        <?php if($log->completado): ?>
            <span class="completado">Completado</span>
        <?php else: ?>
            <span class="nocompletado">No Completado</span>
        <?php endif; ?>
    </p>

    <div class="flex gap-3">
        <form method="POST" action="<?php echo e(route('logs.toggle-complete',[$log->id])); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <button type="submit" class="btn">
                Mark as <?php echo e($log->completado ? 'not completado' : 'completado'); ?>

            </button>
        </form>

        <a href="<?php echo e(route('logs.edit', [$log->id])); ?>"
           class="btn">EDIT</a>

        <form action="<?php echo e(route('logs.destroy',[$log->id])); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="submit" class="btn">DELETE</button>
        </form>
    </div>
    <?php if(isset($debug)): ?>
        echo("<script>console.log('PHP: " . <?php echo e($debug); ?> . "');</script>");
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\glpi-insumos\resources\views/log/show.blade.php ENDPATH**/ ?>