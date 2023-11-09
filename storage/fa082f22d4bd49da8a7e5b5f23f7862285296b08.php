<form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="">Name</label>
      <input type="text" name="name" value="<?php echo e($model->name); ?>" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="form-group">
      <label for="">Email</label>
      <input type="text" name="email" value="<?php echo e($model->email); ?>" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    
    <div class="form-group">
        <label for="">Gender</label>
        <select name="gender" class="form-control">
            <?php $__currentLoopData = GENDER_LIST; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option 
                <?php if($model->gender == $val): ?>
                selected
                <?php endif; ?>
                value="<?php echo e($key); ?>"><?php echo e($val); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
    <div class="form-group">
        <img src="<?php echo e(PUBLIC_PATH . $model->avatar); ?>" width="100">
        <br>
        <label for="">Avatar</label>
        <input type="file" name="image" class="form-control">
    </div>
    <div>
        <button type="submit">Cập nhật user</button>
    </div>
</form><?php /**PATH /Library/WebServer/Documents/we16201-php2/mvc2/app/views/users/edit-form.blade.php ENDPATH**/ ?>