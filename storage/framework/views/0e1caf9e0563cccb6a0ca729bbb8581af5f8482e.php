<div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
    <label for="name" class="control-label"><?php echo e('Name'); ?></label>
    <input class="form-control" name="name" type="text" id="name" value="<?php echo e(isset($category->name) ? $category->name : ''); ?>" >
    <?php echo $errors->first('name', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('description') ? 'has-error' : ''); ?>">
    <label for="description" class="control-label"><?php echo e('Description'); ?></label>
    <textarea class="form-control" rows="5" name="description" type="textarea" id="description" ><?php echo e(isset($category->description) ? $category->description : ''); ?></textarea>
    <?php echo $errors->first('description', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('image') ? 'has-error' : ''); ?>">

    <div class="fileinput fileinput-new text-center" data-provides="fileinput">

        <div class="fileinput-new thumbnail">
            <img src="<?php if(isset($category->image)): ?> <?php echo e(Illuminate\Support\Facades\Storage::url($category->image)); ?> <?php else: ?> <?php echo e(asset('img/placeholder.jpg')); ?> <?php endif; ?>" alt="...">
        </div>
        <div class="fileinput-preview fileinput-exists thumbnail"></div>
        <div>
        <span class="btn btn-rose btn-round btn-file">
            <span class="fileinput-new">Select image</span>
            <span class="fileinput-exists">Change</span>
            <input type="file" name="image" id="image" value="<?php echo e(isset($category->image) ? $category->image : ''); ?>"/>
        </span>
            <a href="" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i
                        class="fa fa-times"></i> Remove</a>
            <?php echo $errors->first('image', '<p class="help-block">:message</p>'); ?>

        </div>
    </div>
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="<?php echo e($formMode === 'edit' ? 'Update' : 'Create'); ?>">
</div>
