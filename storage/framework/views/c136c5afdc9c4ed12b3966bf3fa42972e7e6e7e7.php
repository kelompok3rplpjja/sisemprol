<div class="form-group <?php echo e($errors->has('title') ? 'has-error' : ''); ?>">
    <label for="title" class="control-label"><?php echo e('Title'); ?></label>
    <input class="form-control" name="title" type="text" id="title"
           value="<?php echo e(isset($news->title) ? $news->title : ''); ?>">
    <?php echo $errors->first('title', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('category_id') ? 'has-error' : ''); ?>">
    <label for="category_id" class="control-label"><?php echo e('Category'); ?></label>
    <select name="category_id" class="form-control" id="category_id">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($category->id); ?>" <?php echo e((isset($news->category_id) && $news->category_id == $category->id) ? 'selected' : ''); ?>><?php echo e($category->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <?php echo $errors->first('published', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('body') ? 'has-error' : ''); ?>">
    <label for="body" class="control-label"><?php echo e('Body'); ?></label>
    <textarea class="form-control" rows="5" name="body" type="textarea"
              id="body"><?php echo e(isset($news->body) ? $news->body : ''); ?></textarea>
    <?php echo $errors->first('body', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('image') ? 'has-error' : ''); ?>">

    <div class="fileinput fileinput-new text-center" data-provides="fileinput">

        <div class="fileinput-new thumbnail">
            <img src="<?php if(isset($news->image)): ?> <?php echo e(Illuminate\Support\Facades\Storage::url($news->image)); ?> <?php else: ?> <?php echo e(asset('img/placeholder.jpg')); ?> <?php endif; ?>" alt="...">
        </div>
        <div class="fileinput-preview fileinput-exists thumbnail"></div>
        <div>
        <span class="btn btn-rose btn-round btn-file">
            <span class="fileinput-new">Select image</span>
            <span class="fileinput-exists">Change</span>
            <input type="file" name="image" id="image" value="<?php echo e(isset($news->image) ? $news->image : ''); ?>"/>
        </span>
            <a href="" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i
                        class="fa fa-times"></i> Remove</a>
            <?php echo $errors->first('image', '<p class="help-block">:message</p>'); ?>

        </div>
    </div>
</div>

<div class="form-group <?php echo e($errors->has('type') ? 'has-error' : ''); ?>">
    <label for="type" class="control-label"><?php echo e('Type'); ?></label>
    <select name="type" class="form-control" id="type">
        <?php $__currentLoopData = json_decode('{"standard": "Standard", "video-post": "Video Post", "video-upload": "Video Upload", "photo-upload":"Photo Upload" }', true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $optionKey => $optionValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($optionKey); ?>" <?php echo e((isset($news->type) && $news->type == $optionKey) ? 'selected' : ''); ?>><?php echo e($optionValue); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <?php echo $errors->first('type', '<p class="help-block">:message</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('published') ? 'has-error' : ''); ?>">
    <label for="published" class="control-label"><?php echo e('Published'); ?></label>
    <select name="published" class="form-control" id="published">
        <?php $__currentLoopData = json_decode('{"1": "Publish","0":"Unpublished"}', true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $optionKey => $optionValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($optionKey); ?>" <?php echo e((isset($news->published) && $news->published == $optionKey) ? 'selected' : ''); ?>><?php echo e($optionValue); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <?php echo $errors->first('published', '<p class="help-block">:message</p>'); ?>

</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="<?php echo e($formMode === 'edit' ? 'Update' : 'Create'); ?>">
</div>
