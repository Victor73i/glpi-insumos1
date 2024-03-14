



<?php $__env->startSection('title','Add estado log'); ?>

<?php $__env->startSection('content'); ?>

    <form method="POST" action="<?php echo e(route('estado_logs.store')); ?>">
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

        <div class="flex items-center gap-2">
            <button type="submit" class="btn">Add Estado Log</button>
            <a href="<?php echo e(route('estado_logs.index')); ?>" class="link">Cancel</a>
        </div>
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\glpi-insumos\resources\views/estado_log/create.blade.php ENDPATH**/ ?>