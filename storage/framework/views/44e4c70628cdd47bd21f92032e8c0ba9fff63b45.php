<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Tambah Produk</title>
</head>

<body>
    <?php echo $__env->make('template.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container mt-5 mb-5">
        <form action="<?php echo e(route('admin.tambahproduk')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <h3 class="text-center">Silahkan isi data produk</h3>
            <hr>
            <div class="mb-3">
                <label for="" class="form-label">Nama Produk</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Harga</label>
                <input type="number" name="harga" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Foto</label>
                <br>
                <input type="file" name="foto" accept="image/*" class="btn btn-outline-secondary" required>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Kategori</label>
                <select name="kategori_id" class="form-control" id="">
                    <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <button class="btn btn-primary" type="submit">Kirim</button>
        </form>
    </div>

    <?php echo $__env->make('template.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
<?php /**PATH C:\laragon\www\laravel8\resources\views/produk/tambah.blade.php ENDPATH**/ ?>