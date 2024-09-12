<?php $__env->startSection('content'); ?>
<h1>Crear Usuario</h1>
<form action="<?php echo e(route('users.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="password">Contraseña</label>
        <input type="password" name="password" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Crear</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Documents\GitHub\CD_EV3\resources\views/users/create.blade.php ENDPATH**/ ?>