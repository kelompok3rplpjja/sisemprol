<div class="form-group <?php echo e($errors->has('title') ? 'has-error' : ''); ?>">
    <label for="title" class="control-label"><?php echo e('Title'); ?></label>
    <input class="form-control" name="title" type="text" id="title" value="<?php echo e(isset($notification->title) ? $notification->title : ''); ?>" >
    <?php echo $errors->first('title', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('message') ? 'has-error' : ''); ?>">
    <label for="message" class="control-label"><?php echo e('Message'); ?></label>
    <input class="form-control" name="message" type="text" id="message" value="<?php echo e(isset($notification->message) ? $notification->message : ''); ?>" >
    <?php echo $errors->first('message', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('url') ? 'has-error' : ''); ?>">
    <label for="url" class="control-label"><?php echo e('Url'); ?></label>
    <input class="form-control" name="url" type="text" id="url" value="<?php echo e(isset($notification->url) ? $notification->url : ''); ?>" >
    <?php echo $errors->first('url', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('type') ? 'has-error' : ''); ?>">
    <label for="type" class="control-label"><?php echo e('Type'); ?></label>
    <select name="type" class="form-control" id="type" >
    <?php $__currentLoopData = json_decode('{"open-url": "Open Url", "open-app": "Open App"}', true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $optionKey => $optionValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($optionKey); ?>" <?php echo e((isset($notification->type) && $notification->type == $optionKey) ? 'selected' : ''); ?>><?php echo e($optionValue); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
    <?php echo $errors->first('type', '<p class="help-block">:message</p>'); ?>

</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="<?php echo e($formMode === 'edit' ? 'Update' : 'Create'); ?>">
</div>
