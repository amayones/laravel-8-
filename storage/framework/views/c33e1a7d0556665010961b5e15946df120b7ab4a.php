<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Detail Produk</title>
</head>

<body>
    <?php echo $__env->make('template.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container mt-5 mb-5">

        <form action="<?php echo e(route('postregister')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <h3 class="text-center">Silahkan Isi Data Customer</h3>
            <hr>
            <div class="mb-3">
                <label for="" class="form-label">Nama Customer</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email Address</label>
                <input type="email" name="email" id="exampleInputEmail1" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" id="exampleInputPassword1" class="form-control" required>
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
<?php /**PATH C:\laragon\www\laravel8\resources\views/register.blade.php ENDPATH**/ ?>