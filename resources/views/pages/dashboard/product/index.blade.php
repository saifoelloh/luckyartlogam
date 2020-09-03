@extends('adminlte::page')
@section('title', 'Daftar Produk')

@section('content_header')
    @if (session('message'))
      <div class="alert {{session('success') ? 'alert-success' : 'alert-warning'}} alert-dismissible fade show" role="alert">
        {{ session('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
    <div class="row">
      <div class="col">
        <h1>Daftar Produk</h1>
      </div>
      <div class="col text-right">
        <a class="btn btn-primary btn-sm" href="{{ route('product.create') }}">
          <i class="fas fa-plus mr-2"></i>
          tambah
        </a>
      </div>
    </div>
@stop

@section('content')
    <div class="card">
      <div class="card-body">
        <table id="data-table" class="table table-bordered table-hover text-center">
          <thead class="text-capitalize">
            <tr>
              <th>nomor</th>
              <th>nama</th>
              <th>harga</th>
              <th>deskripsi</th>
              <th>aksi</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
@stop

@push('js')
  <script type="text/javascript">
    $(function () {
      var table = $('#data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('product.index') }}",
        columns: [
          {data: 'DT_RowIndex', name: 'DT_RowIndex'},
          {data: 'name', name: 'name'},
          {
            data: 'price',
            name: 'price',
            render: function(data) {
              return new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR'
              }).format(data)
            }
          },
          {data: 'description', name: 'description'},
          {
            data: 'id',
            name: 'id',
            searchable: false,
            sortable: false,
            render: function(data) {
              const detail = `
                <a class="btn btn-warning btn-xs btn-icon" href="{{ route("product.index") }}/${data}/edit">
                  <i class="fas fa-edit fa-lg"></i>
                  edit
                </a>`
              const destroy = `<form action="{{ route("product.index") }}/${data}" method="POST" class="d-inline">
                @method("DELETE")
                @csrf
                <button class="btn btn-danger btn-xs btn-icon" type="submit">
                  <i class="fas fa-trash fa-lg"></i>
                  delete
                </button>
              </form>`
              const buttons = `
                <div class="d-inline">
                  ${detail}
                  ${destroy}
                </div>
              `
              return buttons
            }
          }
        ],
        pagingType: "numbers"
      });
    });
  </script>
@endpush
