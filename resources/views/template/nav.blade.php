<nav class="nav bg-dark sticky-top pb-2 pt-2">
    <a class="nav-link active text-white" aria-current="page" href="#">MAY'shop</a>
    @guest
        <a class="nav-link text-white" href="{{ route('home') }}">Home</a>
        <a class="nav-link text-white" href="{{ route('login') }}">Login</a>
    @endguest

    @auth
        <a class="nav-link text-white" href="{{ route('home') }}">Home</a>
        @if (auth()->user()->role == 'admin')
            <a class="nav-link text-white" href="{{ route('admin.produk') }}">Produk</a>
        @else
            <a class="nav-link text-white" href="{{ route('pelanggan.keranjang') }}">Keranjang</a>
            <a class="nav-link text-white" href="{{ route('pelanggan.summary') }}">Summary</a>
        @endif
        <a class="nav-link text-white" href="{{ route('logout') }}">Logout</a>
    @endauth
</nav>
