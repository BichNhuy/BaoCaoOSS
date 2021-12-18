@extends('_Layout')
@section('content_category')
<div class="left-sidebar">
    <h2>Danh mục sản phẩm</h2>
    <div class="panel-group category-products" id="accordian"><!--category-productsr-->
		@foreach($category as $cate)
		<div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordian" href="#{{$cate->category_id}}">
                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                        {{$cate->category_name}}
                    </a>
                </h4>
            </div>
            <div id="{{$cate->category_id}}" class="panel-collapse collapse">
                <div class="panel-body">
                    <ul>
						@foreach($brand as $bra)
							@if($bra->category_id == $cate->category_id)
								<li><a href="#">{{$bra->brand_name}}</a></li>
							@endif
						@endforeach
                    </ul>
                </div>
            </div>
        </div>
		@endforeach
    </div><!--/category-products-->
</div>
@endsection
@section('content_product')
<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Danh sách sản phẩm</h2>
						@foreach ($all_product as $key => $pro)
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="{{asset('storage/app/' . $pro->product_image)}}" alt="" />
											<h2>{{number_format($pro->product_price)}} <span style="color: #9fa8c9">đ</span></h2>
											<p>{{$pro->product_name}}</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
										</div>

								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Yêu thích</a></li>
									</ul>
								</div>
							</div>
						</div>
						@endforeach
					</div><!--features_items-->
					{{-- <div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">Sản hẩm nổi bật</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="{{('public/frontend/images/iphone.jpeg')}}" alt="" />
													<h2>26,000,000 vnđ</h2>
													<p>Iphone 12 Pro 128GB</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="{{('public/frontend/images/iphone.jpeg')}}" alt="" />
													<h2>26,000,000 vnđ</h2>
													<p>Iphone 12 Pro 128GB</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="{{('public/frontend/images/iphone.jpeg')}}" alt="" />
													<h2>26,000,000 vnđ</h2>
													<p>Iphone 12 Pro 128GB</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
												</div>
												
											</div>
										</div>
									</div>
									
									
								</div>
								<div class="item">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="{{('public/frontend/images/samsung.jpeg')}}" alt="" />
													<h2>44,000,000</h2>
													<p>Samsung Galaxy Z 5G</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="{{('public/frontend/images/samsung.jpeg')}}" alt="" />
													<h2>44,000,000</h2>
													<p>Samsung Galaxy Z 5G</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="{{('public/frontend/images/samsung.jpeg')}}" alt="" />
													<h2>44,000,000</h2>
													<p>Samsung Galaxy Z 5G</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items--> --}}
@endsection
