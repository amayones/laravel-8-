<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Daftar Produk</title>
</head>

<body>
    <?php echo $__env->make('template.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container mt-5 mb-5">
        <a href="<?php echo e(route('admin.tambahproduk')); ?>" class="btn btn-primary">Tambah</a>
        <table class="table table-responsive-sm mt-3">
            <thead>
                <tr>
                    <th>Gambar</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>

            <tbody>
                <?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <img src="<?php echo e(asset($item->foto)); ?>" width="100" height="100">
                        </td>
                        <td><?php echo e($item->name); ?></td>
                        <td><?php echo e(number_format($item->harga, 0, ',', ',')); ?></td>
                        <td>
                            <a href="<?php echo e(route('admin.showubahproduk', $item->id)); ?>" class="btn btn-primary">Edit</a>
                            <a href="<?php echo e(route('admin.hapusproduk', $item->id)); ?>" class="btn btn-danger"
                                onclick="return confirm('Yakin untuk di hapus?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            </thead>
        </table>
        <?php echo e($produk->render()); ?>

    </div>

    <?php echo $__env->make('template.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
<?php /**PATH C:\laragon\www\laravel8\resources\views/produk/index.blade.php ENDPATH**/ ?>