<?php $__env->startSection('title','Add LOG'); ?>

<?php $__env->startSection('content'); ?>

    <form method="POST" action="<?php echo e(route('logs.store')); ?>">
        <?php echo csrf_field(); ?>
        <div class="mb-4">
            <label for="observaciones">
                Observaciones
            </label>
            <input text="text" name="observaciones" id="observaciones"
                class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('observaciones')]); ?>"
            value="<?php echo e(old('observaciones')); ?>"/>
            <?php $__errorArgs = ['observaciones'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="error"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-4">
            <label for="id_estado_log">Estado</label>
            <select name="id_estado_log" id="id_estado_log"
                    class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('id_estado_log')]); ?>"
                    value="<?php echo e(old('id_estado_log')); ?>" >
                <?php $__currentLoopData = $id_estado_logs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id_estado_log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($id_estado_log->id); ?>"><?php echo e($id_estado_log->id); ?>: <?php echo e($id_estado_log->nombre); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <?php $__errorArgs = ['id_estado_log'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="error"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-4">
            <label for="fecha_inicio">Fecha Inicio</label>
            <input type="date" name="fecha_inicio" id="fecha_inicio"
                class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('fecha_inicio')]); ?>"
            value="<?php echo e(old('fecha_inicio')); ?>"/>
            <?php $__errorArgs = ['fecha_inicio'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="error"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-4">
            <label for="fecha_finalizacion">Fecha Finalizacion</label>
            <input type="date" name="fecha_finalizacion" id="fecha_finalizacion"
                class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('fecha_finalizacion')]); ?>"
            value="<?php echo e(old('fecha_finalizacion')); ?>"/>
            <?php $__errorArgs = ['fecha_finalizacion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="error"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-4">
            <label for="id_glpi_locations">Ubicacion</label>
            <select name="id_glpi_locations" id="id_glpi_locations"
                    class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('id_glpi_locations')]); ?>"
                    value="<?php echo e(old('id_glpi_locations')); ?>" >
                <?php $__currentLoopData = $id_glpi_locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id_glpi_location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($id_glpi_location->id); ?>"><?php echo e($id_glpi_location->id); ?>: <?php echo e($id_glpi_location->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <?php $__errorArgs = ['id_glpi_locations'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="error"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-4">
            <label for="id_glpi_tickets">Ticket</label>
            <select name="id_glpi_tickets" id="id_glpi_tickets"
                    class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('id_glpi_tickets')]); ?>"
                    value="<?php echo e(old('id_glpi_tickets')); ?>" >
                <?php $__currentLoopData = $id_glpi_tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id_glpi_ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($id_glpi_ticket->id); ?>"><?php echo e($id_glpi_ticket->id); ?>: <?php echo e($id_glpi_ticket->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <?php $__errorArgs = ['id_glpi_tickets'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="error"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-4">
            <label for="id_equipo_computo[]">Equipo Computo</label>
            <select name="id_equipo_computo[]" id="id_equipo_computo"
                   class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('id_equipo_computo')]); ?>"
                   value="<?php echo e(old('id_equipo_computo[]')); ?>" multiple="multiple">
                <?php $__currentLoopData = $equipos_it; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $equipo_it): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($equipo_it->id); ?>"><?php echo e($equipo_it->id); ?>: <?php echo e($equipo_it->nombre); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </select>
            <?php $__errorArgs = ['id_equipo_computo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="error"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-4">
            <label for="id_glpi_users">Usuario</label>
            <select name="id_glpi_users" id="id_glpi_users"
                    class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('id_glpi_users')]); ?>"
                    value="<?php echo e(old('id_glpi_users')); ?>" >
                <?php $__currentLoopData = $id_glpi_users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id_glpi_user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($id_glpi_user->id); ?>"><?php echo e($id_glpi_user->id); ?>: <?php echo e($id_glpi_user->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>

            <?php $__errorArgs = ['id_glpi_users'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="error"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="flex items-center gap-2">
            <button type="submit" class="btn">Add LOG</button>
            <a href="<?php echo e(route('logs.index')); ?>" class="link">Cancel</a>
        </div>
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\glpi-insumos\resources\views/log/create.blade.php ENDPATH**/ ?>