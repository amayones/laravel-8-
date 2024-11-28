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
    @include('template.nav')

    <div class="container mt-5 mb-5">
        <form action="{{ route('admin.ubahproduk', $produk->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h3 class="text-center">Silahkan ubah data produk</h3>
            <hr>
            <div class="mb-3">
                <label for="" class="form-label">Nama Produk</label>
                <input type="text" name="name" class="form-control" value="{{ $produk->name }}" required>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Harga</label>
                <input type="number" name="harga" class="form-control" value="{{ $produk->harga }}" required>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Foto</label>
                <br>
                <input type="file" name="foto" accept="image/*" class="btn btn-outline-secondary" required>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Kategori</label>
                <select name="kategori_id" class="form-control" id="">
                    @foreach ($kategori as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-primary" type="submit">Kirim</button>
        </form>
    </div>

    @include('template.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
