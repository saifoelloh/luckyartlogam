@extends('layouts.app')

@section('content')

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Fluid jumbotron</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div>
<section class="benefit-section">
  <div class="container">
    <h1 class="title-section text-center">Benefits</h1>
    <div class="row">
      <div class="col-12 col-lg-6 my-3">
        <div class="card border-0 bg-transparent px-5">
          <img src="{{ asset('assets/icon-real-pict.png') }}" class="mx-auto" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title">Real Pict</h5>
            <p class="card-text">Hasil pesanan sesuai dengan apa yang kami berikan di foto produk. Kami menjaga kepercayaan anda sepenuhnya</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6 my-3">
        <div class="card border-0 bg-transparent px-5">
          <img src="{{ asset('assets/icon-tanpa-min.png') }}" class="mx-auto" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title">Tanpa Minimum Transaksi</h5>
            <p class="card-text">Bebas untuk menentukan pesanan dalam jumah besar maupun satuan. Kami tidak membatasi jumlah order</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6 my-3">
        <div class="card border-0 bg-transparent px-5">
          <img src="{{ asset('assets/icon-custom-design.png') }}" class="mx-auto" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title">Custom Design</h5>
            <p class="card-text">Dapat menentuan design anda sendiri, kami akan mengerjakan pesanan sesuai dengan apa yang anda ingkan.</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6 my-3">
        <div class="card border-0 bg-transparent px-5">
          <img src="{{ asset('assets/icon-sdm-unggul.png') }}" class="mx-auto" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Didukung oleh SDM yang handal, dan akan memastikan hasil pesanan terjamin mutu dan kualitasnya</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</section>
  

  
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Dashboard') }}</div>

        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
              {{ session('status') }}
          </div>
          @endif

          {{ __('You are logged in!') }}
        </div>
      </div>
    </div>
  </div>
@endsection
