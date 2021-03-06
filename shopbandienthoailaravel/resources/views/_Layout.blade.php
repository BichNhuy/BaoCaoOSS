<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +84 98 79 80 417</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> Khavy1203@gmail.com.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="{{('')}}" alt="" />KhaVy_Logo</a>
						</div>
						
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-user"></i> T??i kho???n</a></li>
								{{-- <li><a href="#"><i class="fa fa-star">Y??u th??ch</i> </a></li> --}}
								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Thanh to??n</a></li>
								<li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Gi??? h??ng</a></li>
								<li><a href="login.html"><i class="fa fa-lock"></i> ????ng nh???p</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="{{URL::to('/trang-chu')}}" class="active">Home</a></li>
								{{-- <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">S???n ph???m</a></li>
										<li><a href="product-details.html">Product Details</a></li> 
										<li><a href="checkout.html">Checkout</a></li> 
										<li><a href="cart.html">Cart</a></li> 
										<li><a href="login.html">Login</a></li> 
                                    </ul>
                                </li>  --}}
								{{-- <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li> 
								<li><a href="404.html">404</a></li> --}}
								<li><a href="contact-us.html">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>Khavy</span>-SHOP</h1>
									<h2>Iphone 12</h2>
									<p>Hi???u n??ng v?????t xa m???i gi???i h???n
										Apple ???? trang b??? con chip m???i nh???t c???a h??ng (t??nh ?????n 11/2020) cho iPhone 12 ???? l?? A14 Bionic, ???????c s???n xu???t tr??n ti???n tr??nh 5 nm v???i hi???u su???t ???n ?????nh h??n so v???i chip A13 ???????c trang b??? tr??n phi??n b???n ti???n nhi???m iPhone 11.</p>
									<button type="button" class="btn btn-default get">Xem chi ti???t</button>
								</div>
								<div class="col-sm-6">
									<img src="{{('public/frontend/images/iphone.jpeg')}}" class="girl img-responsive" alt="" />
								</div>	
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>Khavy</span>-SHOP</h1>
									<h2>OPPO Find X3 Pro 5G</h2>
									<p>OPPO ???? l??m khuynh ?????o th??? tr?????ng smartphone khi cho ra ?????i chi???c ??i???n tho???i OPPO Find X3 Pro 5G. ????y l?? m???t s???n ph???m c?? thi???t k??? ?????c ????o, s??? h???u c???m camera kh???ng, c???u h??nh thu???c top ?????u trong th??? gi???i Android.</p>
									<button type="button" class="btn btn-default get">Xem chi ti???t</button>
								</div>
								<div class="col-sm-6">
									<img src="{{('public/frontend/images/oppo.png')}}" class="girl img-responsive" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>Khavy</span>-SHOP</h1>
									<h2>Samsung Galaxy Z Fold3 5G 512GB </h2>
									<p>Galaxy Z Fold3 5G ????nh d???u b?????c ti???n m???i c???a Samsung trong ph??n kh??c ??i???n tho???i g???p cao c???p khi ???????c c???i ti???n v??? ????? b???n c??ng nh???ng n??ng c???p ????ng gi?? v??? c???u h??nh hi???u n??ng, h???a h???n s??? mang ?????n tr???i nghi???m s??? d???ng ?????t ph?? cho ng?????i d??ng.</p>
									<button type="button" class="btn btn-default get">Xem chi ti???t</button>
								</div>
								<div class="col-sm-6">
									<img src="{{('public/frontend/images/samsung.jpeg')}}" class="girl img-responsive" alt="" />
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					@yield('content_category')
				</div>
				
				<div class="col-sm-9 padding-right">
					@yield('content_product')
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		FOOTER
	</footer><!--/Footer-->
    <script src="{{asset('public/frontend/js/jquery.js')}}"></script>
	<script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('public/frontend/js/main.js')}}"></script>
</body>
</html>