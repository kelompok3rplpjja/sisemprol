<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="rose">
                        <i class="fas fa-money-bill-wave" style="font-size: 32px"></i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">News</h4>
                        <div class="row">
                            <a style="margin-left: 20px" href="<?php echo e(url('/news/create')); ?>"
                               class="btn btn-success pull-left"
                               title="Add New News">
                                <i class="fa fa-plus" aria-hidden="true"></i> Add New
                            </a>

                            <form method="GET" action="<?php echo e(url('/news')); ?>" accept-charset="UTF-8"
                                  class="pull-right form-inline my-2 my-lg-0 float-right" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="search" placeholder="Search..."
                                           value="<?php echo e(request('search')); ?>">
                                    <span class="input-group-append">
                                                            <button class="btn btn-primary" type="submit"
                                                                    style="margin-right:10px;">
                                                                <i class="fa fa-search"></i>
                                                            </button>
                                                        </span>
                                </div>
                            </form>

                        </div>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                    <th>Published At</th>
                                    <th class="text-center" align="center" style="text-align:center">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <img src="<?php if(isset($item->image)): ?> <?php echo e(Illuminate\Support\Facades\Storage::url($item->image)); ?> <?php else: ?> <?php echo e(asset('img/placeholder.jpg')); ?> <?php endif; ?>" alt="<?php echo e($item->title); ?>" style="height: 32px;width: 32px;">
                                        </td>

                                        <td><?php echo e(strtoupper($item->title)); ?></td>
                                        <td><?php echo e(strtoupper($item->type)); ?></td>
                                        <td><?php if($item->published == "1"): ?><strong class="text-success"> Published <?php else: ?>
                                                    <strong class="text-warning"> Unpublished</strong> <?php endif; ?></td>
                                        <td><?php if(isset($item->published_at)): ?> <?php echo e(\Carbon\Carbon::parse($item->published_at)->toDayDateTimeString()); ?> <?php else: ?>
                                                N/A <?php endif; ?></td>
                                        <td align="right">
                                            <a href="<?php echo e(url('/news/' . $item->id)); ?>" title="View News">
                                                <button class="btn btn-info btn-sm"><i class="fa fa-eye"
                                                                                       aria-hidden="true"></i> View
                                                </button>
                                            </a>
                                            <a href="<?php echo e(url('/news/' . $item->id . '/edit')); ?>" title="Edit News">
                                                <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                                                          aria-hidden="true"></i> Edit
                                                </button>
                                            </a>

                                            <form method="POST" action="<?php echo e(url('/news' . '/' . $item->id)); ?>"
                                                  accept-charset="UTF-8" style="display:inline">
                                                <?php echo e(method_field('DELETE')); ?>

                                                <?php echo e(csrf_field()); ?>

                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete News"
                                                        onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                            class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> <?php echo $news->appends(['search' => Request::get('search')])->render(); ?> </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>