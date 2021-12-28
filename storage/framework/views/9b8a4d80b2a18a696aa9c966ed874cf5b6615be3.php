<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>News</h3></div>
                    <div class="card-content">
                        <div class="pull-right" style="margin-right: 20px">
                            <a href="<?php echo e(url('/news')); ?>" title="Back">
                                <button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left"
                                                                          aria-hidden="true"></i> Back
                                </button>
                            </a>
                            <a href="<?php echo e(url('/news/' . $news->id . '/edit')); ?>" title="Edit News">
                                <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                                          aria-hidden="true"></i> Edit
                                </button>
                            </a>

                            <form method="POST" action="<?php echo e(url('news' . '/' . $news->id)); ?>" accept-charset="UTF-8"
                                  style="display:inline">
                                <?php echo e(method_field('DELETE')); ?>

                                <?php echo e(csrf_field()); ?>

                                <button type="submit" class="btn btn-danger btn-sm" title="Delete News"
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
                            <label> Title</label>
                            <div> <?php echo e($news->title); ?> </div>
                            <br>
                            <?php if(isset($news->category)): ?>
                                <label> Category</label>
                                <div>
                                    <?php echo e($news->category->name); ?>


                                </div>
                                <br>
                            <?php endif; ?>
                            <label> Body</label>
                            <div><?php echo $news->body; ?> </div>
                            <br>
                            <label> Image</label>
                            <div>
                                <img src="<?php echo e(Illuminate\Support\Facades\Storage::url($news->image)); ?>">
                            </div>
                            <br>

                            <label> Type</label>
                            <div><strong><?php echo e(strtoupper($news->type)); ?> </strong></div>
                            <br>

                            <label> Published</label>
                            <div>
                                <?php if($news->published == "1"): ?>
                                    <strong class="text-success"> Published </strong> <?php else: ?>
                                    <strong class="text-warning"> Unpublished</strong> <?php endif; ?>
                            </div>
                            <br>
                            <?php if($news->published == "1" && isset($news->published_at)): ?>
                                <label> Published At</label>
                                <div>
                                    <?php echo e(\Carbon\Carbon::parse($news->published_at)->toDayDateTimeString()); ?>


                                </div>
                                <br>
                            <?php endif; ?>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>