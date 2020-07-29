@extends('admin_layout')
@section('admin_content')

<ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Accueil</a> 
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Tous les produits</a></li>
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
                <h2><i class="halflings-icon users"></i><span class="break"></span>Liste des produits</h2>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                  <thead>
                      <tr>
                          <th>ID  Produit</th>
                          <th>Nom du Produit</th>
                          <th>Description du Produit</th>
                          <th>Statut</th>
                          <th>Actions</th>
                      </tr>
                  </thead>

            <!--Pour lister toutes les catégories enregistrées dans la Base des Données -->    
            @foreach( $info_tout_produit as $v_produit)   
                  <tbody>
                    <tr>
                        <td>{{ $v_produit->id_produit}}</td>
                        <td class="center">{{ $v_produit->nom_produit}}</td>
                        <td class="center">{{ $v_produit->description_produit}}</td>
                        <td class="center">
                            
            <!--Pour affiher le statut des catégories (Active ou Inactives) -->
                        @if($v_produit->statut_publication == 1)
                            <span class="label label-success">{{-- $v_produit->statut_publication--}}Active</span>
                            @else
                            <span class="label label-danger">{{-- $v_produit->statut_publication--}}Inactive</span>
                            @endif
                        </td>
                        <td class="center">
                            @if($v_produit->statut_publication == 1)
                        <a class="btn btn-danger" href="{{URL::to('/produit_inactive/'.$v_produit->id_produit)}}">
                                <i class="halflings-icon white thumbs-down"></i>  
                            </a>
                            @else
                            <a class="btn btn-success" href="{{URL::to('/produit_active/'.$v_produit->id_produit)}}">
                                    <i class="halflings-icon white thumbs-up"></i>  
                                </a>
                            @endif
                            <!--Fin -->

                            <a class="btn btn-info" href="{{URL::to('/edit-produit/'.$v_produit->id_produit)}}">
                                <i class="halflings-icon white edit"></i>  
                            </a>
                            <a class="btn btn-danger delete-confirm " href="{{URL::to('/delete-produit/'.$v_produit->id_produit)}}" id="delete">
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