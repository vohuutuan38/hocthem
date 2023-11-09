<?php $__env->startSection('content'); ?>
<h3>Hello, <?php echo e($_SESSION['auth']['name']); ?></h3>
<table>
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Age</th>
        <th>Avatar</th>
        <th>
            <a href="<?php echo e(BASE_URL . 'add-user'); ?>">Tạo mới</a>
        </th>
    </thead>
    <tbody>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($u->id); ?></td>
            <td><?php echo e($u->name); ?></td>
            <td><?php echo e($u->email); ?></td>
            <td>
                <?php if($u->gender == 1): ?>
                Nam
                <?php elseif($u->gender == 2): ?>
                Nữ
                <?php else: ?>
                Khác
                <?php endif; ?>
            </td>
            <td><?php echo e($u->age); ?></td>
            <td>
                <?php if(!empty($u->avatar)): ?>
                <img src="<?php echo e(PUBLIC_PATH . $u->avatar); ?>" width="70">
                <?php endif; ?>
            </td>
            <td>
                <a href="<?php echo e(BASE_URL . 'edit-user/' . $u->id); ?>">Sửa</a>
                <a href="<?php echo e(BASE_URL . 'remove-user/' . $u->id); ?>">Xóa</a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('client-layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Library/WebServer/Documents/we16201-php2/mvc2/app/views/home/index.blade.php ENDPATH**/ ?>