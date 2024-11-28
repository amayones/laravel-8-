<div class="container">
    <div class="row mt-3 mb-5">
        <?php if(Session::has('status')): ?>
            <div><span style="color: red;"><?php echo e(Session::get('status')); ?></span></div>
        <?php endif; ?>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-3 mt-3">
                <div class="card" style="width: 16rem;">

                    <div class="card-body">
                        <img src="<?php echo e(asset($item->foto)); ?>" class="card-img-top" style="border-radius: 10px;">
                        <h5 class="card-title mt-3"><?php echo e($item->name); ?></h5>
                        <p class="card-text">Rp. <?php echo e(number_format($item->harga, 0, ',', ',')); ?></p>
                        <a class="btn btn-primary" href="<?php echo e(route('pelanggan.detail', $item->id)); ?>">detail</a>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH C:\Users\akmal\OneDrive\Documents\RPL\PRACTICE\PRACTICE LARAVEL\laravel8\resources\views/template/card.blade.php ENDPATH**/ ?>