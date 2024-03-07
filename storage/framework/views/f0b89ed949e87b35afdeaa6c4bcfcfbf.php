<?php $__env->startSection('title','Add Task'); ?>

<?php $__env->startSection('content'); ?>

<form method="POST" action="<?php echo e(route('tasks.store')); ?>">
    <?php echo csrf_field(); ?>
    <div class="mb-4">
        <label for="title">
            Title
        </label>
        <input text="text" name="title" id="title" rows="5"
               class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('title')]); ?>"
               value="<?php echo e(old('long_description')); ?>"/>
        <?php $__errorArgs = ['title'];
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
        <label for="description">Description</label>
        <input text="text" name="description" id="description" rows="5"
               class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('description')]); ?>"
               value="<?php echo e(old('long_description')); ?>"/>
        <?php $__errorArgs = ['description'];
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
        <label for="long_description">Long Description</label>
        <input text="text" name="long_description" id="long_description" rows="5"
               class="<?php echo \Illuminate\Support\Arr::toCssClasses(['border-red-500' => $errors->has('long_description')]); ?>"
               value="<?php echo e(old('long_description')); ?>"/>
        <?php $__errorArgs = ['long_description'];
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
        <button type="submit" class="btn">Add Task</button>
        <a href="<?php echo e(route('tasks.index')); ?>" class="link">Cancel</a>
    </div>
</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\glpi-insumos\resources\views/task/create.blade.php ENDPATH**/ ?>