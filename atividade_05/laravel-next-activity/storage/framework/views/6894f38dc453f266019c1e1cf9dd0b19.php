

<?php $__env->startSection('content'); ?>
<div class="container py-4">
    <h1 class="mb-4">Lista de Autores</h1>

    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <a href="<?php echo e(route('authors.create')); ?>" class="btn btn-primary mb-3">
        <i class="bi bi-plus-circle"></i> Novo Autor
    </a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Biografia</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($author->id); ?></td>
                    <td><?php echo e($author->name); ?></td>
                    <td><?php echo e(Str::limit($author->bio, 50)); ?></td>
                    <td class="d-flex gap-2">
                        <a href="<?php echo e(route('authors.show', $author)); ?>" class="btn btn-sm btn-info">
                            <i class="bi bi-eye"></i>
                        </a>
                        <a href="<?php echo e(route('authors.edit', $author)); ?>" class="btn btn-sm btn-warning">
                            <i class="bi bi-pencil"></i>
                        </a>
                        <form action="<?php echo e(route('authors.destroy', $author)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Excluir este autor?')">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="4" class="text-center">Nenhum autor encontrado.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /mnt/c/Users/Vini/Downloads/AtividadesWebII/atividade_05/laravel-next-activity/resources/views/authors/index.blade.php ENDPATH**/ ?>