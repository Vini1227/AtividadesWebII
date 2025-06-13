

<?php $__env->startSection('content'); ?>
<div class="container py-4">
    <h1 class="mb-4">Lista de Editoras</h1>

    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <a href="<?php echo e(route('publishers.create')); ?>" class="btn btn-primary mb-3">
        <i class="bi bi-plus-circle"></i> Nova Editora
    </a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $publishers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publisher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($publisher->id); ?></td>
                    <td><?php echo e($publisher->name); ?></td>
                    <td><?php echo e(Str::limit($publisher->address, 30)); ?></td>
                    <td class="d-flex gap-2">
                        <a href="<?php echo e(route('publishers.show', $publisher)); ?>" class="btn btn-sm btn-info">
                            <i class="bi bi-eye"></i>
                        </a>
                        <a href="<?php echo e(route('publishers.edit', $publisher)); ?>" class="btn btn-sm btn-warning">
                            <i class="bi bi-pencil"></i>
                        </a>
                        <form action="<?php echo e(route('publishers.destroy', $publisher)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Excluir esta editora?')">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="4" class="text-center">Nenhuma editora encontrada.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /mnt/c/Users/Vini/Downloads/AtividadesWebII/atividade_05/laravel-next-activity/resources/views/publishers/index.blade.php ENDPATH**/ ?>