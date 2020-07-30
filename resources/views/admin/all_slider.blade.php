@extends('admin_layout')
@section('admin_content')

<ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Accueil</a> 
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Tous les sliders</a></li>
    </ul>
    <!-- Message de confirmation de suppression d'un fabricant-->
     <p class="alert-success">
        <?php
             $message = Session::get('message');
               if($message){
                  echo $message;
                  Session::put('message', null);
               }
            ?>
            </p>
    <div class="row-fluid sortable">		
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon user"></i><span class="break"></span>Sliders</h2>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                  <thead>
                      <tr>
                          <!-- <th>ID Slider</th> -->
                          <th>Text Slider</th>
                          <th>Image Slider</th>
                          <th>Statut</th>
                          <th>Actions</th>
                      </tr>
                  </thead>

            <!--Pour lister tous les produits enregistrés dans la Base des Données -->    
            @foreach( $all_slider as $v_slider)   
                  <tbody>
                    <tr>
                        
                        <td>{{ $v_slider->text_slider }}</td>  
                        <td><img src="{{URL::to($v_slider->image_slider)}}" style="height: 80px; width:80px;">
                        </td>                           
            <!--Pour affiher le statut des sliders (Actifs ou Inactifs) -->
                        <td class="center">
                        @if($v_slider->statut_publication == 1)
                            <span class="label label-success">Actif</span>
                            @else
                            <span class="label label-danger">Inactif</span>
                            @endif
                        </td>
                        <td class="center">
                            @if($v_slider->statut_publication == 1)
                        <a class="btn btn-danger" href="{{URL::to('/slider_inactive/'.$v_slider->id_slider)}}">
                                <i class="halflings-icon white thumbs-down"></i>  
                            </a>
                            @else
                            <a class="btn btn-success" href="{{URL::to('/slider_active/'.$v_slider->id_slider)}}">
                                    <i class="halflings-icon white thumbs-up"></i>  
                                </a>
                            @endif
                            <!--Fin -->

                            <a class="btn btn-info" href="{{URL::to('/edit-slider/'.$v_slider->id_slider)}}">
                                <i class="halflings-icon white edit"></i>  
                            </a>
                            <a class="btn btn-danger delete-confirm" href="{{URL::to('/delete-slider/'.$v_slider->id_slider)}}" id="delete">
                                <i class="halflings-icon white trash"></i> 
                            </a>
                        </td>
                    </tr>         
                  </tbody>
                @endforeach 
                <!--Fin -->  
              </table>            
            </div>
        </div><!--/span-->
    
    </div><!--/row-->

@endsection