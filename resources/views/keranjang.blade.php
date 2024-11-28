<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Keranjang</title>
</head>

<body>
    @include('template.nav')

    <div class="container mt-5 mb-5">
        <h5>Keranjang</h5>
        @if (Session::has('status'))
            <div><span style="color: red;">{{ Session::get('status') }}</span></div>
        @endif
        <hr>
        @foreach ($detailtransaksi as $item)
            <div class="card mt-3">
                <div class="row">
                    <div class="col-2 p-4">
                        <img src="{{ asset($item->produk->foto) }}" alt="" class="img-thumbnail">
                    </div>

                    <div class="col-8">
                        <div class="card-body">
                            <h3 class="card-title">{{ $item->produk->name }}</h3>
                            <hr>
                            <p class="card-text">Harga Rp. {{ number_format($item->produk->harga, 0, ',', ',') }}</p>
                            <hr>
                            <input type="number" name="banyak" class="form-control" value="{{ $item->qty }}"
                                readonly required>
                            <hr>
                            <p class="card-text">Total Rp. {{ number_format($item->totalharga), 0, ',', ',' }}</p>
                        </div>
                    </div>

                    <div class="col-2 p-5">
                        <a href="{{ route('pelanggan.bayar', $item->id) }}" class="btn btn-info">Bayar</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    @include('template.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
