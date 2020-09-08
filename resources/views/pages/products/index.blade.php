@extends('layouts.app')

@section('content')

  <!-- Detail Product -->
  <section class="detail-product-list-section my-5 container">
    <div class="card">
      <div class="card-body">
        <h1 class="title-section font-weight-bold text-center">Products</h1>
        <div class="row product-list">
          @foreach ($products as $product)
            <div class="col-12 col-md-6 col-lg-4 mb-5">
              <div class="card mx-auto">
                <img src="{{ Storage::url($product['photo']) }}" class="card-img-top" alt="...">
                <div class="card-body overflow-hidden">
                  <h6 class="card-title font-weight-bold mb-0 text-capitalize">{{ $product['name'] }}</h6>
                  <p class="product-category mb-1">
                    {{ $product['category'] }}
                  </p>
                  <p class="card-text"><?= $product['description'] ?></p>
                </div>
                <div class="card-footer bg-white border-0 p-0">
                  <a href="{{route('product.detail', $product['id'])}}" class="btn btn-info btn-block font-weight-bold text-white">Lihat Detail</a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>

@endsection
