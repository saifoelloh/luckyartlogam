@extends('layouts.app')

@section('content')

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Fluid jumbotron</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div>
<section class="benefit-section vh-100-lg my-5">
  <div class="container">
    <h1 class="title-section text-center">Benefits</h1>
    <div class="row">
      <div class="col-12 col-lg-6 my-3">
        <div class="card border-0 bg-transparent">
          <img src="{{ asset('assets/icon-real-pict.png') }}" class="mx-auto" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title">Real Pict</h5>
            <p class="card-text">Hasil pesanan sesuai dengan apa yang kami berikan di foto produk. Kami menjaga kepercayaan anda sepenuhnya</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6 my-3">
        <div class="card border-0 bg-transparent">
          <img src="{{ asset('assets/icon-tanpa-min.png') }}" class="mx-auto" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title">Tanpa Minimum Transaksi</h5>
            <p class="card-text">Bebas untuk menentukan pesanan dalam jumah besar maupun satuan. Kami tidak membatasi jumlah order</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6 my-3">
        <div class="card border-0 bg-transparent">
          <img src="{{ asset('assets/icon-custom-design.png') }}" class="mx-auto" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title">Custom Design</h5>
            <p class="card-text">Dapat menentuan design anda sendiri, kami akan mengerjakan pesanan sesuai dengan apa yang anda ingkan.</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6 my-3">
        <div class="card border-0 bg-transparent">
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
<section class="product-section my-5">
  <div class="container">
    <h1 class="title-section text-center">Product</h1>
    <div class="row">
      <div class="col-12 col-md-6 col-lg-4 mb-5">
        <div class="card mx-auto">
          <img src="{{ asset('assets/dummy-product.jpg') }}" class="" alt="...">
          <div class="card-body">
            <h6 class="card-title font-weight-bold">Nama Barang</h6>
            <p class="product-category">Kategory</p>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio amet atque officia, omnis molestiae reiciendis ratione nesciunt, delectus tempora, dolor necessitatibus animi quam iste voluptate corporis maiores nostrum nam ipsum!</p>
          </div>
          <a href="" class="btn btn-info text-white">Readmore</a>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 mb-5">
        <div class="card mx-auto">
          <img src="{{ asset('assets/dummy-product.jpg') }}" class="" alt="...">
          <div class="card-body">
            <h6 class="card-title font-weight-bold">Nama Barang</h6>
            <p class="product-category">Kategory</p>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio amet atque officia, omnis molestiae reiciendis ratione nesciunt, delectus tempora, dolor necessitatibus animi quam iste voluptate corporis maiores nostrum nam ipsum!</p>
          </div>
          <a href="" class="btn btn-info text-white">Readmore</a>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 mb-5">
        <div class="card mx-auto">
          <img src="{{ asset('assets/dummy-product.jpg') }}" class="" alt="...">
          <div class="card-body">
            <h6 class="card-title font-weight-bold">Nama Barang</h6>
            <p class="product-category">Kategory</p>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio amet atque officia, omnis molestiae reiciendis ratione nesciunt, delectus tempora, dolor necessitatibus animi quam iste voluptate corporis maiores nostrum nam ipsum!</p>
          </div>
          <a href="" class="btn btn-info text-white">Readmore</a>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 mb-5">
        <div class="card mx-auto">
          <img src="{{ asset('assets/dummy-product.jpg') }}" class="" alt="...">
          <div class="card-body">
            <h6 class="card-title font-weight-bold">Nama Barang</h6>
            <p class="product-category">Kategory</p>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio amet atque officia, omnis molestiae reiciendis ratione nesciunt, delectus tempora, dolor necessitatibus animi quam iste voluptate corporis maiores nostrum nam ipsum!</p>
          </div>
          <a href="" class="btn btn-info text-white">Readmore</a>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 mb-5">
        <div class="card mx-auto">
          <img src="{{ asset('assets/dummy-product.jpg') }}" class="" alt="...">
          <div class="card-body">
            <h6 class="card-title font-weight-bold">Nama Barang</h6>
            <p class="product-category">Kategory</p>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio amet atque officia, omnis molestiae reiciendis ratione nesciunt, delectus tempora, dolor necessitatibus animi quam iste voluptate corporis maiores nostrum nam ipsum!</p>
          </div>
          <a href="" class="btn btn-info text-white">Readmore</a>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 mb-5">
        <div class="card mx-auto">
          <img src="{{ asset('assets/dummy-product.jpg') }}" class="" alt="...">
          <div class="card-body">
            <h6 class="card-title font-weight-bold">Nama Barang</h6>
            <p class="product-category">Kategory</p>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio amet atque officia, omnis molestiae reiciendis ratione nesciunt, delectus tempora, dolor necessitatibus animi quam iste voluptate corporis maiores nostrum nam ipsum!</p>
          </div>
          <a href="" class="btn btn-info text-white">Readmore</a>
        </div>
      </div>
    </div>
      <div class="d-flex justify-content-center">
        <a href="" class="btn btn-outline-primary font-weight-bold px-5">See More</a> 
      </div>
  </div>
</section>
<section class="testimonial-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <img src="{{ asset('assets/dummy-product.jpg') }}" alt="" class="testimonial-photo mx-auto">
      </div>
      <div class="col-lg"></div>
      <div class="col-lg-6 px-5">
        <h1 class="title-section">Testimonial</h1>
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
