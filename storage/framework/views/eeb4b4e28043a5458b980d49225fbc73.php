<?php $__env->startSection('title','Agregar Tarea'); ?>

<?php $__env->startSection('content'); ?>

    <form method="POST" action="<?php echo e(route('tareas.store')); ?>">
        <?php echo csrf_field(); ?>
        <div class="mb-4">
            <label for="id_glpi_users" >GLPI USUARIO</label>
            <select style="background-color: #e3f2fd;" class="form-control" required name="id_glpi_users" id="id_glpi_users" class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('name')]); ?>" value="<?php echo e(old('id_glpi_users')); ?>">
                <option value="">Seleccione un GLPI USUARIO</option>
                <?php $__currentLoopData = $glpi_users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $glpi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($glpi->id); ?>"><?php echo e($glpi->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="mb-4">
            <label for="nombre">
                Nombre
            </label>
            <input text="text" name="nombre" id="nombre"
                   class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('nombre')]); ?>"
                   value="<?php echo e(old('nombre')); ?>"/>
            <?php $__errorArgs = ['nombre'];
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
            <label for="descripcion">Descripcion</label>
            <input text="text" name="descripcion" id="descripcion"
                   class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('descripcion')]); ?>"
                   value="<?php echo e(old('descripcion')); ?>"/>
            <?php $__errorArgs = ['descripcion'];
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
            <label for="fecha_asignacion">Fecha Asignacion</label>
            <input type="date" name="fecha_asignacion" id="fecha_asignacion"
                   class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('fecha_aproximada')]); ?>"
                   value="<?php echo e(old('fecha_aproximada')); ?>"/>
            <?php $__errorArgs = ['fecha_aproximada'];
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
            <label for="fecha_aproximada">Fecha Aproximada</label>
            <input type="date" name="fecha_aproximada" id="fecha_aproximada"
                   class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('fecha_aproximada')]); ?>"
                   value="<?php echo e(old('fecha_aproximada')); ?>"/>
            <?php $__errorArgs = ['fecha_aproximada'];
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
            <label for="fecha_terminado">Fecha Terminada</label>
            <input type="date" name="fecha_terminado" id="fecha_terminado"
                   class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('fecha_terminado')]); ?>"
                   value="<?php echo e(old('fecha_terminado')); ?>"/>
            <?php $__errorArgs = ['fecha_terminado'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="error"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div><div class="mb-4">
            <label for="observacion">Observacion</label>
            <input text="text" name="observacion" id="observacion"
                   
                   value="<?php echo e(old('observacion')); ?>"/>

        </div>

        <div class="mb-4">
            <label for="id_glpi_tickets" >GLPI Tickets</label>
            <select style="background-color: #e3f2fd;" class="form-control"  name="id_glpi_tickets" id="id_glpi_tickets"  value="<?php echo e(old('id_glpi_tickets')); ?>">
                <option value="">Seleccione un GLPI Tickets</option>
                <?php $__currentLoopData = $glpi_tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $glpt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <option value="<?php echo e($glpt->id); ?>"><?php echo e($glpt->id); ?> * <?php echo e($glpt->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </select>
        </div>
        <div class="flex items-center gap-2">
            <button type="submit" class="btn">Add Tarea</button>
            <a href="<?php echo e(route('tareas.index')); ?>" class="link">Cancel</a>
        </div>
    </form>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\glpi-insumos\resources\views/tarea/create.blade.php ENDPATH**/ ?>