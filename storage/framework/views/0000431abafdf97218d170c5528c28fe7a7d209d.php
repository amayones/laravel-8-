<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Summary</title>
</head>

<body>
    <?php echo $__env->make('template.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container mt-5 mb-5">
        <h5>Summary</h5>
        <hr>
        <?php $__currentLoopData = $detailtransaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card mt-3 mb-5">
                <div class="row">
                    <div class="col-2 p-4">
                        <img src="<?php echo e(asset($item->produk->foto)); ?>" class="img-thumbnail">
                    </div>

                    <div class="col-10">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo e($item->produk->name); ?></h3>
                            <h5 class="card-title">Invoice : <?php echo e($item->invoice); ?></h5>
                            <hr>
                            <p class="card-text">Harga Rp. <?php echo e(number_format($item->produk->harga, 0, ',', ',')); ?></p>
                            <p class="card-text">Banyak : <?php echo e($item->qty); ?></p>
                            <hr>
                            <p class="card-text">Total Rp. <?php echo e(number_format($item->produk->totalharga, 0, ',', ',')); ?>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <?php echo $__env->make('template.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
<?php /**PATH C:\laragon\www\laravel8\resources\views/summary.blade.php ENDPATH**/ ?>