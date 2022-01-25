<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title') - Sab</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:type" content="website">
	<meta property="og:url" content='https://sab.rs/'>
	<meta property="og:image" content='https://sab.rs/images/icons/logo.jpg'>
	<meta property="og:site_name" content="SAB informatika">
	<meta property="og:title"        content="SAB informatika" />
	<meta property="og:description"   content="Stampa i prodaja reklamne, kozne, drvene galanterije..." />



<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('images/icons/logo.jpg')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/themify/themify-icons.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/elegant-font/html-css/style.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/slick/slick.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/lightbox2/css/lightbox.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
<!--===============================================================================================-->

<style>
.slick3-dots{
	display:inline;
}

@media only screen and (min-width: 768px) {
	#phon3 {
  width: calc(100% / 4);
  }
	#phon {
	width: calc(100% / 5);
	}
	/* .item1-slick1{
		width:100%;
	} */
}
</style>
<script>
function scrollWin() {
  window.scrollTo(0, 10000);
}
</script>
</head>
<body class="animsition">

	<!-- Header -->
	<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
				<div class="topbar-social">
					<a href="https://www.facebook.com/sab.informatika" class="topbar-social-item fa fa-facebook"> SAB Nis</a>
					<a href="https://www.instagram.com/sab_gift_shop/" class="topbar-social-item fa fa-instagram"> sab_gift_shop</a>
					<!-- <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
					<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a> -->
					<a href="javascript:void(0)" class="topbar-social-item fa fa-youtube-play"></a>
				</div>

				<span class="topbar-child1">
					Narodnih heroja 75,
