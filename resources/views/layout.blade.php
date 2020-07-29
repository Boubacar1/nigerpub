<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Accueil | NIGER-PUB</title>
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('frontend/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">
        
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{URL::to('frontend/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{URL::to('frontend/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{URL::to('frontend/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{URL::to('frontend/images/ico/apple-touch-icon-57-precomposed.png')}}">
       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +227 80 87 46 71</a></li>
								<li><a href="#"><i class="fa fa-phone"></i> +227 96 53 66 38</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> contact@nigerpub.com</a></li>
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
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
						<a href="{{URL::to('/')}}"><img src="{{URL::to('frontend/images/home/logo.png')}}" alt="" /></a>
						</div>
						<div class="btn-group pull-right clearfix">
							<div class="btn-group">
								<!--<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">Canada</a></li>
									<li><a href="">UK</a></li>
								</ul> -->
								<button type="button" class="btn btn-default get">
								<a class="brand" class="scrollto" href="https://docs.google.com/forms/d/e/1FAIpQLSf9Et6sQgH55xJSzCvBBP6Wzhj6IQ2YVTSu09a1DqeuWV27yQ/viewform?usp=pp_url" target="_blank"><i data-toggle="tooltip"></i><span>ESPACE QUIZZ</span></a>
									
								</button>
							</div>
							
							<!--<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">Canadian Dollar</a></li>
									<li><a href="">Pound</a></li>
								</ul>
							</div> -->
						</div>
					</div>
					<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-plane"></i> Tourisme</a>						
								<li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Achat/Vente</a></li>
								<li><a href="cart.html"><i class="fa fa-dollar"></i> Location/Vente</a></li>
								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Services</a></li>
								
								<!--<li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li> -->
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
								<li><a href="{{('/')}}" class="active">Accueil</a></li>
								<li class="dropdown"><a href="#">Transfert d'argent<i class="fa fa-angle-down"></i></a>
                                    <!-- <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">BENIF AFOUA</a></li>
										<li><a href="product-details.html">AL IZZA</a></li> 
										<li><a href="checkout.html">NITA</a></li> 
										<li><a href="cart.html">ZENYA</a></li> 
										<li><a href="login.html">ORANGE MONEY</a></li>
										<li><a href="login.html">AIRTEL MONEY</a></li> 
                                    </ul> -->
                                </li> 
								<li class="dropdown"><a href="#">Transport<i class="fa fa-angle-down"></i></a>
                                    <!-- <ul role="menu" class="sub-menu">
                                        <li><a href="">RIMBO</a></li>
										<li><a href="">AL IZZA</a></li>
										<li><a href="">AZAWAD</a></li>
										<li><a href="l">SONEF</a></li>
										<li><a href="">SONITRAV</a></li>
										<li><a href="">SALIM</a></li>
										<li><a href="">STM</a></li>
										<li><a href="">3STV</a></li>
										<li><a href="">NIJMA</a></li>
										<li><a href="">NOUR</a></li>
                                    </ul> -->
                                </li> 
								<li><a href="">Téléphonie Mobile<i class="fa fa-angle-down"></i></a>
									<!-- <ul role="menu" class="sub-menu">
										<li><a href="blog.html">Niger Télécom</a></li>
										<li><a href="blog-single.html">Moov Niger</a></li>
										<li><a href="blog-single.html">Orange Niger</a></li>
										<li><a href="blog-single.html">Airtel Niger</a></li>
									</ul> -->
								</li>
								<li><a href="">Autres<i class="fa fa-angle-down"></i></a>
                                    <!-- <ul role="menu" class="sub-menu">
                                        <li><a href="">Instituts Privés</a></li>
										<li><a href="">Universités Privées</a></li> 
									</ul> -->
								</li>
							</ul>
						</div>
					</div>
					<!-- <div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Rechercher"/>
						</div>
					</div> -->
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

	<!-- Espace pour la bannière -->
	<section id="slider">
		<div class="container text-center">
			<div class="row">
				<div class="col-sm-12">
					<img src="{{URL::to('frontend/images/home/sponsors.jpg')}}" alt="" />	
				</div>
			</div>
		</div>
	</section>
	<!-- Fin espace pour la bannière -->

	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
							<li data-target="#slider-carousel" data-slide-to="3"></li>
							<li data-target="#slider-carousel" data-slide-to="4"></li>
							<li data-target="#slider-carousel" data-slide-to="5"></li>
							<!-- <li data-target="#slider-carousel" data-slide-to="6"></li>
							<li data-target="#slider-carousel" data-slide-to="7"></li> -->
							<!-- <li data-target="#slider-carousel" data-slide-to="8"></li>
							<li data-target="#slider-carousel" data-slide-to="9"></li> -->
						</ol>
						
						<div class="carousel-inner">
							<?php
								$all_published_slider = DB::table('tbl_slider')
															->where('statut_publication',1)
															->get();
								$i=1;							
								foreach( $all_published_slider as $v_slider ){									
									if($i==1){
								?>
							<div class="item active">
							<?php }else{?>
								<div class="item ">
								<?php } ?>
								<div class="col-sm-4">
									<h1><span>NIGER</span>-PUB</h1>
									<h2>La publicité autrement !</h2>					
									<p> 
									<span class="pull-left"></span>{{$v_slider->text_slider}}
									</p>
									<!-- <button type="button" class="btn btn-default get">Get it now</button> -->
								</div>
								<div class="col-sm-8">
								<img src="{{URL::to($v_slider->image_slider)}}" class="girl img-responsive" alt="" />
									{{-- <img src="{{URL::to('frontend/images/home/pricing.png')}}"  class="pricing" alt="" /> --}}
								</div>
							</div>						
							<?php $i++;} ?>						
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
					<div class="left-sidebar">
						<h2>Sociétés</h2>
						<div class="panel-group category-products" id="accordian">
						<!--category-productsr-->
							<div class="panel panel-default">
						<?php
							$all_categorie_publiee = DB::table('tbl_categorie')
													->where('statut_publication',1)
													->get();
							foreach($all_categorie_publiee as $v_categorie){?>
							<div class="panel panel-default">
								<div class="panel-heading">
								<h4 class="panel-title"><a href="{{URL::to('/societe_par_categorie/'.$v_categorie->id_categorie)}}">{{$v_categorie->nom_categorie}}</a></h4>
								</div>
							</div>
					<?php } ?>	
						</div><!--/category-products-->
					</div>
						<div class="brands_products"><!--brands_products-->
							<h2>Produits & Services</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
								<?php
										$tout_produit_publie = DB::table('tbl_produit')
																->where('statut_publication',1)
																->get();
										foreach($tout_produit_publie as $v_produit){?>
									<li><a href="{{URL::to('/societe_par_produit/'.$v_produit->id_produit)}}"> <span class="pull-right"></span>{{$v_produit->nom_produit}}</a></li>
							 <?php } ?>
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<!-- <div class="price-range">
							<h2>Price Range</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div>/price-range -->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="{{URL::to('frontend/images/home/communique.jpg')}}" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						@yield('content')
				    </div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		<!-- <div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>NIGER</span>-PUB</h2>
							<p>Le N°1 de la publicité en ligne au Niger</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{URL::to('frontend/images/home/iframe1.png')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{URL::to('frontend/images/home/iframe2.png')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{URL::to('frontend/images/home/iframe3.png')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{URL::to('frontend/images/home/iframe4.png')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="{{URL::to('frontend/images/home/map.png')}}" alt="" />
							<p>Adresse : Porte 244, rue de la Tapoa, quartier francophonie, Niamey Niger</p>
						</div>
					</div>
				</div> 
			</div>
		</div> -->
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Transfert d'argent</h2>
							<ul class="nav nav-pills nav-stacked">
							<li><a href="#">Company Information</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Store Location</a></li>
								<li><a href="#">Affillate Program</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Transport</h2>
							<ul class="nav nav-pills nav-stacked">
							<li><a href="#">Company Information</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Store Location</a></li>
								<li><a href="#">Affillate Program</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Téléphonie mobile</h2>
							<ul class="nav nav-pills nav-stacked">
							<li><a href="#">Company Information</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Store Location</a></li>
								<li><a href="#">Affillate Program</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Tourisme</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Company Information</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Store Location</a></li>
								<li><a href="#">Affillate Program</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>NIGER PUB</h2>
							<form action="#" class="searchform">
								<!-- <input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button> -->
								<p>Conctez-nous</p>
								<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i>+227 80 87 46 71 / +227 96 53 66 38</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> contact@nigerpub.com</a></li>
							</ul>
						</div>
						<p><a href="#">Adresse : Porte 244, rue de la Tapoa, quartier francophonie, Niamey Niger</a></p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2020 NIGER-PUB. Tous Droits Reservés.</p>
					<p class="pull-right">Développé avec <i class="fa fa-heart"></i> par <span><a target="_blank" href="#"><b>NIGER-PUB</b></a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="{{asset('frontend/js/jquery.js')}}"></script>
	<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('frontend/js/price-range.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
</body>
</html>