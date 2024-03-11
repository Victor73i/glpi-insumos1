<?php $__env->startSection('title','Agregar Reporte Insumo Consumible'); ?>

<?php $__env->startSection('content'); ?>

    <form method="POST" action="<?php echo e(route('reporte_insumo_consumibles.store')); ?>">
        <?php echo csrf_field(); ?>
        <div class="mb-4">
            <label for="nota">
                Nota
            </label>
            <input text="text" name="nota" id="nota"
                   class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('nota')]); ?>"
                   value="<?php echo e(old('nota')); ?>"/>
            <?php $__errorArgs = ['nota'];
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
                   class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('fecha_asignacion')]); ?>"
                   value="<?php echo e(old('fecha_asignacion')); ?>"/>
            <?php $__errorArgs = ['fecha_asignacion'];
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
            <label for="no_pedido">No Pedido</label>
            <input text="text" name="no_pedido" id="no_pedido"
                   class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('no_pedido')]); ?>"
                   value="<?php echo e(old('no_pedido')); ?>"/>
            <?php $__errorArgs = ['no_pedido'];
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
            <label for="id_glpi_passivedcequipments" >GLPI INSUMO</label>
            <select style="background-color: #e3f2fd;" class="form-control" required name="id_glpi_passivedcequipments" id="id_glpi_passivedcequipments" class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('name')]); ?>" value="<?php echo e(old('id_glpi_passivedcequipments')); ?>">
                <option value="">Seleccione un GLPI Insumo</option>
                <?php $__currentLoopData = $glpi_passivedcequipments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $glpip): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($glpip->id); ?>"><?php echo e($glpip->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div><div class="mb-4">
            <label for="id_glpi_users" >GLPI USUARIO</label>
            <select style="background-color: #e3f2fd;" class="form-control" required name="id_glpi_users" id="id_glpi_users" class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('name')]); ?>" value="<?php echo e(old('id_glpi_users')); ?>">
                <option value="">Seleccione un GLPI USUARIO</option>
                <?php $__currentLoopData = $glpi_users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $glpiu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($glpiu->id); ?>"><?php echo e($glpiu->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div><div class="mb-4">
            <label for="id_glpi_locations" >GLPI Locations</label>
            <select style="background-color: #e3f2fd;" class="form-control" required name="id_glpi_locations" id="id_glpi_locations" class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('name')]); ?>" value="<?php echo e(old('id_glpi_locations')); ?>">
                <option value="">Seleccione un GLPI Location</option>
                <?php $__currentLoopData = $glpi_locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $glpil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($glpil->id); ?>"><?php echo e($glpil->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="flex items-center gap-2">
            <button type="submit" class="btn">Add Tarea</button>
            <a href="<?php echo e(route('reporte_insumo_consumibles.index')); ?>" class="link">Cancel</a>
        </div>
    </form>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\glpi-insumos\resources\views/reporte_insumo_consumible/create.blade.php ENDPATH**/ ?>