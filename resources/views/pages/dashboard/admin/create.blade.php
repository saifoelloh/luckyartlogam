@extends('adminlte::page')
@section('title', 'Tambah Admin')

@section('content_header')
    <div class="row">
      <div class="col">
        <h1>Tambah Admin</h1>
      </div>
      <div class="col text-right">
        <a class="btn btn-primary btn-sm" href="{{ route('admin.index') }}">
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
            <form action="{{route('admin.store')}}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="name">Nama</label>
                <input class="form-control" type="text" name="name" id="name" required>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" id="email" required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" id="password" required>
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
