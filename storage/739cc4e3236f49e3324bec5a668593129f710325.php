<?php $__env->startSection('title', 'Danh sách sản phẩm'); ?>
<?php $__env->startSection('content'); ?>
    

<table class="table table-hover">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Category</th>
    </thead>
    <tbody>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($p->id); ?></td>
            <td><?php echo e($p->name); ?></td>
            <td>
                <a href="<?php echo e(BASE_URL . 'admin/danh-muc/' . $p->category->id); ?>"><?php echo e($p->category->name); ?></a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin-layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Library/WebServer/Documents/we16201-php2/mvc2/app/views/admin/product/index.blade.php ENDPATH**/ ?>