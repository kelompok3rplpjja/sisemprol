<?php $__env->startSection('content'); ?>

    <div class="row">

        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-content">
                    <p class="category">Reader</p>
                    <h3 class="card-title"><?php echo e($reader_count); ?></h3>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header">
                    <i class="material-icons">Data Gelombang</i>
                </div>
                <div class="card-content">
                    <p class="category">Category</p>
                    <h3 class="card-title"><?php echo e($category_count); ?></h3>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-content">
                    <p class="category">Jadwal</p>
                    <h3 class="card-title"><?php echo e($jadwal_count); ?></h3>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-content">
                    <p class="category">Nontifikasi</p>
                    <h3 class="card-title"><?php echo e($notification_count); ?></h3>
                </div>
            </div>
        </div>


    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>