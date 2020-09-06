@extends('adminlte::page')
@section('title', 'Ubah Foto Produk')

@section('content_header')
    <div class="row">
      <div class="col">
        <h1>Ubah Foto Produk</h1>
      </div>
      <div class="col text-right">
        <a class="btn btn-primary btn-sm" href="{{ route('product.index') }}">
          <i class="fas fa-reply mr-2"></i>
          kembali
        </a>
      </div>
    </div>
@stop

@section('content')
    <div class="card">
      <div class="card-body">
        <div class="row">
          @if (sizeof($photos) > 0)
            @foreach ($photos as $p)
              <div class="col-md-3">
                <div class="card">
                  <img class="card-img-top" src="{{Storage::url($p->photo)}}" alt="">
                  <div class="card-body">
                    <form action="{{route('photos.destroy', $p->id)}}" method="post" accept-charset="utf-8">
                      @method("DELETE")
                      @csrf
                      <button class="btn btn-block btn-info" type="submit">
                        <i class="fas fa-trash mr-2"></i>
                        Hapus
                      </button>
                    </form>
                  </div>
                </div>
              </div>
            @endforeach
          @else
            <h1>Tidak ada detail foto produk</h1>
          @endif
        </div>
      </div>
    </div>
@stop
