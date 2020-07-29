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
        <a href="#">Modifier un produit</a>
    </li>
</ul>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Modifier un produit</h2>
        </div>
<!--  Fin validation de l'ajout d'un fabricant -->

        <div class="box-content">
        <form class="form-horizontal" action="{{url('/update-produit', $info_produit->id_produit)}}" method="post">              
                <!-- Founction csrf_field (Cross-site request forgeries) pour générer un token contre toute action malveillante -->
                {{ csrf_field() }}

              <fieldset>              
                <div class="control-group">
                  <label class="control-label" for="textarea2">Désignation du produit/service</label>
                  <div class="controls">
                  <input type="text" class="input-xlarge" name="nom_produit" value="{{$info_produit->nom_produit}}">
                  </div>
                </div>

                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Description du produit/service</label>
                    <div class="controls">
                      <textarea class="cleditor" name="description_produit" rows="3" required>
                            {{$info_produit->description_produit}}
                      </textarea>
                    </div>
                  </div>
                <div class="form-actions">
                  <button type="submit" class="btn btn-primary">Enregistrer</button>
                  <button type="reset" class="btn">Annuler</button>
                </div>
              </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->

@endsection