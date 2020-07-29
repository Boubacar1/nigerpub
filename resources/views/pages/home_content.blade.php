@extends('layout')
@section('content')
{{-- @include('slider') --}}
<h2 class="title text-center">Sociétés en vedette</h2>
	<?php foreach($toute_societe_publiee as $v_societe_publiee){?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="{{URL::to($v_societe_publiee->image_societe)}}" style="height:250px;" alt="" />
											<h2>{{$v_societe_publiee->nom_societe}}</h2>
											<p>{{$v_societe_publiee->nom_categorie}}</p>
											<!-- <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Afficher</a> -->
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>{{$v_societe_publiee->nom_societe}} </h2>
												<a href="{{URL::to('/view_societe/'.$v_societe_publiee->id_societe)}}">
												<p>{{$v_societe_publiee->nom_categorie}}</p>
												<a href="{{URL::to('/view_societe/'.$v_societe_publiee->id_societe)}}" class="btn btn-default add-to-cart"><i class="fa fa-plane"></i>Afficher</a>
											</div>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>{{$v_societe_publiee->nom_societe}}</a></li>
										<li><a href="{{URL::to('/view_societe/'.$v_societe_publiee->id_societe)}}"><i class="fa fa-plus-square"></i>Afficher</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					<?php } ?>													
					</div><!--features_items-->
					
					
					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">Promotion en cours</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="{{URL::to('frontend/images/home/promotion2.jpg')}}" alt="" />
													<!-- <h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> -->
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="{{URL::to('frontend/images/home/promotion2.jpg')}}" alt="" />
													<!-- <h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> -->
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="{{URL::to('frontend/images/home/promotion2.jpg')}}" alt="" />
													<!-- <h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> -->
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
													<img src="{{URL::to('frontend/images/home/promotion2.jpg')}}" alt="" />
													<!-- <h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> -->
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="{{URL::to('frontend/images/home/promotion2.jpg')}}" alt="" />
													<!-- <h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> -->
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="{{URL::to('frontend/images/home/promotion2.jpg')}}" alt="" />
													<!-- <h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> -->
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
					</div><!--/recommended_items-->


@endsection