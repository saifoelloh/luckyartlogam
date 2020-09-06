@extends('adminlte::page')
@section('title', 'Edit Produk')

@section('content_header')
    <div class="row">
      <div class="col">
        <h1>Edit Produk</h1>
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
        <div class="row justify-content-center">
          <div class="col-md-8">
            <form action="{{route('product.update', $product['id'])}}" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
              @method('PUT')
              @csrf
              <div class="form-group">
                <label for="name">Nama</label>
                <input class="form-control" type="text" name="name" id="name" value="{{$product['name']}}" required>
              </div>
              <div class="form-group">
                <label for="category">Kategori</label>
                <input class="form-control" type="text" name="category" id="category" value="{{$product['category']}}" required>
              </div>
              <div class="form-group">
                <label for="photo">Foto</label>
                <input class="form-control" type="file" name="photo" id="photo">
              </div>
              <div class="form-group">
                <label for="description">Deskripsi</label>
                <textarea id="description" class="form-control" name="description" required>{{$product['description']}}</textarea>
              </div>
              <div class="button-group">
                <button class="btn btn-success btn-block" type="submit">
                  <i class="fas fa-paper-plane mr-2"></i>
                  submit
                </button>
                <button class="btn btn-warning btn-block" type="reset">
                  <i class="fas fa-history mr-2"></i>
                  reset
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
@stop

@push('js')
<script src="//cdn.ckeditor.com/4.14.1/basic/ckeditor.js"></script>

<script>
  const deskripsi = document.querySelector('#description')
  CKEDITOR.replace(deskripsi, {
    language: 'en-gb'
  })
  CKEDITOR.config.allowedContent = true
  
</script>
@endpush
