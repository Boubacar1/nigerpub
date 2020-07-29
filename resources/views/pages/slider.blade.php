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
                        <li data-target="#slider-carousel" data-slide-to="6"></li>
                        <li data-target="#slider-carousel" data-slide-to="7"></li>
                        <li data-target="#slider-carousel" data-slide-to="8"></li>
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
                            <div class="col-sm-8">
                                <img src="{{URL::to($v_slider->id_slider)}}" class="girl img-responsive" alt="" />
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