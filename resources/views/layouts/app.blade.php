<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Lucky Art Logam') }}</title>


    <link rel="icon" href="{{ asset('favicons/favicon.ico') }}"/>
    <link rel="manifest" href="/manifest.json">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

		<!-- Custom Style -->
		<link rel="stylesheet" href="{{ asset('custom/app.css') }}">

		@stack('link')

		<!-- Fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow sticky-top">
            <div class="container">
								<a class="navbar-brand" href="{{ url('/') }}">
								  <div class="d-flex align-items-center">
										<img src="{{ asset('assets/logo-luckyart.png')}}" alt="">
										<h4 class="d-none d-md-inline-block ml-2 mb-0 font-weight-bolder">Lucky Art Tembaga</h4>
									</div>
                </a>
               <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
											<li class="nav-item active">
												<a class="nav-link" href="{{ url('/') }}">Home </a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="{{ route('product.list') }}">Product</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="{{ url('/') }}#testimonialSection">Testimonial</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="{{ url('/') }}#aboutSection">Tentang Kami</a>
											</li>
											<a href="#footerInfo" class="btn btn-primary">Hubungi Kami</a>
                    </ul>

                    
                </div> 
            </div>
        </nav>

        <main class="">
            @yield('content')
				</main>

			<footer id="footerInfo">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-6 col-lg-4">
							<h4 class="title bold">Hubungi Kami</h4>
							<div class="items">
								<a class="item d-flex align-items-center mt-3" href="tel:+6281338391846">
									<i class="mr-4 fas fa-mobile-alt fa-2x"></i>
									<p class="mb-0">+62 813-3839-1846</p>
								</a>
								<a class="item d-flex align-items-center my-3" href="https://wa.me/6281338391846">
									<i class="mr-3 fab fa-whatsapp fa-2x"></i>
									<p class="mb-0">+62 813-3839-1846</p>
								</a>
								<a class="item d-flex align-items-center my-3">
									<i class="mr-3 fas fa-envelope fa-2x"></i>
									<p class="mb-0">luckyart91@gmail.com</p>
								</a>
								<a class="item d-flex align-items-center mb-3" href="https://www.google.com/maps/place/Lucky+Art+Tembaga/@-7.4871249,110.5312559,21z/data=!4m5!3m4!1s0x0:0xc6c51cb89e2c7bfd!8m2!3d-7.4879626!4d110.5310024">
									<i class="mr-4 fas fa-map-marker-alt fa-2x"></i>
									<p class="mb-0">Dukuh Ringgit RT03 / RW 03, Kembangkuning, Cepogo, Kabupaten Boyolali, Jawa Tengah 57362</p>
								</a>
							</div>
									
						</div>
						<div class="col-12 col-md-6 col-lg-4 my-5 my-lg-0">
							<h4 class="title bold">Social Media</h4>
							<div class="items">
								<a class="item d-flex align-items-center mt-3" href="https://www.instagram.com/lucky_art_tembaga/">
									<i class="mr-4 fab fa-instagram fa-2x"></i>
									<p class="mb-0">lucky_art_tembaga</p>
								</a>
								<a class="item d-flex align-items-center my-3" href="https://www.facebook.com/lucky.artcopper">
									<i class="mr-4 fab fa-facebook fa-2x"></i>
									<p class="mb-0">Lucky Art Tembaga</p>
								</a>
								<a class="item d-flex align-items-center mb-3" href="https://www.linkedin.com/in/lucky-art-300853136/" >
									<i class="mr-4 fab fa-linkedin fa-2x"></i>
									<p class="mb-0">lucky-art-300853136</p>
								</a>
							</div>
						</div>
						<div class="col-12 col-md-12 col-lg-4">
							<h4 class="title font-weight-bold">No Rek</h4>
							<div class="bank-number items">
								<p class="mt-3 font-weight-bold">An. Edi Kurniawan</p>
								<div class="item d-flex align-items-center my-3 row">
									<div class="col-5 col-sm-3 col-md-2 col-lg-4">
										<img  src="{{ asset('assets/logo-bca.png') }}" alt="">
									</div>
									<p class="mb-0">1430-3267-39</p>
								</div>
								<div class="item d-flex align-items-center my-3 row">
									<div class="col-5 col-sm-3 col-md-2 col-lg-4">
										<img src="{{ asset('assets/logo-bri.png') }}" alt="">
									</div>
									<p class="mb-0">6659-0102-1338-530</p>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</footer>
    </div>
    @stack('js')
</body>

</html>
