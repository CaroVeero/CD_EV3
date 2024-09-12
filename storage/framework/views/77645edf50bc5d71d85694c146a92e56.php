<?php $__env->startSection('content'); ?>
<h1>Editar Usuario</h1>
<form action="<?php echo e(route('users.update', $user->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" name="name" class="form-control" value="<?php echo e($user->name); ?>" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" value="<?php echo e($user->email); ?>" required>
    </div>
    <div class="form-group">
        <label for="password">Contraseña (opcional)</label>
        <input type="password" name="password" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Actualizar</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/patriciomelo/Documents/GitHub/T2-70-DSW-I/CrudProyectos/crud_proj/resources/views/users/edit.blade.php ENDPATH**/ ?>