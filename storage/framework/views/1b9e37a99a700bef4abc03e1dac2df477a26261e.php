<nav class="nav bg-dark sticky-top pb-2 pt-2">
    <a class="nav-link active text-white" aria-current="page" href="#">MAY'shop</a>
    <?php if(auth()->guard()->guest()): ?>
        <a class="nav-link text-white" href="<?php echo e(route('home')); ?>">Home</a>
        <a class="nav-link text-white" href="<?php echo e(route('login')); ?>">Login</a>
    <?php endif; ?>

    <?php if(auth()->guard()->check()): ?>
        <a class="nav-link text-white" href="<?php echo e(route('home')); ?>">Home</a>
        <?php if(auth()->user()->role == 'admin'): ?>
            <a class="nav-link text-white" href="<?php echo e(route('admin.produk')); ?>">Produk</a>
        <?php else: ?>
            <a class="nav-link text-white" href="<?php echo e(route('pelanggan.keranjang')); ?>">Keranjang</a>
            <a class="nav-link text-white" href="<?php echo e(route('pelanggan.summary')); ?>">Summary</a>
        <?php endif; ?>
        <a class="nav-link text-white" href="<?php echo e(route('logout')); ?>">Logout</a>
    <?php endif; ?>
</nav>
<?php /**PATH C:\laragon\www\laravel8\resources\views/template/nav.blade.php ENDPATH**/ ?>