<?php $__env->startSection('title','Agregar Documentacion'); ?>

<?php $__env->startSection('content'); ?>

    <form method="POST" action="<?php echo e(route('documentacions.store')); ?>">
        <?php echo csrf_field(); ?>
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
            <label for="fecha_creacion">Fecha Creacion</label>
            <input type="date" name="fecha_creacion" id="fecha_creacion"
                   class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('fecha_creacion')]); ?>"
                   value="<?php echo e(old('fecha_creacion')); ?>"/>
            <?php $__errorArgs = ['fecha_creacion'];
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
            <label for="archivo">Archivo</label>
            <input text="text" name="archivo" id="archivo"
                   class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('archivo')]); ?>"
                   value="<?php echo e(old('archivo')); ?>"/>
            <?php $__errorArgs = ['archivo'];
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
            <label for="id_estado_documentacion" >Estado Documentacion</label>
            <select style="background-color: #e3f2fd;" class="form-control" required name="id_estado_documentacion" id="id_estado_documentacion" class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('id_estado_documentacion')]); ?>" value="<?php echo e(old('id_estado_documentacion')); ?>">
                <option value="">Seleccione un Estado</option>
                <?php $__currentLoopData = $estado_documentacions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($estado->id); ?>"><?php echo e($estado->nombre); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div><div class="mb-4">
            <label for="id_tipo_documentacion" >Tipo Documentacion</label>
            <select style="background-color: #e3f2fd;" class="form-control" required name="id_tipo_documentacion" id="id_tipo_documentacion" class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('id_tipo_documentacion')]); ?>" value="<?php echo e(old('id_tipo_documentacion')); ?>">
                <option value="">Seleccione un Tipo</option>
                <?php $__currentLoopData = $tipo_documentacions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($tipo->id); ?>"><?php echo e($tipo->nombre); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div><div class="mb-4">
            <label for="id_categoria_documentacion" >Categoria Documentacion</label>
            <select style="background-color: #e3f2fd;" class="form-control" required name="id_categoria_documentacion" id="id_categoria_documentacion" class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('id_categoria_documentacion')]); ?>" value="<?php echo e(old('id_categoria_documentacion')); ?>">
                <option value="">Seleccione una Categoria</option>
                <?php $__currentLoopData = $categoria_documentacions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($categoria->id); ?>"><?php echo e($categoria->nombre); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="mb-4">
            <label for="id_glpi_users" >GLPI USUARIO</label>
            <select style="background-color: #e3f2fd;" class="form-control" required name="id_glpi_users" id="id_glpi_users" class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('id_glpi_users')]); ?>" value="<?php echo e(old('id_glpi_users')); ?>">
                <option value="">Seleccione un GLPI USUARIO</option>
                <?php $__currentLoopData = $glpi_users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $glpiu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($glpiu->id); ?>"><?php echo e($glpiu->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>

        <div class="flex items-center gap-2">
            <button type="submit" class="btn">Add Tarea</button>
            <a href="<?php echo e(route('reporte_insumo_consumibles.index')); ?>" class="link">Cancel</a>
        </div>
    </form>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\glpi-insumos\resources\views/documentacion/create.blade.php ENDPATH**/ ?>