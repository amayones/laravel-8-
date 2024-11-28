<div class="container">
    <div class="row mt-3 mb-5">
        @if (Session::has('status'))
            <div><span style="color: red;">{{ Session::get('status') }}</span></div>
        @endif
        @foreach ($data as $item)
            <div class="col-3 mt-3">
                <div class="card" style="width: 16rem;">

                    <div class="card-body">
                        <img src="{{ asset($item->foto) }}" class="card-img-top" style="border-radius: 10px;">
                        <h5 class="card-title mt-3">{{ $item->name }}</h5>
                        <p class="card-text">Rp. {{ number_format($item->harga, 0, ',', ',') }}</p>
                        <a class="btn btn-primary" href="{{ route('pelanggan.detail', $item->id) }}">detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
