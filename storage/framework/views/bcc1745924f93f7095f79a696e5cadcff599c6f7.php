<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header"><h3>Reader</h3></div>
                    <div class="card-content">
                        <div class="pull-right" style="margin-right: 20px">
                            <a href="<?php echo e(url('/reader')); ?>" title="Back">
                                <button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left"
                                                                          aria-hidden="true"></i> Back
                                </button>
                            </a>
                            <a href="<?php echo e(url('/reader/' . $reader->id . '/edit')); ?>" title="Edit Reader">
                                <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                                          aria-hidden="true"></i> Edit
                                </button>
                            </a>

                            <form method="POST" action="<?php echo e(url('reader' . '/' . $reader->id)); ?>" accept-charset="UTF-8"
                                  style="display:inline">
                                <?php echo e(method_field('DELETE')); ?>

                                <?php echo e(csrf_field()); ?>

                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Reader"
                                        onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o"
                                                                                                 aria-hidden="true"></i>
                                    Delete
                                </button>
                            </form>
                        </div>
                        <br/>
                        <br/>
                        <br/>

                        <div class="col-md-12 table-responsive">
                            <label> Name</label>
                            <div> <?php echo e($reader->name); ?> </div>
                            <br>
                            <label> Email</label>
                            <div> <?php echo e($reader->email); ?> </div>
                            <br>
                            <label> Image</label>
                            <div>
                                <img src="<?php if(isset($reader->image)): ?> <?php echo e(Illuminate\Support\Facades\Storage::url($reader->image)); ?> <?php else: ?> <?php echo e(asset('img/placeholder.jpg')); ?> <?php endif; ?>"
                                     alt="..."
                                >
                            </div>
                            <br>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header"><h3>Update Password</h3></div>
                    <div class="card-content">

                        <div class="col-md-12">
                            <?php if($errors->any()): ?>
                                <ul class="alert alert-danger">
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            <?php endif; ?>
                            <form method="POST" action="<?php echo e(route('reader.update_pass' , $reader->id)); ?>"
                                  accept-charset="UTF-8"
                                  class="form-horizontal" enctype="multipart/form-data">
                                <?php echo e(csrf_field()); ?>

                                <div class="form-group <?php echo e($errors->has('password') ? 'has-error' : ''); ?>">
                                    <label for="password" class="control-label"><?php echo e('Password'); ?></label>
                                    <input class="form-control" name="password" type="password" id="password">
                                    <?php echo $errors->first('password', '<p class="help-block">:message</p>'); ?>

                                </div>
                                <div class="form-group <?php echo e($errors->has('password_confirmation') ? 'has-error' : ''); ?>">
                                    <label for="password_confirmation"
                                           class="control-label"><?php echo e('Confirm Password'); ?></label>
                                    <input class="form-control" name="password_confirmation" type="password"
                                           id="password_confirmation">
                                    <?php echo $errors->first('password_confirmation', '<p class="help-block">:message</p>'); ?>

                                </div>

                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" value="Update Password">
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>