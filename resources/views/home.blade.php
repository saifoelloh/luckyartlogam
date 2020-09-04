@extends('layouts.app')

@section('content')

  <div class="jumbotron jumbotron-fluid">
    <div class="container h-100 d-flex align-items-center">
      <div class="bg-white p-md-5">
        <h1 class="display-4 mb-0">LuckyArtLogam</h1>
        <p class="lead text-break">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
      </div>
    </div>
  </div>

  <!-- Benefits -->
  @php
    $benefits = [
      [
        'icon'        => asset('assets/icon-real-pict.png'),
        'title'       => 'Real Pict',
        'description' => 'Hasil pesanan sesuai dengan apa yang kami berikan di foto produk. Kami menjaga kepercayaan anda sepenuhnya'
      ],
      [
        'icon'        => asset('assets/icon-tanpa-min.png'),
        'title'       => 'Tanpa Minimum Transaksi',
        'description' => 'Bebas untuk menentukan pesanan dalam jumah besar maupun satuan. Kami tidak membatasi jumlah order'
      ],
      [
        'icon'        => asset('assets/icon-custom-design.png'),
        'title'       => 'Custom Design',
        'description' => 'Dapat menentuan design anda sendiri, kami akan mengerjakan pesanan sesuai dengan apa yang anda ingkan.'
      ],
      [
        'icon'        => asset('assets/icon-sdm-unggul.png'),
        'title'       => 'SDM Unggul',
        'description' => 'Didukung oleh SDM yang handal, dan akan memastikan hasil pesanan terjamin mutu dan kualitasnya'
      ],
    ];
  @endphp
  <section class="benefit-section vh-100-lg my-5">
    <div class="container">
      <h1 class="title-section text-center">Benefits</h1>
      <div class="row">
        @foreach ($benefits as $benefit)
          <div class="col-12 col-lg-6 my-3">
            <div class="card border-0 bg-transparent">
              <img src="{{ $benefit['icon'] }}" class="mx-auto" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title">{{ $benefit['title'] }}</h5>
                <p class="card-text">{{ $benefit['description'] }}</p>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- Product -->
  <section class="product-section my-5">
    <div class="container">
      <h1 class="title-section text-center">Product</h1>
      <div class="row">
        @foreach ($items as $item)
          <div class="col-12 col-md-6 col-lg-4 mb-5">
            <div class="card mx-auto">
              <img src="{{ Storage::url($item['photo']) }}" class="" alt="...">
              <div class="card-body">
                <h6 class="card-title font-weight-bold mb-0 text-capitalize">{{ $item['name'] }}</h6>
                <p class="product-category">
                  {{ "Rp. ".number_format($item['category']) }}
                </p>
                <p class="card-text">{{ $item['description'] }}</p>
              </div>
              <div class="card-footer bg-white border-0 p-0">
                <a href="" class="btn btn-info btn-block text-white">Readmore</a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
      <div class="d-flex justify-content-center">
        <a href="" class="btn btn-outline-primary font-weight-bold px-5">See More</a> 
      </div>
    </div>
  </section>

  <!-- Testimonial -->
  <section class="testimonial-section my-5">
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

@endsection
