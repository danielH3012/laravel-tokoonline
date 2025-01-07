@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach ($barang as $item)
        <div class="card" style="width: 18rem; margin: 2%">
            <img class="card-img-top" src="{{ asset('images/' . $item->nama_barang . '.png') }}" alt="{{$item->nama_barang}}" width="50" height="200"  alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{ $item->nama_barang }}</h5>
              <p class="card-text" style="padding-bottom: 0%; padding-top: 0%; margin-bottom: 0%; margin-top: 1%;">
                Harga: {{ $item->harga_barang }}
              </p>
              <p class="card-text" style="padding-bottom: 0%; padding-top: 0%; margin-bottom: 0%; margin-top: 1%;">
                Stok: <a style="color: 
                    @if($item->stok_barang >= 5)
                        blue
                    @else
                        red
                    @endif">
                    {{ $item->stok_barang }}
                </a>
              </p>
              <p class="card-text" style="padding-bottom: 0%; padding-top: 0%; margin-bottom: 5%; margin-top: 1%;">
                {{ $item->keterangan }}
              </p>
              <a href="{{url('pesan')}}/{{$item->id_barang}}" class="btn btn-primary">Pesan</a>
            </div>
          </div>
        @endforeach
    </div>
</div>
@endsection

