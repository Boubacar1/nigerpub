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
                <h2><i class="halflings-icon user"></i><span class="break"></span>Liste des sociétés</h2>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                  <thead>
                      <tr>
                          <th>ID Société</th>
                          <th>Nom de la société</th>
                          <th>Image de la société</th>
                          <th>Désignation du produit/service</th>
                          <th>Description du produit/service</th>
                          <th>Statut</th>
                          <th>Actions</th>
                      </tr>
                  </thead>

            <!--Pour lister tous les produits enregistrés dans la Base des Données -->    
            @foreach( $info_all_societe as $v_societe)   
                  <tbody>
                    <tr>
                        <td>{{ $v_societe->id_societe}}</td>
                        <td class="center">{{ $v_societe->nom_societe }}</td>
                        <td><img src="{{URL::to($v_societe->image_societe)}}" style="height: 80px; width:80px;">
                        </td>
                        <td class="center">{{ $v_societe->nom_categorie }}</td>
                        <td class="center">{{ $v_societe->nom_produit }}</td>
                        <td class="center">
                            
            <!--Pour affiher le statut des produsocietesits (Actifs ou Inactifs) -->
                        @if($v_societe->statut_publication == 1)
                            <span class="label label-success">Actif</span>
                            @else
                            <span class="label label-danger">Inactif</span>
                            @endif
                        </td>
                        <td class="center">
                            @if($v_societe->statut_publication == 1)
                        <a class="btn btn-danger" href="{{URL::to('/societe_inactive/'.$v_societe->id_societe)}}">
                                <i class="halflings-icon white thumbs-down"></i>  
                            </a>
                            @else
                            <a class="btn btn-success" href="{{URL::to('/societe_active/'.$v_societe->id_societe)}}">
                                    <i class="halflings-icon white thumbs-up"></i>  
                                </a>
                            @endif
                            <!--Fin -->

                            <a class="btn btn-info" href="{{URL::to('/edit-societe/'.$v_societe->id_societe)}}">
                                <i class="halflings-icon white edit"></i>  
                            </a>
                            <a class="btn btn-danger delete-confirm" href="{{URL::to('/delete-societe/'.$v_societe->id_societe)}}" id="delete">
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