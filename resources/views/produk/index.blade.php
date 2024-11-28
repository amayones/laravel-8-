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
    @include('template.nav')

    <div class="container mt-5 mb-5">
        <a href="{{ route('admin.tambahproduk') }}" class="btn btn-primary">Tambah</a>
        <table class="table table-responsive-sm mt-3">
            <thead>
                <tr>
                    <th>Gambar</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>

            <tbody>
                @foreach ($produk as $item)
                    <tr>
                        <td>
                            <img src="{{ asset($item->foto) }}" width="100" height="100">
                        </td>
                        <td>{{ $item->name }}</td>
                        <td>{{ number_format($item->harga, 0, ',', ',') }}</td>
                        <td>
                            <a href="{{ route('admin.showubahproduk', $item->id) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ route('admin.hapusproduk', $item->id) }}" class="btn btn-danger"
                                onclick="return confirm('Yakin untuk di hapus?')">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </thead>
        </table>
        {{ $produk->render() }}
    </div>

    @include('template.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
