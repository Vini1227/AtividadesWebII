

<?php $__env->startSection('content'); ?>
<div class="container py-4">
    <div class="card">
        <div class="card-header">
            <h2 class="mb-0">Detalhes do Autor</h2>
        </div>
        <div class="card-body">
            <p><strong>ID:</strong> <?php echo e($author->id); ?></p>
            <p><strong>Nome:</strong> <?php echo e($author->name); ?></p>
            <p><strong>Biografia:</strong> <?php echo e($author->bio ?? 'N/A'); ?></p>
        </div>
        <div class="card-footer">
            <a href="<?php echo e(route('authors.index')); ?>" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Voltar
            </a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /mnt/c/Users/Vini/Downloads/AtividadesWebII/atividade_05/laravel-next-activity/resources/views/authors/show.blade.php ENDPATH**/ ?>