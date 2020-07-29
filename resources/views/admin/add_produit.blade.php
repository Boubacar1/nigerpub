@extends('admin_layout')
@section('admin_content')
			
<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
    <a href="{{URL::to('/dasboard')}}">Accueil</a>
        <i class="icon-angle-right"></i> 
    </li>
    <li>
        <i class="icon-edit"></i>
        <a href="#">Ajouter un Produit</a>
    </li>
</ul>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Ajouter un Produit</h2>
        </div>

<!--  Validation de l'ajout d'une catégorie -->
        <p class="alert-success">
          <?php
          $message = Session::get('message');
              if($message){
                  echo $message;
                  Session::put('message', null);
                }
          ?>   
        </p>
<!--  Fin validation de l'ajout d'une catégorie -->

        <div class="box-content">
        <form class="form-horizontal" action="{{url('/save-produit')}}" method="post">
                
                <!-- Founction csrf_field (Cross-site request forgeries) pour générer un token contre toute action malveillante -->
                {{ csrf_field() }}
              <fieldset>              
                <div class="control-group">
                  <label class="control-label" for="date01">Nom du Produit</label>
                  <div class="controls">
                    <input type="text" class="input-xlarge" name="nom_produit" required="">
                  </div>
                </div>
                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Description du Produit</label>
                    <div class="controls">
                      <textarea class="cleditor" name="description_produit" rows="3" required=""></textarea>
                    </div>
                  </div>
                <div class="control-group hidden-phone">
                  <label class="control-label" for="textarea2">Statut du Produit</label>
                  <div class="controls">
                    <input type="checkbox" name="statut_publication" value="1">
                  </div>
                </div>
                <div class="form-actions">
                  <button type="submit" class="btn btn-primary">Ajouter le Produit</button>
                  <button type="reset" class="btn">Annuler</button>
                </div>
              </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->

@endsection