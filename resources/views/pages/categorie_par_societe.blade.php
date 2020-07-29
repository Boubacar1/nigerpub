@extends('layout')
@section('content')
<h2 class="title text-center">Sociétés en vedette</h2>
	<?php foreach($societe_par_categorie as $v_categorie_par_societe){?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="{{URL::to($v_categorie_par_societe->image_societe)}}" style="height:250px;" alt="" />
											<h2>{{$v_categorie_par_societe->nom_societe}}</h2>
											<p>{{$v_categorie_par_societe->societe_short_description}}</p>
											<!-- <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-plane"></i>Afficher</a> -->
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>{{$v_categorie_par_societe->nom_societe}}</h2>
												<p>{{$v_categorie_par_societe->societe_short_description}}</p>
												<!-- <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-plane"></i>Afficher</a> -->
											</div>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<!-- <li><a href="#"><i class="fa fa-plus-square"></i>Ajouter dans wishlist</a></li> -->
										<!-- <li><a href="#"><i class="fa fa-plus-square"></i>Afficher</a></li> -->
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
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Afficher</a> -->
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
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Afficher</a> -->
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
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Afficher</a> -->
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
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Afficher</a> -->
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
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Afficher</a> -->
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