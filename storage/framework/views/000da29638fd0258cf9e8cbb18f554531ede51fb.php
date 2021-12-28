<div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
    <label for="name" class="control-label"><?php echo e('Name'); ?></label>
    <input class="form-control" name="name" type="text" id="name"
           value="<?php echo e(isset($reader->name) ? $reader->name : ''); ?>">
    <?php echo $errors->first('name', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
    <label for="email" class="control-label"><?php echo e('Email'); ?></label>
    <input class="form-control" name="email" type="text" id="email"
           value="<?php echo e(isset($reader->email) ? $reader->email : ''); ?>">
    <?php echo $errors->first('email', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('image') ? 'has-error' : ''); ?>">

    <div class="fileinput fileinput-new text-center" data-provides="fileinput">

        <div class="fileinput-new thumbnail">
            <img src="<?php if(isset($reader->image)): ?> <?php echo e(Illuminate\Support\Facades\Storage::url($reader->image)); ?> <?php else: ?> <?php echo e(asset('img/placeholder.jpg')); ?> <?php endif; ?>"
                 alt="...">
        </div>
        <div class="fileinput-preview fileinput-exists thumbnail"></div>
        <div>
        <span class="btn btn-rose btn-round btn-file">
            <span class="fileinput-new">Select image</span>
            <span class="fileinput-exists">Change</span>
            <input type="file" name="image" id="image" value="<?php echo e(isset($reader->image) ? $reader->image : ''); ?>"/>
        </span>
            <a href="" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i
                        class="fa fa-times"></i> Remove</a>
            <?php echo $errors->first('image', '<p class="help-block">:message</p>'); ?>

        </div>
    </div>
</div>
<?php if(!isset($reader)): ?>
    <div class="form-group <?php echo e($errors->has('password') ? 'has-error' : ''); ?>">
        <label for="password" class="control-label"><?php echo e('Password'); ?></label>
        <input class="form-control" name="password" type="password" id="password">
        <?php echo $errors->first('password', '<p class="help-block">:message</p>'); ?>

    </div>
    <div class="form-group <?php echo e($errors->has('password_confirmation') ? 'has-error' : ''); ?>">
        <label for="password_confirmation" class="control-label"><?php echo e('Confirm Password'); ?></label>
        <input class="form-control" name="password_confirmation" type="password" id="password_confirmation">
        <?php echo $errors->first('password_confirmation', '<p class="help-block">:message</p>'); ?>

    </div>
<?php endif; ?>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="<?php echo e($formMode === 'edit' ? 'Update' : 'Create'); ?>">
</div>
