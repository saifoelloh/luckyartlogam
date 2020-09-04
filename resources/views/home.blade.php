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
                  {{ $item['category'] }}
                </p>
                <p class="card-text">{{ $item['description'] }}</p>
              </div>
              <div class="card-footer bg-white border-0 p-0">
                <a href="{{route('product.detail', $item['id'])}}" class="btn btn-info btn-block text-white">Readmore</a>
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
  @php
    $testimonials = [
      [
        'image'        => asset('assets/testimoni/testi-01.jpg'),
      ],
      [
        'image'        => asset('assets/testimoni/testi-02.jpg'),
      ],
      [
        'image'        => asset('assets/testimoni/testi-03.jpg'),
      ],
      [
        'image'        => asset('assets/testimoni/testi-04.jpg'),
      ],
      [
        'image'        => asset('assets/testimoni/testi-05.jpg'),
      ],
      [
        'image'        => asset('assets/testimoni/testi-06.jpg'),
      ],
      [
        'image'        => asset('assets/testimoni/testi-07.jpg'),
      ],
      [
        'image'        => asset('assets/testimoni/testi-08.jpg'),
      ],
      [
        'image'        => asset('assets/testimoni/testi-09.jpg'),
      ],
      [
        'image'        => asset('assets/testimoni/testi-10.jpg'),
      ],
      [
        'image'        => asset('assets/testimoni/testi-11.jpg'),
      ],
      [
        'image'        => asset('assets/testimoni/testi-12.jpg'),
      ],
      [
        'image'        => asset('assets/testimoni/testi-13.jpg'),
      ],
      
    ];
  @endphp
  <section class="testimonial-section my-5">
    <div class="container">
      <div class="row">
        <div class="testimonial-image col-lg-5">
          <div id="carouselTestimonial" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              @foreach($testimonials as $testi)
                @if($testi['image'] == $testimonials[0]['image'])
                  <div class="carousel-item active" data-interval="7000">
                    <img src="{{ asset('assets/testimoni/testi-01.jpg') }}" class="d-block w-100 " alt="...">
                  </div>
                @else
                  <div class="carousel-item" data-interval="3000">
                    <img src="{{ $testi['image'] }}" class="d-block w-100 " alt="...">
                  </div>
                @endif
              @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselTestimonial" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselTestimonial" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <div class="col-lg"></div>
        <div class="col-lg-6 px-5">
          <h1 class="title-section">Testimonial</h1>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio odit labore vel ullam laborum eos aspernatur cumque? Exercitationem eaque porro, sit facere id, quos voluptates possimus nulla ut quaerat assumenda odit voluptatum soluta saepe commodi eveniet. Magnam doloremque temporibus dolore provident repellendus eius atque. Quas quasi atque, molestias, odio in suscipit consequatur quam quod sit ipsa commodi corrupti? Rem, delectus!</p>
        </div>
      </div>
    </div>
  </section>

@endsection

