<?php $__env->startSection('content'); ?>
<h1>Proyectos</h1>
<a href="<?php echo e(route('projects.create')); ?>" class="btn btn-primary">Crear Proyecto</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Descripción</th>
            <th>Fecha de Creación</th>
            <th>Activo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($project->id); ?></td>
            <td><?php echo e($project->titulo); ?></td>
            <td><?php echo e($project->descripcion); ?></td>
            <td><?php echo e($project->fecha_creacion); ?></td>
            <td><?php echo e($project->activo ? 'Sí' : 'No'); ?></td>
            <td>
                <a href="<?php echo e(route('projects.edit', $project->id)); ?>" class="btn btn-warning">Editar</a>
                <form action="<?php echo e(route('projects.destroy', $project->id)); ?>" method="POST" style="display:inline;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.dash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Documents\GitHub\CD_EV3\resources\views/projects/index.blade.php ENDPATH**/ ?>