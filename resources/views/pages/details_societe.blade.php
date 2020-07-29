@extends('layout')
@section('content')

<div class="col-sm-9 padding-right">
    <div class="product-details"><!--details-societe-->
        <div class="col-sm-5">
            <div class="view-product">
            <img src="{{URL::to($societe_par_details->image_societe)}}" alt="" />
                <!-- <h3>ZOOM</h3> -->
            </div>          
        </div>
        <div class="col-sm-7">
            <div class="product-information"><!--/societe-information-->
                <img src="{{URL::to('frontend/images/details-societe/news.jpg')}}" class="newarrival" alt="" />
                <h2>{{$societe_par_details->nom_societe}}</h2>
                <p>Infos: {{$societe_par_details->nom_categorie}}</p>
                <!-- <img src="{{URL::to('frontend/images/details-societe/rating.png')}}" alt="" /> -->

                    <!-- <input name="qty" type="text" value="1" />
                        <input type="hidden" name="id_societe" value="{{$societe_par_details->id_societe}}">
                            <button type="submit" class="btn btn-fefault cart">
                                <i class="fa fa-shopping-cart"></i>
                                Ajouter
                        </input>
                    </input>
                            </button> -->
                </form>
                </span>
                    <p><b>Produit/service :</b> {{$societe_par_details->nom_produit}}</p>
                    <p><b>Categoie:</b> {{$societe_par_details->nom_categorie}}</p>
                  
        </div><!--/societe-information-->
    </div><!--/details-societe-->
</div>   
    <div class="category-tab shop-details-tab"><!--category-tab-->
        <div class="col-sm-12">
            <ul class="nav nav-tabs">
                <li><a href="#details" data-toggle="tab">Plus d'informations</a></li>
                <!-- <li><a href="#companyprofile" data-toggle="tab">Profile</a></li>
                <li><a href="#tag" data-toggle="tab">Tag</a></li>
                <li class="active"><a href="#reviews" data-toggle="tab">Reviews (5)</a></li> -->
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade" id="details" >
            <p>{{$societe_par_details->societe_long_description}}</p>
            </div>

            <!-- <div class="tab-pane fade" id="companyprofile" >
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="images/home/gallery1.jpg" alt="" />
                                <h2>$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                            </div>
                        </div>
                    </div>
                </div>       
            </div>        
            <div class="tab-pane fade" id="tag" >
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="images/home/gallery1.jpg" alt="" />
                                <h2>$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>   
            <div class="tab-pane fade active in" id="reviews" >
                <div class="col-sm-12">
                    <ul>
                        <li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
                        <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
                        <li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                         tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam,
                          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                        nulla pariatur.</p><p><b>Write Your Review</b></p> -->

                    <!-- <form action="#" style="background-color:white;">
                        <span>
                            <input type="text" placeholder="Votre Nom"/>
                            <input type="email" placeholder="Adresse mail"/>
                        </span>
                        <textarea name="" ></textarea>
                        <b>Rating: </b> <img src="{{URL::to('frontend/images/details-societe/rating.png')}}" alt="" />
                        <button type="button" class="btn btn-default pull-right">
                            Submit
                        </button> -->
                    </form>
                </div>
            </div>
        </div>
    </div>          
    </div>
    </div><!--/category-tab-->
    

@endsection