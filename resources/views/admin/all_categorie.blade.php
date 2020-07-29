@extends('admin_layout')
@section('admin_content')

<ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Accueil</a> 
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Toutes les catégories</a></li>
    </ul>
    <!-- Message de confirmation de suppression d'une entrprise-->
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
                <h2><i class="halflings-icon chart"></i><span class="break"></span>Catégories</h2>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                  <thead>
                      <tr>
                          <th>ID Catégorie</th>
                          <th>Désignation</th>
                          <th>Description</th>
                          <th>Statut</th>
                          <th>Actions</th>
                      </tr>
                  </thead>

            <!--Pour lister toutes les catégories enregistrées dans la Base des Données -->    
            @foreach( $info_all_categorie as $v_categorie)   
                  <tbody>
                    <tr>
                        <td>{{ $v_categorie->id_categorie}}</td>
                        <td class="center">{{ $v_categorie->nom_categorie}}</td>
                        <td class="center">{{ $v_categorie->description_categorie}}</td>
                        <td class="center">
                            
            <!--Pour affiher le statut des catégories (Active ou Inactives) -->
                        @if($v_categorie->statut_publication == 1)
                            <span class="label label-success">{{-- $v_categorie->statut_publication--}}Active</span>
                            @else
                            <span class="label label-danger">{{-- $v_categorie->statut_publication--}}Inactive</span>
                            @endif
                        </td>
                        <td class="center">
                            @if($v_categorie->statut_publication == 1)
                        <a class="btn btn-danger" href="{{URL::to('/categorie_inactive/'.$v_categorie->id_categorie)}}">
                                <i class="halflings-icon white thumbs-down"></i>  
                            </a>
                            @else
                            <a class="btn btn-success" href="{{URL::to('/categorie_active/'.$v_categorie->id_categorie)}}">
                                    <i class="halflings-icon white thumbs-up"></i>  
                                </a>
                            @endif
                            <!--Fin -->

                            <a class="btn btn-info" href="{{URL::to('/edit-categorie/'.$v_categorie->id_categorie)}}">
                                <i class="halflings-icon white edit"></i>  
                            </a>
                            <a class="btn btn-danger delete-confirm" href="{{URL::to('/delete-categorie/'.$v_categorie->id_categorie)}}" id="delete">
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