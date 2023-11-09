<p>Tên danh mục: <?php echo e($category->name); ?></p>
<p>Số lượng sản phẩm: <?php echo e(count($category->products)); ?></p>
<h4>Danh sách sản phẩm</h4>
<ul>
    <?php $__currentLoopData = $category->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($item->id); ?> - <?php echo e($item->name); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul><?php /**PATH /Library/WebServer/Documents/we16201-php2/mvc2/app/views/admin/category/detail.blade.php ENDPATH**/ ?>