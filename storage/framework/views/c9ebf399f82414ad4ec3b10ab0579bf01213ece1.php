<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Bayar</title>
</head>

<body>
    <?php echo $__env->make('template.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <form action="<?php echo e(route('pelanggan.prosesbayar', $detailtransaksi->id)); ?>" method="POST"
        enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="container mt-5 mb-5">
            <h5>Upload Bukti Pembayaran</h5>
            <hr>
            <div class="row">

                <div class="col-4">
                    <div class="card">
                        <img src="<?php echo e(asset($produk->foto)); ?>" alt="" class="card-img-top">
                    </div>
                </div>

                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo e($produk->name); ?></h3>
                            <hr>
                            <p class="card-text">Rp. <?php echo e(number_format($produk->harga, 0, ',', ',')); ?></p>
                            <p class="card-text">Rp. <?php echo e(number_format($detailtransaksi->totalharga, 0, ',', ',')); ?></p>
                            <p class="card-text">Banyak : <?php echo e($detailtransaksi->qty); ?></p>
                            <hr>
                            <div class="mb-2">
                                <label for="" class="form-control"><b>Bukti Pembayaran</b></label>
                                <input type="file" name="bukti_transaksi" accept="image/*" required>
                            </div>
                            <hr>
                            <h5>Keterangan : </h5>
                            <p>Silahkan lakukan transfer ke bank berikut dan tunggu konfirmasi dari kami</p>
                            <button class="btn btn-success">Upload</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <?php echo $__env->make('template.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
<?php /**PATH C:\laragon\www\laravel8\resources\views/bayar.blade.php ENDPATH**/ ?>