18000 Niš, Srbija +381 63 423-400
				</span>
				&nbsp;&nbsp;&nbsp;
				<span class="topbar-email">
				sab@sab.rs
				</span>

				<div class="topbar-child2">
					<form action="{{url('search')}}" method="get">
					<input style="height:30px;"class="s-text7 size6 p-l-23 p-r-50" type="text" name="search_product" placeholder="Search Products...">

					<button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
						<i class="fs-12 fa fa-search" aria-hidden="true"></i>
					</button>
					</form>

					<!-- <div class="topbar-language rs1-select2">
						<select class="selection-1" name="time">
							<option>USD</option>
							<option>EUR</option>
						</select>
					</div> -->
				</div>
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="{{url('/')}}" class="logo">
					<img src="{{asset('images/icons/logo.jpg')}}" alt="IMG-LOGO" style="max-height: 80px;">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<!-- <li>
								<a href="{{url('/')}}">Home</a>

							</li> -->
      @foreach($data['categoryMenu'] as $cat)
							<li>
								<a style="font-size:11px;" href="{{url('list/'.str_replace(' ','_',$cat->title))}}">{{ $cat->title }}</a>
								@if($cat->subcategory->first())
								<ul class="sub_menu">
									@foreach($cat->subcategory as $sub)
									<li><a href="{{url('list/'.str_replace(' ','_',$cat->title).'/'.str_replace(' ','_',$sub->title))}}">{{$sub->title}}</a></li>
									@endforeach

								</ul>
								@endif
							</li>
							@endforeach

							<li>
								<a style="font-size:11px;" href="javascript:void(0)">Usluge</a>

								<ul class="sub_menu">

									@foreach($data['uslugeMenu'] as $usluga)
									<li><a href="{{url('usluga/'.str_replace(' ','_',$usluga->title))}}">{{$usluga->title}}</a></li>

		         @endforeach


								</ul>

							</li>
							<li>
								<a style="color:red;" href="{{url('akcija')}}">Akcija</a>

							</li>
							<li>
								<a style="font-size:11px;" href="{{url('/')}}">Downloads</a>
								<ul class="sub_menu">


									<li><a href="{{asset('downloads/Cenovnik drvo-koza 2021.pdf')}}" download>Cenovnik drvo-koza 2021</a></li>
										<li><a href="{{asset('downloads/Cenovnik stampe 2021.pdf')}}" download>Cenovnik stampe 2021</a></li>
											<li><a href="{{asset('downloads/FLAJER CNC 2021.pdf')}}" download>FLAJER CNC 2021</a></li>
												<li><a href="{{asset('downloads/Flajer koza 2021.pdf')}}" download>Flajer koza 2021</a></li>
													<li><a href="{{asset('downloads/Katalog PROMO 2021.pdf')}}" download>Katalog PROMO 2021</a></li>
													<li><a href="{{asset('downloads/LUX pokloni 2021.pdf')}}" download>LUX pokloni 2021</a></li>
													<li><a href="{{asset('downloads/USB and gadzet 2021.pdf')}}" download>USB and gadzet 2021</a></li>
													<li><a href="{{asset('downloads/Pismo o namerama SAB PROMO 2021.docx')}}" download>Pismo o namerama SAB PROMO 2021</a></li>
													<li><a href="{{asset('downloads/Porudzbenica nova SAB PROMO 2021.docx')}}" download>Porudzbenica nova SAB PROMO 2021</a></li>
								</ul>

							</li>
							<li>
								<a onclick="scrollWin()"  style="font-size:11px;" href="javascript:void(0)">Kontakt</a>

							</li>








						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				<div class="header-icons">
					<!-- <a href="#" class="header-wrapicon1 dis-block">
						<img src="{{asset('images/icons/icon-header-01.png')}}" class="header-icon1" alt="ICON">
					</a> -->

					<!-- <span class="linedivide1"></span> -->

					<div class="header-wrapicon2">
						<img src="{{asset('images/icons/icon-header-02.png')}}" class="header-icon1 js-show-header-dropdown" alt="ICON">
						@if(Session::get('ses'))
						<span class="header-icons-noti">{{  collect(Session::get('ses'))->count() }}</span>
						@endif
   @if(Session::get('ses'))
						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
          @foreach(Session::get('ses') as $sesi)
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="{{asset(App\Product::where('id',$sesi['product_id'])->first()->image_product->first()->image) }}" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											{{ App\Product::where('id',$sesi['product_id'])->first()->title }}
										</a>

										<span class="header-cart-item-info">
											{{$sesi['num-product']}} x {{App\Product::where('id',$sesi['product_id'])->first()->cena * App\KursnaLista::first()->dinar}}
										</span>
									</div>
								</li>
								@endforeach




							</ul>

							<!-- <div class="header-cart-total">
								Total: $75.00
							</div> -->

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="{{ url('cart')}}" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Vidi Korpu
									</a>
								</div>

								<!-- <div class="header-cart-wrapbtn">

									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div> -->
							</div>
						</div>
						@endif
					</div>
				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="{{url('/')}}" class="logo-mobile" >
				<img src="{{asset('images/icons/logo.jpg')}}" alt="IMG-LOGO" style="max-height: 66px;">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<!-- <a href="#" class="header-wrapicon1 dis-block">
						<img src="{{asset('images/icons/icon-header-01.png')}}" class="header-icon1" alt="ICON">
					</a> -->

					<span class="linedivide2"></span>

					<div class="header-wrapicon2">
						<img src="{{asset('images/icons/icon-header-02.png')}}" class="header-icon1 js-show-header-dropdown" alt="ICON">
						@if(Session::get('ses'))
						<span class="header-icons-noti">{{  collect(Session::get('ses'))->count() }}</span>
						@endif
         @if(Session::get('ses'))
						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								@foreach(Session::get('ses') as $sesi)
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="{{asset(App\Product::where('id',$sesi['product_id'])->first()->image_product->first()->image) }}" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											{{ App\Product::where('id',$sesi['product_id'])->first()->title }}
										</a>

										<span class="header-cart-item-info">
											{{$sesi['num-product']}} x {{App\Product::where('id',$sesi['product_id'])->first()->cena * App\KursnaLista::first()->dinar}}
										</span>
									</div>
								</li>
								@endforeach
							</ul>

							<!-- <div class="header-cart-total">
								Total: $75.00
							</div> -->

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="{{ url('cart')}}" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Vidi Korpu
									</a>
								</div>

								<!-- <div class="header-cart-wrapbtn">

									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div> -->
							</div>
						</div>
						@endif
					</div>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					<!-- <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
							Free shipping for standard order over $100
						</span>
					</li> -->

					<!-- <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">
							<span class="topbar-email">
								fashe@example.com
							</span>

							<div class="topbar-language rs1-select2">
								<select class="selection-1" name="time">
									<option>USD</option>
									<option>EUR</option>
								</select>
							</div>
						</div>
					</li> -->

					<li class="item-topbar-mobile p-l-10">
						<!-- <div class="topbar-social-mobile">
							<a href="#" class="topbar-social-item fa fa-facebook"></a>
							<a href="#" class="topbar-social-item fa fa-instagram"></a>
							<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
							<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
							<a href="#" class="topbar-social-item fa fa-youtube-play"></a>

						</div> -->
						<form action="{{url('search')}}" method="get">
						<input style="height:30px;"class="s-text7 size6 p-l-23 p-r-50" type="text" name="search_product" placeholder="Search Products...">

						<button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
							<i class="fs-12 fa fa-search" aria-hidden="true"></i>
						</button>
						</form>

					</li>
      @foreach($data['categoryMenu'] as $cat)
					<li class="item-menu-mobile">
						<a href="{{url('list/'.str_replace(' ','_',$cat->title))}}">{{$cat->title}}</a>
							@if($cat->subcategory->first())
						<ul class="sub-menu">
								@foreach($cat->subcategory as $sub)
							<li><a href="{{url('list/'.str_replace(' ','_',$cat->title).'/'.str_replace(' ','_',$sub->title))}}">{{$sub->title}}</a></li>
			         @endforeach
						</ul>
						<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
						@endif


					</li>
					@endforeach


					<li class="item-menu-mobile">
						<a href="#">Usluge</a>
						<ul class="sub-menu">
							@foreach($data['uslugeMenu'] as $usluga)
							<li><a href="{{url('usluga/'.str_replace(' ','_',$usluga->title))}}">{{$usluga->title}}</a></li>
							 @endforeach
						</ul>
						<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
					</li>

					<li class="item-menu-mobile">
						<a  href="{{url('akcija')}}">Akcija</a>

					</li>
					<li class="item-menu-mobile">
						<a  href="{{url('/')}}">Downloads</a>
						<ul class="sub-menu">


							<li><a href="{{asset('downloads/Cenovnik drvo-koza 2021.pdf')}}" download>Cenovnik drvo-koza 2021</a></li>
								<li><a href="{{asset('downloads/Cenovnik stampe 2021.pdf')}}" download>Cenovnik stampe 2021</a></li>
									<li><a href="{{asset('downloads/FLAJER CNC 2021.pdf')}}" download>FLAJER CNC 2021</a></li>
										<li><a href="{{asset('downloads/Flajer koza 2021.pdf')}}" download>Flajer koza 2021</a></li>
											<li><a href="{{asset('downloads/Katalog PROMO 2021.pdf')}}" download>Katalog PROMO 2021</a></li>
											<li><a href="{{asset('downloads/LUX KUTIJE 2021.pdf')}}" download>LUX KUTIJE 2021</a></li>
											<li><a href="{{asset('downloads/USB and gadzet 2021.pdf')}}" download>USB and gadzet 2021</a></li>
											<li><a href="{{asset('downloads/Pismo o namerama SAB PROMO 2021.docx')}}" download>Pismo o namerama SAB PROMO 2021</a></li>
											<li><a href="{{asset('downloads/Porudzbenica nova SAB PROMO 2021.docx')}}" download>Porudzbenica nova SAB PROMO 2021</a></li>
						</ul>
         <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
					</li>
					<li class="item-menu-mobile">
						<a onclick="scrollWin()"  style="font-size:11px;" href="javascript:void(0)">Kontakt</a>

					</li>
				</ul>
			</nav>
		</div>
	</header>
